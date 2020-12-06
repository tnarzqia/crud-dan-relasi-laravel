@php
$no = 1;
@endphp
@extends('layouts/global')
@section('pages')
<h1 class="h3 mb-2 text-gray-800">{{$PageTitle}}</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Category</th>
                        <th>Judul</th>
                        <th>Article</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->category->title}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->article}}</td>
                        <td>
                            {{-- <button class="btn btn-warning">Update</button> --}}
                            <a href="{{ route('category.edit', [$item->id]) }}" class="btn btn-warning">Update</a>
                            {{-- <button class="btn btn-danger">Delete</button> --}}
                            <form action="{{ route('category.destroy', [$item->id]) }}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('after-javascript')
<script>
    $(document).ready(function () {
        $('#dataTable').DataTable();
    });

</script>
@endpush
