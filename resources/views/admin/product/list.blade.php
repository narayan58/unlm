@extends('admin.master')
@section('title', $page_header)
@section('content-header', $page_header)
@section('content')
<div class="card">
    <div class="card-header">{{ $page_header }}
        <div class="card-header-actions">
            <a class="card-header-action btn btn-warning" href="{{ route($link.'.create') }}">
                <small class="text-muted">{!! ADD_ICON !!}</small>
            </a>
        </div>
    </div>
    <div class="card-body">
        
        <table class="table table-hover table-sm">
            <thead class="bg-primary">
                <tr>
                    <th>S.No</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Product Category</th>
                    <th class="text-center">Product Sub Category</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">View</th>

                    {{-- <th class="text-center">Wish</th>
                    <th class="text-center">Cart</th>
                    <th class="text-center">Checkout</th> 
                    <th class="text-center">Review</th>
                    --}}

                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @if(!$list->isEmpty())
                <?php $i=1; ?>
                @foreach ($list as $item)
                <tr>
                    <th scope=row>{{$i++}}</th>
                    <td class="text-center">{{ $item->title }}</td>
                    <td class="text-center">{{ $item->productCategory->title }}</td>
                    <td class="text-center">{{ $item->productSubCategory->title }}</td>
                    <td class="text-center">Rs. {{ $item->old_price }} to Rs. {{ $item->new_price }}</td>

                    <td class="text-center"><a href="{{ url($item->image) }}" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i></a></td>
                    <?php
                    $track=\App\Model\admin\ProductViewTrack::where('product_id',$item->id)->get();
                    ?>
                    <td class="text-center"><a href="{{ route('productTrackList',$item->slug) }}">{{ count($track) }}</a></td>
                    <td class="text-center">
                        @if ($item->status == '1')
                        {!! ACTIVE_STATUS !!}
                        @else
                        {!! INACTIVE_STATUS !!}
                        @endif
                    </td>
                    <td class="text-center">
                        <a href="{{ route($link.'.edit', $item->id) }}"> {!! EDIT_ICON !!}</a>&nbsp;|
                        <a href="{{ route($link.'.delete', $item->id) }}" class="resetbtn">{!! DELETE_ICON !!} </a>
                    </td>
                </tr>
                @endforeach
                @else
                <tr class="text-center">
                    <td colspan="7">{!! NO_RECORD !!}</td>
                </tr>
                @endif
            </tbody>
        </table>
        
    </div>
</div>
@endsection