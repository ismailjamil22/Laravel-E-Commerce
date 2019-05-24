@extends('layouts.admin')

@section('content')
<div class="container col-md-8">
    <div class="row justify-content-center">
        <div class="col">
            <h2>Edit Product</h2>
            <br />

            @if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            @endif

            <form method="post" action="{{ route('admin.products.update', $product->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nama">Name Product</label>
                    <input class="form-control" type="text" name="nameProduct" id="nama" value="{{ $product['name'] }}">
                </div>
                <div class="form-group">
                    <label for="ckview">Description Product</label>
                    <input class="form-control" type="text" name="descProduct" id="ckview" value="{{ $product['description'] }}">
                </div>
                <div class="form-group">
                    <label for="price">Price Product</label>
                    <input class="form-control" type="text" name="priceProduct" id="price" value="{{ $product['price'] }}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
<script src="{{url('js/jquery.tinymce.min.js')}}"></script>
<script src="{{url('js/tinymce.min.js')}}"></script>
<script>
    tinymce.init({
        selector: '#ckview'
    });
</script>