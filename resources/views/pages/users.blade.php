@extends('layouts/global')
@section('pages')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="h3 mb-0 text-gray-800 mb-4">User</h1>
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary mb-4">Tambah User</button>
                    <form action="" method="GET">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                              </tr>
                            </tbody>
                          </table>
                    </form>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
{{-- @push('after-css')
<style>
    .judul {
        color: blueviolet;
    }

</style>
@endpush --}}
