@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.t opnav', ['title' => 'Edit Mahasiswa'])
       <div class="row mx-2">
            <div class="col-12">
                <!-- START FORM -->
                <form action='{{ url('mahasiswa/'.$data->nim) }}' method='post'>
                    @csrf 
                    @method('PUT')
                    <div class="card my-3 p-3 bg-body rounded shadow-sm">
                        <a href='{{ url('mahasiswa') }}' class="btn btn-secondary"><< kembali</a>
                        <div class="mb-3 row">
                            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='nim' value="{{ $data->nim }}" id="nim">
                                {{-- {{ $data->nim }} --}}
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='nama' value="{{ $data->nama }}" id="nama">
                            </div>
                        </div>
                        <div class="mb-3 row ">
                            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                            <div class="col-sm-10 col-form-group">
                                <select  class="col-form-select" name="jurusan"  value="{{ $data->jurusan }}"  id="jurusan" required>
                                    <option>S1 Informatika</option>
                                    <option>S1 Sistem Informasi</option>
                                    <option>S1 Teknik Elektro</option>
                                    <option>S1 Manajemen Rekayasa</option>
                                    <option>S1 Teknik Bioproses</option>
                                    <option>D3 Teknologi Komputer</option>
                                    <option>D3 Teknologi Informasi</option>
                                    <option>D4 Teknologi Rekayasa Perangkat Lunak</option>
                                </select>
                                {{-- <input type="text" class="form-control" name='jurusan' value="{{ $data->jurusan }}" id="jurusan"> --}}
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jurusan" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
                        </div>
                    </div>
                </form>
                <!-- AKHIR FORM -->
            </div>            
        </div>
    @include('layouts.footers.auth.footer') 
@endsection