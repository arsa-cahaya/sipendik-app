@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Selamat datang pak/bu {{ Auth::user()->name }}</h1>
    </div>

    <div class="section-body">
        <div class="row ">
            <div class="col-12 col-sm-12 col-lg-5">
                <div class="card profile-widget">
                    <div class="profile-widget-header">
                        @if ($ortu->foto != null)
                        <img alt="image" src="{{ url(Storage::url($ortu->foto)) }}" class="rounded-circle profile-widget-picture">
                        @else
                        <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle profile-widget-picture">
                        @endif
                        <div class="profile-widget-items">
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">ID</div>
                                <div class="profile-widget-item-value">{{ $ortu->ortu_id }}</div>
                            </div>
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Telp</div>
                                <div class="profile-widget-item-value">{{ $ortu->no_telp }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-widget-description pb-0">
                        <div class="profile-widget-name">{{ $ortu->nama }}
                            <div class="text-muted d-inline font-weight-normal">
                                <div class="slash"></div> Wali Murid dari {{ $ortu->siswa->nama }}
                            </div>
                        </div>
                        <p>{{ $ortu->alamat }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
