@extends('admin.master')
@section('title', 'Track List')
@section('content-header', 'Track List')
@section('content')
<div class="card">
    <div class="card-header">Track List
    </div>
    <div class="card-body table-responsive">
        <table class="table table-hover table-sm dataTable compact">
            <thead class="bg-primary">
                <tr>
                    <th>S.No</th>
                    <th class="text-center">Ip Address</th>
                    <th class="text-center">Login Device</th>
                    <th class="text-center">Try Date</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1; ?>
                @if(!empty($track))
                @foreach ($track as $item)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td class="text-center">{{ $item->ip_address }}</td>
                    <td class="text-center">{{ $item->login_device }}</td>
                    <td class="text-center">{{ $item->created_at }}</td>
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