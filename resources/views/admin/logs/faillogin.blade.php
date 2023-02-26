@extends('admin.master')
@section('title', $page_header)
@section('content-header', $page_header)
@section('content')
<div class="card">
    <div class="card-header">{{ $page_header }}
    </div>
    <div class="card-body table-responsive">
        <table class="table table-hover table-sm dataTable compact">
            <thead class="bg-primary">
                <tr>
                    <th>S.No</th>
                    <th>User Name</th>
                    <th class="text-center">Try Password</th>
                    <th class="text-center">Ip Address</th>
                    <th class="text-center">Login Device</th>
                    <th class="text-center">Try Date</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = ($list->currentpage()-1)*$list->perpage()+1; ?>
                @if(!empty($list))
                @foreach ($list as $item)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td class="text-center">{{ $item->user_name }}</td>
                    <td class="text-center">{{ $item->fail_password }}</td>
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