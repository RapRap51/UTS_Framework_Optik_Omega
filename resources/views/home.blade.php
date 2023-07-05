@extends('app')

@section('content')
    <div class="container text-center my-5">
        <div class="custom-color1">
            <div>
                <h2 align="center">
                    Alfa Omega Optik
                </h2>
                <img src="{{ Vite::asset('resources/images/FotoLab.png') }}" alt="">
                <p style="margin-top: 70px">
                    Alfa Omega Optik berlokasi di Jl Ketintang Surabaya. Alfa Omega Optik mampu bersaing dengan
                    bisnis-bisnis lainnya yang ada di area Jl. Ketintang Surabaya. Melalui produk andalannya yaitu optik
                    yang berasal dari optik berkualitas mampu memberikan / menyediakan optik terbaik untuk seluruh pelanggan
                    setianya
                </p>
            </div>
            <br>
            <hr>
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <h4>Kontak</h4><br>
                        <a class="text-decoration-none text-info btn btn-light"
                            href="https://wa.me/085155900655">WhatsApp</a>
                    </div>
                    <div class="col">
                        <h4>Alamat</h4><br>
                        <a class="text-decoration-none text-info btn btn-light"
                            href="https://www.google.com/maps/dir//%27-7.309178,112.727852%27">Maps</a>
                        <div>
                            <p>
                                Jalan Ketintang No.89
                                Wonokromo
                                Gayungan
                                Kota Surabaya
                                Jawa Timur 60231
                                Indonesia
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <h4>Jam Buka</h4><br>
                        <div class="row">
                            <div class="col">
                                <h6><b>Hari</b></h6>
                            </div>
                            <div class="col">
                                <h6><b>Jam</b></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h6>Senin</h6>
                            </div>
                            <div class="col">
                                <h6>08.00–21.00</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h6>Selasa</h6>
                            </div>
                            <div class="col">
                                <h6>08.00–21.00</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h6>Rabu</h6>
                            </div>
                            <div class="col">
                                <h6>08.00–21.00</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h6>Kamis</h6>
                            </div>
                            <div class="col">
                                <h6>08.00–21.00</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h6>Jumat</h6>
                            </div>
                            <div class="col">
                                <h6>08.00–21.00</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h6>Sabtu</h6>
                            </div>
                            <div class="col">
                                <h6>10.00–19.30</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h6>Minggu</h6>
                            </div>
                            <div class="col">
                                <h6>Tutup</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>

        </div>

    </div>
@endsection
