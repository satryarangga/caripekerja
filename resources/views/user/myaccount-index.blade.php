@extends('layouts.main')

@section('title', 'Home')

@section('content')

    <section class="resume-process padd-tb">

        <div class="container">

            <h2>Kode Referal Anda : {{$referral}}</h2>

            <strong>Ajak teman anda untuk mendaftar di Caripekerja dan gunakan kode referal ini di halaman pendaftaran</strong>

            @include('user.myaccount-link')

        </div>

    </section>

<!--WORKER CHANGE PROFILE START-->

<section id="worker-signup" class="resum-form padd-tb @if($authRole == 'employer') hide @endif">

    <div class="container">

        <form role="form" method="POST" action="{{ url('update-profile') }}" enctype="multipart/form-data">
            {{ csrf_field() }}

            {!! session('displayMessage') !!}

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <label>Nama Lengkap (Sesuai KTP) *</label>

                    <input name="name" value="{{$authData['name']}}" type="text" placeholder="Nama Lengkap">

                </div>

                <div class="col-md-6 col-sm-6">

                    <label>Nomor HP *</label>

                    <input name="phone" value="{{$authData['phone']}}" readonly type="text" placeholder="Nomor HP">

                </div>

                <div class="col-md-6 col-sm-6">

                    <label>Tanggal Lahir *</label>

                    <input name="birthdate" id="datepicker" value="{{date('m/d/Y', strtotime($authData['birthdate']))}}" type="text" placeholder="Tanggal Lahir">

                </div>

                <div class="col-md-6 col-sm-6">

                    <label>Pendidikan Terakhir</label>

                    <div class="selector">

                        <select name="degree" class="full-width">

                            <option disabled selected>Pilih Pendidikan Terakhir Pekerja</option>

                            @foreach ($degree as $key => $row)
                                <option @if($authData['degree'] == $row) selected="selected" @endif>{{$row}}</option>
                            @endforeach

                        </select>

                    </div>

                </div>



                <div class="col-md-6 col-sm-6">

                    <label>Status *</label>

                    <div style="float: left;width: 50%">
                        <input style="margin-right: 10px" type="radio" @if($authData['marital'] == '1') checked="checked" @endif name="marital" value="1" id="yes"> <label for="yes">Menikah</label>
                    </div>

                    <div style="float:right;width: 50%;">
                        <input style="margin-right: 10px;" type="radio" name="marital" @if($authData['marital'] == '2') checked="checked" @endif value="2" id="no"> <label for="no">Belum Menikah</label>
                    </div>

                    <div class="clearfix"></div>

                </div>

                <div class="col-md-6 col-sm-6">

                    <label>Jenis Kelamin *</label>

                    <div style="float: left;width: 50%">
                        <input style="margin-right: 10px" type="radio" @if($authData['gender'] == '1') checked="checked" @endif name="gender" value="1" id="male"> <label for="male">Laki - Laki</label>
                    </div>

                    <div style="float:right;width: 50%;">
                        <input style="margin-right: 10px;" type="radio" @if($authData['gender'] == '2') checked="checked" @endif name="gender" value="2" id="female"> <label for="female">Perempuan</label>
                    </div>

                    <div class="clearfix"></div>
                </div>

                <div class="col-md-6 col-sm-6">

                    <label>Kota Tempat Tinggal</label>
                    <div class="selector">

                        <select name="city" class="full-width">

                            <option disabled selected>Pilih Lokasi Kerja</option>

                            @foreach ($province as $rowProvince)
                                <option @if($authData['city'] == $rowProvince['id']) selected="selected" @endif value="{{$rowProvince['id']}}">{{$rowProvince['name']}}</option>
                            @endforeach

                        </select>

                    </div>

                </div>

                <div class="col-md-6 col-sm-6">

                    <label>Pengalaman Kerja</label>
                    <div class="selector">

                        <select name="exp" class="full-width">

                            <option disabled selected>Berapa Tahun Sudah Bekerja</option>

                            @for($i=1; $i<= $max_exp;$i++)
                                <option @if($authData['years_experience'] == $i) selected="selected" @endif value="{{$i}}">{{$i}} Tahun</option>
                            @endfor

                        </select>

                    </div>

                </div>

                <div class="col-md-6 col-sm-6">

                    <label>Profesi Anda (Bisa pilih lebih dari 1)</label>
                    <div>

                        <select multiple="multiple" name="category[]" class="multiple-select">
                            @foreach($category as $key => $row)
                                <option @if(in_array($row['id'], $selected_category)) selected="selected" @endif value="{{$row['id']}}">{{$row['name']}}</option>
                            @endforeach

                        </select>

                    </div>

                </div>

                <div class="col-md-6 col-sm-6">

                    <label>Foto Profil</label>

                    <div class="frame"><img style="width: 200px;height: 200px" src="{{$image}}" alt="img"></div>

                    <input type="file" name="photo" accept="image/*" capture="camera">

                </div>

                    <div class="col-md-12">

                    <div class="btn-col">

                        <input type="hidden" name="role" value="worker">

                        <input type="submit" value="Ubah Profil">

                    </div>

                </div>

            </div>

        </form>

    </div>

