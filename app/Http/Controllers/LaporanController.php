<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Laporan;
use App\Models\Ortu;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::where('user_id', Auth::user()->id)->first();
        $siswa = Siswa::orderBy('nama', 'asc')->get();
        $laporan = Laporan::where('guru_id', $guru->id)->get();
        return view('pages.guru.laporan.index', compact('laporan', 'guru', 'siswa'));
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
        $guru = Guru::where('nip', Auth::user()->nip)->first();

        $this->validate($request, [
            'siswa_id' => 'required|unique:laporans',
        ], [
            'siswa_id.unique' => 'Siswa sudah memiliki laporan',
        ]);

        $laporan = new Laporan;
        $laporan->guru_id = $guru->id;
        $laporan->siswa_id = $request->siswa_id;
        $laporan->judul = $request->judul;
        $laporan->nilai_sikap = $request->nilai_sikap;
        $laporan->nilai_keterampilan = $request->nilai_keterampilan;
        $laporan->keterangan = $request->keterangan;
        $laporan->save();

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Laporan::find($id)->delete();
        return back()->with('success', 'Laporan berhasil dihapus!');
    }

    public function laporan()
    {
        $ortu = Ortu::where('user_id', Auth::user()->id)->first();
        $siswa = Siswa::where('id', $ortu->siswa_id)->first();
        $laporan = Laporan::where('siswa_id', $siswa->id)->get();

        return view('pages.ortu.laporan.index', compact('laporan', 'ortu', 'siswa'));
    }
}
