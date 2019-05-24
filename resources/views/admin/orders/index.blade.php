@extends('layouts.admin')

@section('content')
<div class="container-fluid">
        <div>
                <a href="{{route ('admin.orders.create')}}" class="btn btn-primary">Tambah Order</a>
            </div>
            <br>
    <!-- DataTales Product -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Tables Order</h6>
        </div>
        <div class="card-body">
            @if (session('success'))
            <div class="form-group">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            @endif
           {{-- Data Tbel --}}
           <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Harga Total</th>
                            <th>Status</th>
                            <th>Kode Pos</th>
                            <th>Alamat Pengiriman</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{$order['id']}}</td>
                            <td>Rp.{{$order['total_price']}}</td>
                            <td>{{$order['status']}}</td>
                            <td>{{$order['zip_code']}}</td>
                            <td>{{$order['shipping_address']}}</td>
                            <td>

                                <a href="{{ route('admin.orders.show', ['id' => $order['id']]) }}">
                                    <button class="btn btn-danger">Lihat</button>
                                </a>
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