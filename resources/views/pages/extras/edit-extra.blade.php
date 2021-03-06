@php
    $no = 1;
@endphp

@extends('layouts/global')
@section('pages')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="h3 mb-0 text-gray-800 mb-4">Form Ubah Extra</h1>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('extra.update', [$data->extra_id]) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                          <label for="kelas">Nama</label>
                          <input type="text" class="form-control" id="kelas" placeholder="Nama" name="nama" value="{{$data->nama}}">
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
