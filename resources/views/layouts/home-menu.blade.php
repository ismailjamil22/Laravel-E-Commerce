<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shopia Shop</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">Sophia Bang Jamil</a>
     
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          {{-- @if (Auth::check())
          <li class="nav-item dropdown nav-item active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-white" href="{{ route('admin.products.index')}}">List</a>
                        <a class="dropdown-item text-white" href="{{ route('admin.products.create')}}">Tambah</a>
                    </div>
            </li>
            <li class="nav-item dropdown nav-item active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Order
                        </a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-white" href="{{ route('admin.orders.index')}}">List</a>
                            <a class="dropdown-item text-white" href="{{ route('admin.orders.create')}}">Tambah</a>
                        </div>
            </li>
            @endif --}}
          
          <li>       
                <a href="{{route('carts.index')}} " class="btn btn-primary btn-block">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart
                        <span class="badge badge-pill badge-danger">{{count(session('cart',[]))}}</span>    
                        </a>   
          </li>
           <!-- Authentication Links -->
           <ul class="navbar-nav ml-auto">
           @guest
           <li class="nav-item bg-dark">
               <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
           </li>
           @if (Route::has('register'))
               <li class="nav-item ">
                   <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
               </li>
           @endif
       @else
           <li class="nav-item dropdown bg-dark">
               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                   {{ Auth::user()->name }} <span class="caret"></span>
               </a>

               <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item text-white" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                       {{ __('Logout') }}
                   </a>

                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                       @csrf
                   </form>
               </div>
           </li>
       @endguest
           </ul>
        </ul>
      </div>
    </div>
  </nav>
  @yield('content')
{{-- 
  @yield('footer') --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  @yield('extra-js')
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  

  <!-- Bootstrap core JavaScript -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  @yield('footer')

</body>

</html>