</section>

    <!--WORKER CHANGE PROFILE END-->


<!--EMPLOYER CHANGE PROFILE START-->

<section id="employer-signup" class="resum-form padd-tb @if($authRole == 'worker' || $authRole == null) hide @endif">

    <div class="container">

        <form role="form" method="POST" enctype="multipart/form-data" action="{{ url('/update-profile') }}">
            {{ csrf_field() }}

            {!! session('displayMessage') !!}

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <label>Nama Usaha *</label>

                    <input name="name" value="{{$authData['name']}}" type="text" placeholder="Nama Usaha">

                </div>

                <div class="col-md-6 col-sm-6">

                    <label>Email *</label>

                    <input name="email" value="{{$authData['email']}}" readonly type="text" placeholder="Email">

                </div>

                <div class="col-md-6 col-sm-6">

                    <label>Nama Pemilik</label>

                    <input name="name_owner" value="{{$authData['name_owner']}}" type="text" placeholder="Nama Pemilik Usaha">

                </div>

                <div class="col-md-6 col-sm-6">

                    <label>Nomor HP *</label>

                    <input name="phone" value="{{$authData['phone']}}" type="text" placeholder="Nomor HP">

                </div>

                <div class="col-md-6 col-sm-6">

                    <label>Bidang Usaha </label>

                    <input name="category" value="{{$authData['ukm_category']}}" type="text" placeholder="Contoh : Restoran, Toko Pakaian, Konveksi">

                </div>

                <div class="col-md-6 col-sm-6">

                    <label>Kota Tempat Usaha *</label>
                    <div class="selector">

                        <select name="city" class="full-width">

                            <option disabled selected>Pilih Kota Tempat Usaha</option>

                            @foreach ($province as $rowProvince)
                                <option @if($authData['city'] == $rowProvince['id']) selected="selected" @endif value="{{$rowProvince['id']}}">{{$rowProvince['name']}}</option>
                            @endforeach

                        </select>

                    </div>

                </div>

                <div class="col-md-6 col-sm-6">

                    <label>Alamat Lengkap Tempat Usaha *</label>

                    <textarea name="address">{{$authData['address']}}</textarea>

                </div>

                <div class="col-md-6 col-sm-6">

                    <label>Deskripsi Singkat Usaha Anda </label>

                    <textarea name="description">{{$authData['description']}}</textarea>

                </div>

                <div class="col-md-6 col-sm-6">

                    <label>Foto Logo Usaha</label>

                    <div class="frame"><img style="width: 200px;height: 200px" src="{{$image}}" alt="img"></div>

                    <input type="file" name="photo" accept="image/*" capture="camera">

                </div>

                <div style="clear: both"></div>

                <div class="col-md-12">

                    <div class="btn-col">

                        <input type="hidden" name="role" value="employer">

                        <input type="submit" value="Ubah Profil">

                    </div>

                </div>

            </div>

        </form>

    </div>

</section>

    <!--EMPLOYER CHANGE PROFILE END-->
@endsection