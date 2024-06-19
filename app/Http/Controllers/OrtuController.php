<?php

namespace App\Http\Controllers;

use App\Models\Ortu;
use App\Models\User;
use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
use Barryvdh\DomPDF\Facade\Pdf;

class OrtuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ortu = Ortu::orderBy('nama', 'asc')->get();
        return view('pages.admin.ortu.index', compact('ortu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'ortu_id' => 'required|unique:ortus',
            'no_telp' => 'required',
            'alamat' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ], [
            'ortu_id.unique' => 'ID sudah terdaftar',
        ]);

        if (isset($request->foto)) {
            $file = $request->file('foto');
            $namaFoto = time() . '.' . $file->getClientOriginalExtension();
            $foto = $file->storeAs('images/ortu', $namaFoto, 'public');
        }

        $ortu = new Ortu;
        $ortu->nama = $request->nama;
        $ortu->ortu_id = $request->ortu_id;
        $ortu->no_telp = $request->no_telp;
        $ortu->alamat = $request->alamat;
        $ortu->foto = $foto;
        $ortu->save();


        return redirect()->route('ortu.index')->with('success', 'Data ortu berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = Crypt::decrypt($id);
        $ortu = Ortu::findOrFail($id);

        return view('pages.admin.ortu.profile', compact('ortu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $ortu = Ortu::findOrFail($id);

        return view('pages.admin.ortu.edit', compact('ortu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'ortu_id' => 'required|unique:ortus'
        ], [
            'ortu_id.unique' => 'ID sudah terdaftar',
        ]);

        $ortu = Ortu::find($id);
        $ortu->nama = $request->input('nama');
        $ortu->ortu_id = $request->input('ortu_id');
        $ortu->no_telp = $request->input('no_telp');
        $ortu->alamat = $request->input('alamat');

        if ($request->hasFile('foto')) {
            $lokasi = 'images/ortu/' . $ortu->foto;
            if (File::exists($lokasi)) {
                File::delete($lokasi);
            }
            $foto = $request->file('foto');
            $namaFoto = time() . '.' . $foto->getClientOriginalExtension();
            $tujuanFoto = public_path('/images/ortu');
            $foto->move($tujuanFoto, $namaFoto);
            $ortu->foto = $namaFoto;
        }

        $ortu->update();

        return redirect()->route('ortu.index')->with('success', 'Data ortu berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ortu = Ortu::find($id);
        $ortu->delete();

        // Hapus data user
        if ($user = User::where('id', $ortu->user_id)->first()) {
            $user->delete();
        }

        return back()->with('success', 'Data ortu berhasil dihapus!');
    }

    public function downloadPDF($id)
    {
        $laporan = Laporan::findOrFail($id);
        $pdf = PDF::loadView('pages.ortu.laporan.pdf', compact('laporan'));
        return $pdf->download('laporan_' . $laporan->id . '.pdf');
    }
}
