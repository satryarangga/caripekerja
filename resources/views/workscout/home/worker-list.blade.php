@extends('layouts.main')

@section('title', 'Home')

@section('content')

    <style>
        .chosen-single span, .result-selected { font-family: 'FontAwesome',"Roboto", Arial, Helvetica, sans-serif; } /* This is for the placeholder */
    </style>
    <div class="title-page list-worker"></div>
    <div class="clearfix"></div>

    <div class="container margin-bottom-40">
        <div class="four columns">
            <div class="widget">

            </div>
        </div>

        <div class="twelve columns">
            <div class="widget sort">
                <form action="{{route('worker-list')}}" method="post">
                    <span class="widget-sort-title">Urut Berdasarkan</span>
                    <select data-placeholder="Pengalaman" name="gender" class="widget-sort-select">
                        <option>Pengalaman</option>
                        <option>(Pengalaman) Tinggi ke Rendah</option>
                        <option>(Pengalaman) Rendah ke Tinggi</option>
                    </select>
                    <select data-placeholder="Pengalaman" name="gender" class="widget-sort-select">
                        <option>Usia</option>
                        <option>(Usia) Tinggi ke Rendah</option>
                        <option>(Usia) Rendah ke Tinggi</option>
                    </select>
                    <select data-placeholder="Pengalaman" name="gender" class="widget-sort-select">
                        <option>Pendidikan</option>
                        <option>(Pendidikan) Tinggi ke Rendah</option>
                        <option>(Pendidikan) Rendah ke Tinggi</option>
                    </select>
                </form>
            </div>
        </div>

    </div>

    <div class="container">
        <!-- Widgets -->
        <div class="four columns">
            <!-- Skills -->
            <form action="{{route('worker-list')}}" method="post">
                {{csrf_field()}}
                <div class="widget wrapperzz">
                    <select data-placeholder="Pilih Profesi" name="category" class="chosen-select">
                        <option value="0">@if(!isset($param['category']) || $param['category'] == 0) &#xf0b1 &nbsp;&nbsp; @endif Semua Profesi</option>
                        @foreach($category as $key => $row)
                            <option @if(isset($param['category']) && $param['category'] == $row['id']) selected @endif value="{{$row['id']}}">@if(isset($param['category']) && $param['category'] == $row['id']) &#xf0b1 &nbsp;&nbsp; @endif {{$row['name']}}</option>
                        @endforeach
                    </select>

                </div>

                <div class="widget">
                    <select data-placeholder="Pilih Kota Tinggal" name="city" class="chosen-select">
                        <option value="0">@if(!isset($param['city']) || $param['city'] == 0) &nbsp;&#xf041 &nbsp;&nbsp; @endif Semua Lokasi</option>
                        @foreach ($province as $rowProvince)
                            <option @if(isset($param['city']) && $param['city'] == $rowProvince['id']) selected @endif value="{{$rowProvince['id']}}">@if(isset($param['city']) && $param['city'] == $rowProvince['id']) &#xf041 &nbsp; &nbsp; @endif{{$rowProvince['name']}}</option>
                        @endforeach>
                    </select>

                </div>

                <div class="widget">
                    <select data-placeholder="Pilih Jenis Kelamin" name="gender" class="chosen-select">
                        <option value="0">@if(!isset($param['gender']) || $param['gender'] == 0) &nbsp;&#xf224; &nbsp; @endif Semua Jenis Kelamin</option>
                        <option @if(isset($param['gender']) && $param['gender'] == 1) selected @endif value="1">@if(isset($param['gender']) && $param['gender'] == 1) &#xf224; &nbsp; &nbsp; @endif Laki - Laki</option>
                        <option @if(isset($param['gender']) && $param['gender'] == 2) selected @endif value="2">@if(isset($param['gender']) && $param['gender'] == 2) &#xf224; &nbsp; &nbsp; @endif Perempuan</option>
                    </select>

                </div>

                <div class="widget">
                    <select data-placeholder="Pilih Status" name="status" class="chosen-select">
                        <option value="0">@if(!isset($param['status']) || $param['status'] == 0) &#xf004 &nbsp;&nbsp;@endif Semua Status</option>
                        <option @if(isset($param['status']) && $param['status'] == 1) selected @endif value="1">@if(isset($param['status']) && $param['status'] == 1) &#xf004 &nbsp; &nbsp; @endif Sudah Menikah</option>
                        <option @if(isset($param['status']) && $param['status'] == 2) selected @endif value="2">@if(isset($param['status']) && $param['status'] == 2) &#xf004 &nbsp; &nbsp; @endif Belum Menikah</option>
                    </select>

                </div>

                <div class="widget">
                    <select data-placeholder="Pilih Kota Tinggal" name="degree" class="chosen-select">
                        <option value="0">@if(!isset($param['degree']) || $param['degree'] == 0) &#xf19d &nbsp;@endif Semua Pendidikan</option>

                        @foreach ($degree as $key => $row)
                            <option @if(isset($param['degree']) && $param['degree'] == $row) selected @endif>@if(isset($param['degree']) && $param['degree'] == $row) &#xf19d &nbsp; &nbsp; @endif {{$row}}</option>
                        @endforeach>
                    </select>

                </div>

                <div class="widget">
                    <select data-placeholder="Pilih Status" name="exp" class="chosen-select">
                        <option value="0">@if(!isset($param['exp']) || $param['exp'] == 0) &nbsp;&#xf017 &nbsp;&nbsp;@endif Semua Rentang Pengalaman</option>
                        <option @if(isset($param['exp']) && $param['exp'] == 1) selected @endif value="1">@if(isset($param['exp']) && $param['exp'] == 1) &#xf017 &nbsp; &nbsp; @endif 1 - 5 Tahun</option>
                        <option @if(isset($param['exp']) && $param['exp'] == 2) selected @endif value="2">@if(isset($param['exp']) && $param['exp'] == 2) &#xf017 &nbsp; &nbsp; @endif 5 - 10 Tahun</option>
                        <option @if(isset($param['exp']) && $param['exp'] == 3) selected @endif value="3">@if(isset($param['exp']) && $param['exp'] == 3) &#xf017 &nbsp; &nbsp; @endif Lebih Dari 10 Tahun</option>
                    </select>

                </div>

                <div class="widget">
                    <ul class="checkboxes">
                        <li>
                            <input id="check-6" type="checkbox" name="age[]" value="0" @if((isset($param['age']) && in_array('0', $param['age'])) || !isset($param['age'])) checked @endif >
                            <label for="check-6">Semua Rentang Usia</label>
                        </li>
                        <li>
                            <input id="check-7" type="checkbox" name="age[]" value="1" @if(isset($param['age']) && in_array('1', $param['age'])) checked @endif >
                            <label for="check-7">18 - 25 Tahun</label>
                        </li>
                        <li>
                            <input id="check-8" type="checkbox" name="age[]" value="2" @if(isset($param['age']) && in_array('2', $param['age'])) checked @endif >
                            <label for="check-8">26 - 35 Tahun</label>
                        </li>
                        <li>
                            <input id="check-9" type="checkbox" name="age[]" value="3" @if(isset($param['age']) && in_array('3', $param['age'])) checked @endif >
                            <label for="check-9">35 - 45 Tahun</label>
                        </li>
                        <li>
                            <input id="check-10" type="checkbox" name="age[]" value="4" @if(isset($param['age']) && in_array('4', $param['age'])) checked @endif >
                            <label for="check-10">Diatas 45 Tahun</label>
                        </li>
                    </ul>

                </div>

                <div class="margin-top-15"></div>
                <button style="color: #fff;font-size: 16px;width: 100%" class="button">Filter</button>

            </form>
            <div class="margin-bottom-40"></div>
        </div>
        <!-- Widgets / End -->

        <!-- Recent Jobs -->
        <div class="twelve columns">
            <div class="padding-right">

                    @if(!empty($list))

                        @foreach ($list as $row)

                        <div class=" col-md-3 text-center">
                        <div class="candidate">
                            <a href="{{route('worker-detail', ['workerId' => $row['id']])}}">
                            <h4 class="text-uppercase">{{\App\Helpers\GlobalHelper::simplifyName($row['name'])}}</h4>
                            <img src="{{\App\Helpers\GlobalHelper::setUserImage($row['photo_profile'])}}" alt="{{$row['name']}}"  class="img-responsive">
                            <span style="text-transform: uppercase" class="resume-meta-info">
                                {{\App\Helpers\GlobalHelper::getAgeByBirthdate($row['birthdate'])}}
                            </span>
                            <ul class="list-unstyled text-center about-candidate">
                                @php
                                $category = explode(',',\App\Helpers\GlobalHelper::getWorkerCategory($row['category']));
                                @endphp
                                <li><span style="text-transform: uppercase;font-weight: 600">{{(!empty($category[0])) ? $category[0] : 'Admin'}}</span></li>
                                <li class="text-uppercase"><span>
                                        <div class="rating no-stars">
                                            <div class="star-rating"></div>
                                            <div class="star-bg"></div>
                                        </div>
                                    </span></li>
                                <li><i>{{\App\Helpers\GlobalHelper::getCityName($row['city'])}}</i></li>
                            </ul>
                            </a>
                            <div class="hidden text-uppercase view-resume">
                                <a href="{{route('worker-detail', ['workerId' => $row['id']])}}" class="btn"><span class="btn animated slideInUp align-center">Lihat Profil</span></a>
                            </div>
                        </div>
            </div>

                        @endforeach
                    @else
                        <p> Pekerja tidak ditemukan. Coba gunakan kriteria pencarian lain</p>
                    @endif

                <div class="clearfix"></div>

                {{$link}}

            </div>
        </div>

    </div>

    <div style="margin-bottom: 20px"></div>

@endsection