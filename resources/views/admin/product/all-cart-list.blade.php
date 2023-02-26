@extends('admin.master')
@section('title', 'Checkout List')
@section('content-header', 'Checkout List')
@section('content')
<div class="card">
    <div class="card-header">Checkout List
    </div>
    <div class="card-body table-responsive">
        <table class="table table-hover table-sm dataTable compact">
            <thead class="bg-primary">
                <tr>
                    <th>S.No</th>
                    <th class="text-center">Product Title</th>
                    <th class="text-center">Customer Name</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1; ?>
                @if(!empty($cart))
                @foreach ($cart as $item)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td class="text-center">{{ $item->product->title }}</td>
                    <td class="text-center">{{ $item->customer->name }}</td>
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