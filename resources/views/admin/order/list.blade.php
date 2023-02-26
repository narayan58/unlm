@extends('admin.master')
@section('title', $page_header)
@section('content-header', $page_header)
@section('content')
<div class="card">
    <div class="card-header">{{ $page_header }}
    </div>
    <div class="card-body table-responsive">
        <table class="table table-hover table-sm dataTable">
            <thead class="bg-primary">
                <tr>
                    <th>S.No</th>
                    <th>Order Code</th>
                    <th>Customer</th>
                    <th>Sub total price</th>
                    <th>Shipping Price</th>
                    <th>Total</th>
                    <th>Payment</th>
                    <th>Payment Status</th>
                    <th>Order Status</th>
                    <th>Order Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1; //($list->currentpage()-1)*$list->perpage()+1; ?>
                @if(!empty($list))
                @foreach ($list as $item)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $item->order_code }}</td>
                    @if($item->is_guest==1)
                     <!-- Modal Guest -->
                    <div class="modal fade" id="guest{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Guest Detail of {{ $item->order_code }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Name    : {{ $item->name }} <br>
                            Email   : {{ $item->email }} <br>
                            Phone   : {{ $item->phone }} <br>
                            Address : {{ $item->address }} <br>
                            City    : {{ $item->city }} <br>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                <!-- Modal Guest -->
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#guest{{ $item->id }}">
                    Guest
                    </button></td>
                    @else
                    <!-- Modal Customer -->
                    <div class="modal fade" id="customer{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Customer Detail of {{ $item->order_code }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Name    : {{ $item->customer->name }} <br>
                            Email   : {{ $item->customer->email }} <br>
                            Phone   : {{ $item->customer->mobile }} <br>
                            Address : {{ $item->customer->address }} <br>
                            City    : {{ $item->customer->city }} <br>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal Customer -->
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#customer{{ $item->id }}">
                     Customer
                    </button></td>
                    @endif
                    <td>{{ $currency_code }} {{ $item->sub_total_price }}</td>
                    <td>{{ $currency_code }} {{ $item->shipping_cost }}</td>
                    <td>{{ $currency_code }} {{ $item->final_price }}</td>
                    @if($item->payment_id==1)
                    <td>COD</td>
                    @else
                    <td>Other</td>
                    @endif
                    @if($item->payment_status==1)
                    <td>Paid</td>
                    @else
                    <td>
                        <a href="{{ route('paymentUpdate',$item->id) }}" class="pendingbtn">Pending</a>
                    </td>
                    @endif

                    @if($item->status==1)
                    <td>Complete</td>
                    @elseif($item->status==2)
                    <td>Cancel</td>
                    @else
                    <td>
                        <a href="{{ route('orderUpdate',$item->id) }}" class="pendingbtn">Processing</a>
                    </td>
                    @endif
                    <td>{{ $item->created_at }}</td>
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewProduct{{ $item->id }}">View Product
                    </button></td>

                    <!-- Modal View Product -->
                    <?php 
                    $subOrders = \App\Model\admin\ProductOrderList::where('order_code_id',$item->id)->get()
                    ?>
                    <div class="modal fade" id="viewProduct{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Product List Detail of {{ $item->order_code }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            @foreach($subOrders as $subOrder)
                            Product Name    : {{ $subOrder->product->sku }} <br>
                            Product Name    : {{ $subOrder->product->title }} <br>
                            Product Price   : {{ $subOrder->product->new_price }} <br>
                            Order quantity  : {{ $subOrder->product_qty }} <br>
                            Total Price     : {{ $subOrder->price }} <br>
                            Image           :  <img src="{{ asset($subOrder->product->image) }}">
                            <br>
                            <hr>
                            @endforeach
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                   
                    <!-- Modal Product -->
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="5">{!! NO_RECORD !!}</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection