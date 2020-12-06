@php
    $no = 1;
@endphp

@extends('layouts/global')
@section('pages')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="h3 mb-0 text-gray-800 mb-4">Form Edit Category</h1>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('category.update', [$data->id]) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                          <label for="judul">Judul</label>
                          <input type="text" class="form-control" id="judul" name="title" value="{{$data->title}}">
                        </div>
                        <div class="form-group">
                          <label for="deskripsi">Deskripsi</label>
                          <textarea class="form-control" id="deskripsi" rows="3" name="description">{{$data->description}}</textarea>
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
