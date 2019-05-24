@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <!-- DataTales Product -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Tables Product</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Created at</th>
                            <th>Images</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Created at</th>
                            <th>Images</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($product as $p)
                        <tr>
                            <td>{{ $p['id'] }}</td>
                            <td>{{ $p['name'] }}</td>
                            <td>{{ $p['price'] }}</td>
                            <td>{{ $p['created_at'] }}</td>
                            @if(!$p->images()->get()->isEmpty())
                            <td>
                                <img src="{{ asset('/images/'.$p->images()->get()[0]->image_src) }}" class="img img-thumbnail" width="300">
                            </td>
                            @endif
                            <td>
                                <a href="{{ url('pubs-detail', $p->id) }}" class='btn btn-warning btn-xs fa fa-pencil-square-o'>Detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection