@extends('admin.master')
@section('title', $page_header)
@section('content-header', $page_header)
@section('content')
<div class="card">
    <div class="card-header">{{ $page_header }}
        <div class="card-header-actions">
        </div>
    </div>
    <div class="card-body">
        
        <table class="table table-hover table-sm">
            <thead class="bg-primary">
                <tr>
                    <th>S.No</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @if(!$customers->isEmpty())
                <?php $i=1; ?>
                @foreach ($customers as $item)
                <tr>
                    <th scope=row>{{$i++}}</th>
                    <td class="text-center">{{ $item->name }}</td>
                    <td class="text-center">{{ $item->email }}</td>
                    <td class="text-center">
                        @if ($item->status == '1')
                        {!! ACTIVE_STATUS !!}
                        @else
                        {!! INACTIVE_STATUS !!}
                        @endif
                    </td>
                    <td class="text-center">
                        <a href="{{ route('customer.delete',$item->id) }}" class="resetbtn">{!! DELETE_ICON !!} </a>
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