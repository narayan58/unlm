@extends('admin.master')
@section('title', 'Review List')
@section('content-header', 'Review List')
@section('content')
<div class="card">
    <div class="card-header">{{ $product->title }} Review List
    </div>
    <div class="card-body table-responsive">
        <table class="table table-hover table-sm dataTable compact">
            <thead class="bg-primary">
                <tr>
                    <th>S.No</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Review</th>
                    <th class="text-center">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1; ?>
                @if(!empty($review))
                @foreach ($review as $item)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td class="text-center">{{ $item->nickname }}</td>
                    <td class="text-center">{{ $item->review }}</td>
                    <td class="text-center">
                        @if ($item->status == '1')
                        {!! ACTIVE_STATUS !!}
                        @else
                       <a href="{{ route('approveReview',$item->id) }}"><span class="badge badge-danger">InActive</span></a>
                        @endif
                    </td>
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