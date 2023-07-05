@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><img src="{{ Vite::asset('resources/images/Admin Alfa.png') }}" alt="" width="200px"></a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">

            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link @if($currentRouteName == 'home') active @endif">Home</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('barang.index') }}" class="nav-link @if($currentRouteName == 'list') active @endif">List Barang</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('profile') }}" class="nav-link @if($currentRouteName == 'profile') active @endif">Profile</a></li>
            </ul>

            <hr class="d-md-none text-white-50">

        </div>
        {{-- <a href="{{ route('barang.create') }}" class="btn btn-light"><i class="bi bi-plus-square me-2"></i>Tambah</a> --}}
    </div>
</nav>
