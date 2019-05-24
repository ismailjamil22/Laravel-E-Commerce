@extends('layouts.main-menu')

@section('content')
<div class="container">

    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%"></th>
            </tr>
        </thead>
        <tbody>
            <?php $total = 0 ?>
            @if(session('cart'))
            @foreach(session('cart') as $id => $product )

            <?php $total += $product['price'] * $product['quantity'] ?>

            <tr>
                <td data-th="Product">
                    <div class="row">

                        <div class="col-sm-3 hidden-xs">
                            <img src="{{ asset('/products/'.$product['image_src']) }}" width="135">
                        </div>

                        <div class="col-sm-9">
                            <h4 class="nomargin">{{ $product['name'] }}</h4>
                        </div>
                    </div>
                </td>
                <td data-th="Price">${{ $product['price'] }}</td>
                <td data-th="Quantitiy">
                    <input type="number" value="{{ $product['quantity'] }}" class="form-control quantity" />
                </td>
                <td data-th="Subtotal" class="text-center">${{ $product['price'] * $product['quantity'] }}</td>
                <td class="action" data-th="">
                    <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}">Update</button>
                    <button class="btn btn-danger btn-sm mt-2 remove-from-cart" data-id="{{ $id }}">Remove</button>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
        <tfoot>
            <tr class="visible-xs">
                <td class="text-center"><strong>Total {{ $total }}</strong></td>
            </tr>
            <tr>
                <td>
                    <a href="{{ url('/') }}" class="btn btn-warning">Continue Shopping</a>
                    <a href="{{ route('admin.orders.create') }}" class="btn btn-primary">Checkout</a>
                </td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Total {{ $total }}</strong></td>
            </tr>

        </tfoot>
    </table>

</div>
@endsection
@section('extra-js')
<!-- JQuery -->
<script type="text/javascript">
    $(document).ready(function() {
        $(".update-cart").click(function(e) {
            e.preventDefault();
            var ele = $(this);

            $.ajax({
                url: "{{ route('carts.update') }}",
                method: 'PATCH',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: ele.attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Are You Sure")) {
                $.ajax({
                    url: "{{ route('carts.remove') }}",
                    method: "DELETE",
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: ele.attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    });
</script>
@endsection