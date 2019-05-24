<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font Awesome -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        @foreach($product as $idx => $p)

        @if ($idx == 0 || $idx % 4 == 0 )
        <div class="row mt-4">
            @endif

            <div class="col">
                <div class="card">
                    @if(!$p->images()->get()->isEmpty())
                    <img src="{{ asset('/img/'.$p->images()->get()[0]->image_src) }}" class="card-img-top" alt="">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="">
                                {{ $p['name'] }}
                            </a>
                        </h5>
                        <p class="card-text">
                            <label for="">Price</label>
                            {{ $p['price'] }}
                        </p>
                        <a href="" class="btn btn-primary">Beli</a>
                    </div>
                </div>
            </div>
            @if($idx > 0 && $idx % 4 == 3)
        </div>
        @endif
        @endforeach
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
</body>

</html>