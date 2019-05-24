@extends('layouts.admin')

@section('content')

<div class="container-fluid">
        <div>
                <a href="{{route ('admin.products.create')}}" class="btn btn-primary">Tambah Product</a>
        </div>
                <div class="col-md-4 offset-8">
                    <div class=" form-group">
                    <select name="" id="order_field" class="form-control">
                        <option value="" disabled selected>Urutkan</option>
                        <option value="best_seller">Best Seller</option>
                        <option value="terbaik">Terbaik (Berdasarkan Rating)</option>
                        <option value="termurah">Termurah</option>
                        <option value="termahal">Termahal</option>
                        <option value="terbaru">Terbaru</option>
                    </select>
                    </div>
                </div>
            <br>
    <!-- DataTales Product -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Tables Product</h6>
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
           <div id="product-list">
           <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Created at</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name}}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td class="text-center" colspan="2">
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="post">
                                    @csrf
                                    <a href="{{ route('admin.products.edit', $product->id) }}" class='btn btn-info btn-xs fa fa-pencil-square-o'>Edit</a>
                                    <a href="{{ route('admin.products.show', $product->id) }}" class='btn btn-warning btn-xs fa fa-pencil-square-o'>Detail</a>
                                    @method('DELETE')
                                    <button class="btn btn-danger btn btn-danger btn-xs fa fa-trash-o" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        </div> 
    </div>
</div>
@endsection 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    
<script type="text/javascript">
    $(document).ready(function () {
        $('#order_field').change(function() {

            // window.location.href='/admin/products/?order_by=' + $(this).val();


            //AJAX Script
            
            $.ajax({
                type: "GET",
                url: '/admin/products/',                
                data: {
                        order_by: $(this).val(),
                  },
                dataType: 'json', 
                success: function(data) {
                    var products = '';
                    products +=         '<div class="table-responsive">' + 
											' <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">' +
												'<thead>' +
													'<tr>' +
                                                        '<th>#</th>'+
                                                        '<th>Name</th>'+
                                                        '<th>Price</th>'+
                                                        '<th>Created at</th>'+
                                                        '<th class="text-center">Action</th>'+
													'</tr>' +
												'</thead>' +
												'<tbody>';
                    $.each(data, function(idx,product) {
                        // if (idx == 0 || idx % 4 == 0) {
                        //     products += '<div class= "row mt-4">';
                            
                        

                        products += '<tr>' +
                            '<td>' +(idx+1)+'</td>'+
                            '<td>' +product.name+'</td>'+
                            '<td>' +product.price+'</td>'+
                            '<td>' +product.created_at+'</td>'+
                            ' <td class="text-center" colspan="2">'+
                            ' <form action="/destroy/'+ product.id+' "method="post">'+
                                '@csrf'+
                                    '<a href="/admin/products/' +product.id+'/edit" class="btn btn-info btn-xs fa fa-pencil-square-o">Edit</a>'+
                                    '<a href="/admin/products/'+product.id+'/show" class="btn btn-warning btn-xs fa fa-pencil-square-o">Detail</a>'+
                                   '@method("DELETE")'+
                                    '<button class="btn btn-danger btn btn-danger btn-xs fa fa-trash-o" type="submit">Delete</button>'+
                                    '</form>'+
                                    '</td>'+                                    
                            '</tr>';
                            '</tbody>' +
						'</table>' +
					 '</div>';
                    });
                    // update element
                    $('#product-list').html(products);
                },
                error: function(data) {
                    alert('Unable to handle request');
                },
            });
        });         
    });
    
</script>



        
    

