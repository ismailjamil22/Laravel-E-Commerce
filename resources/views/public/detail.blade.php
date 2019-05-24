@extends('layouts.main-menu')

@section('content')
<div class="container">
    <div class="row mt-4">
        @if(!$products->images()->get()->isEmpty())
        <div class="col-md-5">
            <div class="product-section-image">
                <img src="{{ asset('/products/'.$products->images()->get()[0]->image_src) }}" class="card-img-top" id="currentImage" style="width: 200;height: 250px;">
            </div>

            <div class="product-section-images">
                @foreach($products->images()->get() as $image)
                <div class="product-thumbnail mt-3">
                    <img src="{{ asset('/products/'.$image->image_src) }}" class="card-img-top" style="width:150px;height: 75px; ">
                </div>
                @endforeach
            </div>
        </div>
        @endif

        <div class="col-md-7">
            <h3>
                {{ $products['name'] }}
            </h3>
            <h4>
                Rp. {{ $products['price'] }}
            </h4>
            <h5>
                   <?php 
                      ($rating);

                    for ($x = 1; $x <= $rating; $x++) {
                        echo '<span><i class="text-warning fa fa-star"></i></span>';
                        
                    }
                    if (strpos($rating, ',')) {
                        echo '<span><i class="text-warning fa fa-star-half-o"></i></span>';
                       
                        $x++;
                    }
                    while ($x <= 5) {
                        echo '<span><i class="text-warning fa fa-star-o"></i></span>';
                      
                        $x++;
                    }
                    ?>
                    {{-- {{floatVal($rating)}} --}}
                </h5>
            <div class="mt-4">
                <a href="{{ route('carts.add', $products->id) }}" class="btn btn-primary">Buy</a>
                <a href="{{ url('/') }}" class="btn btn-danger">Back</a>
            </div>
            <div class="mt-2">
                <a href=https://www.facebook.com/sharer/sharer.php??u={{ route('products.show', ['id' => $products['id']]) }}&display=popup" class="social-button" target="_blank"><span class="fa fa-facebook-official"></span>&nbsp;Share Facebook</a>
                |
                <a href="https://twitter.com/intent/tweet?text=my share text&amp;url={{ route('products.show', ['id' => $products['id']]) }}" class="social-button" target="_blank"><span class="fa fa-twitter"></span>&nbsp;Share Twitter</a>
                |
                <a href="https://wa.me/?text={{ route('products.show', ['id' => $products['id']]) }}" class="social-button" target="_blank"><span class="fa fa-whatsapp"></span>&nbsp;Share Whatsapp</a>
            </div

            <div class="mt-4">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-description-tab" data-toggle="tab" href="#nav-description" role="tab" aria-controls="nav-description" aria-selected="true">Description</a>
                    <a class="nav-item nav-link" id="nav-review-tab" data-toggle="tab" href="#nav-review" role="tab" aria-controls="nav-review" aria-selected="false">Review</a>
                </div>
                <!-- Tab Panes -->
                <div class="tab-content mt-2" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
                        {!! $products['description'] !!}
                    </div>
                    <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">
                             @if (Auth::check())
                            <form action="{{ route('posts.review') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="text" name="product_id" value="{{ $products['id'] }}" hidden>
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <input class="form-control" type="text" name="description" placeholder="Product Description" id="ckview">
                            </div>
                            <script src="{{url('js/jquery.tinymce.min.js')}}"></script>
                            <script src="{{url('js/tinymce.min.js')}}"></script>
                            <script>
                                tinymce.init({ 
                                    selector: '#ckview'
                                });
                            </script>
                            
                            <div class="form-group">
                                <label for="nama">Rating</label>
                                <input class="form-control" type="text" name="rating" placeholder="Rating 1-5" id="nama">
                            </div>                         

                            <button type="submit" class="btn btn-primary">Submit</button>                           
                        </form>
                         @endif                                        
                        <br>
                        @foreach ($descriptions as $user)
                        <div class="container">
                                <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                   
                                                <div class="col-md-2">
                                                    <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                                                   
                                                </div>
                                                <div class="col-md-10">
                                                    <p>
                                                    {{-- <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"> --}}
                                                        <strong>
                                                            {{$user->name}}
                                                           
                                                        </strong></a>
                                                        
                                                   </p>
                                                   <div class="clearfix"></div>
                                                  
                                                       
                                                
                                                    <p>{!!$user->description!!}</p>
                                                   <p class="text-secondary"> {{Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</p>
                                                    
                                                   
                                                  
                                                    <p>
                                                        <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
                                                        <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                                                   </p>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                        </div>
                        <br>
                        @endforeach
                     </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('extra-js')
<script>
    (function() {
        const currentImage = document.querySelector('#currentImage');
        const images = document.querySelectorAll('.product-thumbnail');

        images.forEach((element) => element.addEventListener('click', thumbnailClick));

        function thumbnailClick(e) {
            currentImage.src = this.querySelector('img').src;
        }
    })();
</script>
@endsection