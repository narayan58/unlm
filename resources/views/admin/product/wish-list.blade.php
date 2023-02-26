@extends('admin.master')
@section('title', 'Wish List')
@section('content-header', 'Wish List')
@section('content')
<div class="card">
    <div class="card-header">{{ $product->title }} Wish List
    </div>
    <div class="card-body table-responsive">
        <table class="table table-hover table-sm dataTable compact">
            <thead class="bg-primary">
                <tr>
                    <th>S.No</th>
                    <th class="text-center">Customer Name</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1; ?>
                @if(!empty($wish))
                @foreach ($wish as $item)
                <tr>
                    <td>{{ $count++ }}</td>
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