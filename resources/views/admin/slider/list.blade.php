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
    <div class="card-body table-responsive">
        <table class="table table-hover table-sm dataTable compact">
            <thead class="bg-primary">
                <tr>
                    <th>S.No</th>
                    <th>Title(English)</th>
                    <th class="text-center">Open Image</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = ($list->currentpage()-1)*$list->perpage()+1; ?>
                @if(!empty($list))
                @foreach ($list as $item)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ str_limit($item->title, $limit = 50, $end = '...') }}</td>
                    <td class="text-center"><a href="{{ url($item->image) }}" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i></a></td>
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
                <tr>
                    <td colspan="5">{!! NO_RECORD !!}</td>
                </tr>
                @endif
            </tbody>
        </table>
        {{ $list->links() }}
    </div>
</div>
@endsection