@extends('layouts.admin')

@section('content')
<br>

        <div class="row">
                <div class="col-sm-6">
                <div class="card">
                    <h5 class="card-header bg-primary text-white">About Order</h5>
                    <div class="card-body">
                            <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th scope="col">Alamat Pengiriman</th>
                                        <th scope="col">Kode Pos</th>
                                        <th scope="col">Harga Total</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>                                   
                                        <td>{{$order->shipping_address}}</td>
                                        <td>{{$order->zip_code}}</td>
                                        <td>{{$order->total_price}}</td>
                                      </tr>
                                     </tbody>
                                  </table>
                                <a href="{{url('/admin/orders')}}">  
                                  <button class="btn btn-danger">Back</button>
                                  </a>
                    </div>
                </div>
                </div>
                <div class="col-sm-6">
                <div class="card ">
                    <h5 class="card-header bg-primary text-white">About Product</h5>
                    <div class="card-body">
                            <table class="table table-striped">
                                    <thead>
                                      <tr> 
                                        <th scope="col">Product</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Price</th> 
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Subtotal</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                     @foreach ($order->orderItems  as $orderItem)
                                      <tr>
                                        <td> 
                                            
                                            <a href="{{route('products.show', ['id' => $orderItem->product->id])}}"> 
                                          {{$orderItem->product->name}} </a>                                           
                                                                                      
                                        </td>                      
                                        <td><img src="{{asset('/products/'.$product->images()->get()[0]->image_src)}}" width="200"></td>           
                                        <td>{{$orderItem->price}}</td>
                                        <td>{{$orderItem->quantity}}</td>
                                        <td>{{$orderItem->price * $orderItem->quantity}}</td>
                                      </tr>
                                      @endforeach
                                     </tbody>
                                  </table>
                                  <a href="{{url('/admin/orders')}}">  
                                    <button class="btn btn-danger">Back</button>
                                    </a>
                    </div>
                </div>
                </div>
            </div>
        </div>

@endsection