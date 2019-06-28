@extends('layouts.home-menu')

@section('content')    

 <!-- Page Content --> 
  <div class="container">
    <div class="row mt-4">
      <div class="col-md-4 offset-8">
        <div class=" form-group">
          <select name="" id="order_field" class="form-control">
            <option value="" disabled selected>Urutkan</option>
            <option value="best_seller">Best Seller</option>
            <option value="terbaik">Terbaik (Berdasarkan Rating)</option>
            <option value="termurah">Termurah</option>
            <option value="termahal">Termahal</option>
            <option value="terbaru">Terbaru</option>
            <option value="views">Paling Banyak di Lihat</option>            
          </select>
        </div>
      </div>
    </div>

        <div class="row">
    
          <div class="col-lg-3">
    
            <h1 class="my-4">Shopia Shop</h1>
            {{-- <div class="list-group" id="category_field">
             
              <a href="#" id="anime" class="list-group-item" >Anime</a>
              <a href="#" class="list-group-item">Books</a>
              <a href="#" class="list-group-item">ELectronic</a>
            </div> --}}

            <div class=" list-group">
                <select name="" id="category_field" class="custom-select">
                  <option value="" disabled selected>Category</option>
                  <option value="anime">Anime</option>
                  <option value="books">Books</option>
                  <option value="electronics">Electronics</option>
                </select>
              </div>
    
          </div>
          <!-- /.col-lg-3 -->
    
          <div class="col-lg-9">
    
            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block img-fluid" src="images/slide04.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="images/slide02.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="images/slide01.png" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

            <div id="product-list"> 
                @foreach($product as $idx => $p)
                @if ($idx == 0 || $idx % 4 == 0 )
                <div class="row mt-4">
                @endif
                  <div class="col">
                    <div class="card">
                     <?php
                    $prd=App\Models\Product::find($p->id);
                    ?>
                     <a href="#">
                        <img src="{{ asset('/products/'.$prd->images()->get()[0]->image_src) }}" class="img img-thumbnail" style="width: 300px;height: 200px;">
                      </a>
                      <div class="card-body">
                        <h5 class="card-title">
                        <a href="{{route('products.detail', $p->id)}}">
                            {{ $p->name }}
                          </a>
                        </h5>
                        <p class="card-text">
                            Rp. {{ $p->price }}
                        </p>
                        <a href=" {{ route('carts.add', $p->id) }} " class="btn btn-primary">Buy</a>
                        <a href=" {{ route('products.detail', $p->id) }} " class="btn btn-warning">Detail</a>
                      </div>
                    </div>
                    
                  </div>
                  @if ($idx >0 && $idx %4 == 3)
                </div>      
                  @endif                
                @endforeach
               
               
            </div>
          
                 
    
          </div>
          <!-- /.col-lg-9 -->
          <?php
          $product = App\Models\Product::paginate(3);
          ?>
          <br>
          {{ $product->links() }}
         
    
        </div>
        <!-- /.row -->
    
      </div>
    
      <!-- /.container -->
      @endsection
      @section('extra-js')
       <script type="text/javascript">
       
      $(document).ready(function() {
        $('#order_field').change(function() {
            $.ajax({
                type: 'GET',
                url: '/',                
                data: {
                    order_by: $(this).val(),
                  },
                dataType: 'json', 
                success: function(data) {
                    var products = '';                    
                    $.each(data, function(idx, product) { 
                        if (idx == 0 || idx % 4 == 0) {
                            products += '<div class= "row mt-4">';
                            
                        }

                        products += '<div class="col">' +
                            '<div class="card">' +
                            '<img src="/products/'+ products.image_src+'" class="img img-thumbnail" style="width: 300px;height: 200px;">'+
                            '<div class="card-body">' +
                            '<h5 class="card-title">' +
                            '<a href="/product-detail/' + product.id + '">' +
                              product.name +
                            '</a>'+
                        '</h5>'+
                        '<p class="card-text">' +
                        product.price +
                            '</p>' +
                            '<a href="/carts/add/' + product.id + '" class= "btn btn-primary">Buy</a>' +
                            '<a href="/product-detail/' + product.id + '" class= "btn btn-warning">Detail</a>' +
                            '</div>' +
                            '</div>' +
                            '</div>'
                        if (idx > 0 && idx % 4 == 3) {
                            products += '</div>'                          
                           
                        }
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

<script type="text/javascript">
       
  $(document).ready(function() {
    $('#category_field').change(function() {
        $.ajax({
            type: 'GET',
            url: '/',                
            data: {
                order_by: $(this).val(),
              },
            dataType: 'json', 
            success: function(data) {
                var products = '';
                $.each(data, function(idx, product) {
                    if (idx == 0 || idx % 4 == 0) {
                        products += '<div class= "row mt-4">';
                        
                    }

                    products += '<div class="col">' +
                        '<div class="card">' +
                        '<img src="/products/'+ product.image_src+'" class="img img-thumbnail" style="width: 300px;height: 200px;">'+
                        '<div class="card-body">' +
                        '<h5 class="card-title">' +
                        '<a href="/product-detail/' + product.id + '">' +
                          product.name +
                        '</a>'+
                    '</h5>'+
                    '<p class="card-text">' +
                    product.price +
                        '</p>' +
                        '<a href="/carts/add/' + product.id + '" class= "btn btn-primary">Buy</a>' +
                        '<a href="/product-detail/' + product.id + '" class= "btn btn-warning">Detail</a>' +
                        '</div>' +
                        '</div>' +
                        '</div>'
                    if (idx > 0 && idx % 4 == 3) {
                        products += '</div>'
                    }
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
          
      @endsection
      

      {{-- @section('footer')
        <!-- Footer -->
      <footer class="py-2 bg-dark">
            <div class="container">
              <p class="m-0 text-center text-white">Copyright &copy; Al-JauharCorp 2019</p>
            </div>
            <!-- /.container -->
          </footer>  
      @endsection --}}
      

      
    
