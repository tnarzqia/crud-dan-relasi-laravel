@php
    $no = 1;
@endphp

@extends('layouts/global')
@section('pages')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="h3 mb-0 text-gray-800 mb-4">Form Tambah Siswa</h1>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('siswa.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="nama">Nama</label>
                          <input type="text" class="form-control" id="nama" placeholder="Nama Siswa" name="nama_siswa">
                        </div>
                        <div class="form-group">
                            <label for="no">No</label>
                            <input type="text" class="form-control" id="no" placeholder="Nomor Siswa" name="no">
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select name="kelas_id" id="kelas" style="width: 100%;" class="form-control">
                                <option disabled value>--Pilih Kelas--</option>
                                @foreach ($kelas as $k)
                                    <option value="{{$k->id}}">{{$k->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nis">Nis</label>
                            <input type="text" class="form-control" id="nis" placeholder="Nama Induk siswa" name="nis">
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
@push('after-js')
    <script>
        $(document).ready(function(){
            $('#dataTable').DataTable();
        });
    </script>
@endpush
