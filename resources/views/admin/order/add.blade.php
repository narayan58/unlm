@extends('admin.master')
@section('title', $page_header)
@section('content-header', $page_header)
@section('content')
<div class="card">
    <div class="card-header">{{ $page_header }}
        <div class="card-header-actions">
            <a class="card-header-action btn btn-warning" href="{{ route($link.'.index') }}">
                <small class="text-muted">{!! VIEWLIST_ICON !!}</small>
            </a>
        </div>
    </div>
    <div class="card-body">
        <form class="" method="POST" action="{{ route('popup.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label class="control-label" for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" >
                        @if ($errors->has('title'))
                        <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="title">Link</label>
                        <input type="text" class="form-control" id="url" name="link" value="{{ old('link') }}" >
                        @if ($errors->has('link'))
                        <span class="help-block">
                            <strong>{{ $errors->first('link') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label class="control-label">Featured Image</label>
                        @if (!empty($record->image))
                        <img src="{{ $record->image }}" class="fancybox" alt="" title="" id="prev_img" />
                        @else
                        <img src="{{ asset('admin/images/no-image.png', $secure = null) }}" class="fancybox" alt="" title="" id="prev_img" />
                        @endif
                        <div class="clearfix"></div>
                        <a href="{{ url('/uploads/filemanager/dialog.php?type=1&field_id=image') }}" data-fancybox-type="iframe" class="btn btn-info fancy">Insert</a>
                        <button class="btn btn-danger remove_box_image" type="button">Remove</button>
                        <button class="btn btn-warning prev_box_image" type="button" style="display: none;">Previous Image</button>
                        <input type="hidden" value="{{ isset($record->image)?$record->image:'' }}"  name="image" class="form-control" id="image">
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label" for="published_date">Published Date</label>
                        <input type="text" class="form-control datepicker" id="published_date" name="published_date" value="{{ date('Y-m-d') }}" >
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="statusid" class="form-control">
                            <option value="1">{!! PUBLISH !!}</option>
                            <option value="0">{!! UNPUBLISH !!}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger resetbtn">Clear</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection