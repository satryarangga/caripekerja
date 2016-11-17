@extends('layouts.main')

@section('title', 'Home')

@section('content')

    <!--POPULAR JOB CATEGORIES START-->

    <section id="listing" class="popular-categories">

        {!! session('displayMessage') !!}

        <div class="container">

            <div class="clearfix">

                <h2>Pilihan Profesi Pekerja</h2>

                <a href="{{route('worker-list')}}" class="btn-style-1">Lihat Semua Kategori Pekerja</a>
            </div>

            <div class="row">

                <div class="col-md-3 col-sm-6">

                    <div style="background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ) ,url('{{asset('images/bg/bgpekerja/babysitter.png')}}')" class="box bg-pekerja">

                        <h4><a href="#">Baby Sitter</a></h4>

                    </div>

                </div>

                <div class="col-md-3 col-sm-6">

                    <div style="background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ) ,url('{{asset('images/bg/bgpekerja/sopir.png')}}')" class="box bg-pekerja">

                        <h4><a href="#">Sopir</a></h4>

                    </div>

                </div>

                <div class="col-md-3 col-sm-6">

                    <div style="background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ) ,url('{{asset('images/bg/bgpekerja/pelayan.png')}}')" class="box bg-pekerja">

                        <h4><a href="#">Pelayan</a></h4>

                    </div>

                </div>

                <div class="col-md-3 col-sm-6">

                    <div style="background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ) ,url('{{asset('images/bg/bgpekerja/jagatoko.png')}}')" class="box bg-pekerja">

                        <h4><a href="#">Penjaga Toko</a></h4>

                    </div>

                </div>

                <div class="col-md-3 col-sm-6">

                    <div style="background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ) ,url('{{asset('images/bg/bgpekerja/admin.png')}}')" class="box bg-pekerja">

                        <h4><a href="#">Admin</a></h4>

                    </div>

                </div>

                <div class="col-md-3 col-sm-6">

                    <div style="background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ) ,url('{{asset('images/bg/bgpekerja/buruh.png')}}')" class="box bg-pekerja">

                        <h4><a href="#">Buruh Pabrik</a></h4>

                    </div>

                </div>

                <div class="col-md-3 col-sm-6">

                    <div style="background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ) ,url('{{asset('images/bg/bgpekerja/satpam.png')}}')" class="box bg-pekerja">

                        <h4><a href="#">Satpam</a></h4>

                    </div>

                </div>

                <div class="col-md-3 col-sm-6">

                    <div style="background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ) ,url('{{asset('images/bg/bgpekerja/montir.png')}}')" class="box bg-pekerja">

                        <h4><a href="#">Montir</a></h4>

                    </div>

                </div>

                <div class="col-md-3 col-sm-6">

                    <div style="background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ) ,url('{{asset('images/bg/bgpekerja/kurir.png')}}')" class="box bg-pekerja">

                        <h4><a href="#">Kurir</a></h4>

                    </div>

                </div>

                <div class="col-md-3 col-sm-6">

                    <div style="background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ) ,url('{{asset('images/bg/bgpekerja/koki.png')}}')" class="box bg-pekerja">

                        <h4><a href="#">Juru Masak</a></h4>

                    </div>

                </div>

                <div class="col-md-3 col-sm-6">

                    <div style="background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ) ,url('{{asset('images/bg/bgpekerja/kuli.png')}}')" class="box bg-pekerja">

                        <h4><a href="#">Kuli Bangunan</a></h4>

                    </div>

                </div>

                <div class="col-md-3 col-sm-6">

                    <div style="background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ) ,url('{{asset('images/bg/bgpekerja/ob.png')}}')" class="box bg-pekerja">

                        <h4><a href="#">Office Boy / Girl</a></h4>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--POPULAR JOB CATEGORIES END-->

    <!--CARA KERJA AREA START-->

    <section id="how-it-works" class="post-section padd-tb">

        <div class="container carikerja">

            <h2 style="margin-bottom: 50px">Bagaimana cara kerjanya?</h2>

            <div class="row">

                <div class="col-md-3 col-sm-3">
                    <div class="text-center">
                        <h4>Cari Pekerja</h4>
                        <i class="fa fa-search fa-3x"></i>
                        <p>Pilih profesi pekerja yang anda cari</p>
                    </div>
                </div>

                <div id="arrow-cara-1" class="col-md-1 col-sm-1">
                    <i class="fa fa-long-arrow-right fa-3x"></i>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="text-center">
                        <h4>Pilih Pekerja</h4>
                        <i class="fa fa-hand-pointer-o fa-3x"></i>
                        <p>Masukkan kriteria pekerja yang anda mau</p>
                    </div>
                </div>

                <div id="arrow-cara-2" class="col-md-1 col-sm-1">
                    <i class="fa fa-long-arrow-right fa-3x"></i>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="text-center">
                        <h4>Hubungi Pekerja</h4>
                        <i class="fa fa-phone fa-3x"></i>
                        <p>Dapatkan kontak pekerja mulai dari Rp.2.000 / kontak</p>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!--CARA KERJA AREA END-->

    <!--PRICE TABLE STYLE 1 START-->

    <section class="price-table" id="pricing">

        <div class="container">

            <h2>Paket Top Up</h2>

            <div class="box">

                <h4>BASIC</h4>

                <strong class="amount"><span>Rp.</span>100.000</strong>

                <ul>

                    <li>untuk 20 kontak</li>

                    <li>Rp.5000 / Kontak</li>

                </ul>

                <a href="#" class="btn-choose btn-color-2">Beli Sekarang</a>
            </div>

            <div class="box">

                <div class="head">Populer</div>

                <h4>BRONZE</h4>

                <strong class="amount"><span>Rp.</span>200.000</strong>

                <ul>

                    <li>untuk 80 kontak</li>

                    <li>Rp.2500 / Kontak</li>

                </ul>

                <a href="#" style="background: #f44336;" class="btn-choose btn-color-2">Beli Sekarang</a>
            </div>

            <div class="box">

                <h4>SILVER</h4>

                <strong class="amount"><span>Rp.</span>500.000</strong>

                <ul>

                    <li>untuk 250 kontak</li>

                    <li>Rp.2000 / Kontak</li>

                </ul>

                <a href="#" class="btn-choose btn-color-2">Beli Sekarang</a>
            </div>

            <div class="box">

                <h4>PLATINUM</h4>

                <strong class="amount"><span>Rp.</span>800.000</strong>

                <ul>

                    <li>untuk 600 kontak</li>

                    <li>Rp.1500 / Kontak</li>

                </ul>

                <a href="#" class="btn-choose btn-color-2">Beli Sekarang</a>
            </div>

        </div>

    </section>

    <!--PRICE TABLE STYLE 1 END-->

    <!--KEUNTUNGAN AREA START-->

    <section class="post-section padd-tb">

        <div class="container">

            <h2>Manfaat menggunakan <label class="logo-text">caripekerja.com</label></h2>

            <div class="row">

                <div class="col-md-4 col-sm-4">
                    <div class="text-center">
                        <i class="fa fa-clock-o fa-5x"></i>
                        <h5>Hemat Waktu</h5>
                        <p>Dapatkan pekerja dalam waktu yang singkat</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="text-center">
                        <i class="fa fa-money fa-5x"></i>
                        <h5>Hemat Uang</h5>
                        <p>Dapatkan kontak pekerja mulai dari Rp.2.000 / kontak</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="text-center">
                        <i class="fa fa-users fa-5x"></i>
                        <h5>Hemat Tenaga</h5>
                        <p>Dapatkan pekerja yang sesuai dengan kriteria anda</p>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!--KEUNTUNGAN AREA END-->


    <!--TESTIOMONIALS SECTION START-->

    <section id="testimonial" class="testimonials-section">

        <div class="container">

            <div id="testimonials-slider" class="owl-carousel owl-theme">

                <div class="item">

                    <div class="holder">

                        <div class="thumb"><img src="{{ asset("images/testi") }}/testo-img.png" alt="img"></div>

                        <div class="text-box"> <em>Calon karyawan yang ada di caripekerja.com memiliki kapabilitas yang sesuai dengan data yang ditampilkan di website nya </em>

                            <strong class="name">Ahmad Nuzirwan</strong> <span class="post">Supervisor Gudang Carrefour</span> </div>

                    </div>

                </div>

                <div class="item">

                    <div class="holder">

                        <div class="thumb"><img src="{{ asset("images/testi") }}/testo-img.png" alt="img"></div>

                        <div class="text-box"> <em>Cara baru dalam mendapatkan pekerja yang sesuai dengan ekspektasi</em>

                            <strong class="name">Alief Nochtavio</strong> <span class="post">Pemilik Restoran SariNusa</span> </div>

                    </div>

                </div>

            </div>

        </div>

        <!--CLIENTS SECTION START-->

        <section class="client-logo-row">

        </section>

        <!--CLIENTS SECTION END-->

    </section>

    <!--TESTIOMONIALS SECTION END-->


    <section>

    </section>

@endsection