@php
    $no = 1;
@endphp

@extends('layouts/global')
@section('pages')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="h3 mb-0 text-gray-800 mb-4">Data Siswa</h1>
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('siswa.create') }}">
                        <button type="button" class="btn btn-primary mb-4">Tambah kelas</button>
                    </a>
                    <form action="" method="GET">
                        <table class="table" id="dataTable">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nomor</th>
                                <th scope="col">Nis</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$d->no}}</td>
                                    <td>{{$d->nis}}</td>
                                    <td>{{$d->nama_siswa}}</td>
                                    <td></td>
                                    <td>
                                        {{-- <button class="btn btn-warning in-line">Update</button> --}}
                                        <a href="{{ route('siswa.edit', [$d->siswa_id]) }}" class="btn btn-warning">Edit</a>

                                        <form action="{{ route('siswa.destroy', [$d->siswa_id]) }}" method="post">
                                            @csrf
                                            {{-- manipulasi method delete yang dikirim --}}
                                            <input type="hidden" name="_method" value="Delete">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                            {{-- <button class="btn btn-danger">Delete</button> --}}
                                        </form>
                                    </td>
                                  </tr>
                                @endforeach
                            </tbody>
                          </table>
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
