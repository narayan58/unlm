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
        <form class="form-horizontal" method="POST" action="{{ route($link.'.update', $record->id) }} ">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label class="control-label" for="title">Title<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $record->title }}" >
                        @if ($errors->has('title'))
                        <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="title">Sub Title<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{ $record->sub_title }}" >
                        @if ($errors->has('sub_title'))
                        <span class="help-block">
                            <strong>{{ $errors->first('sub_title') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="title">Url<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="url" name="url" value="{{ $record->url }}" >
                        @if ($errors->has('url'))
                        <span class="help-block">
                            <strong>{{ $errors->first('url') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                    <label class="control-label" for="description">Description</label>
                    <br>
                    <textarea id="my-editor" class="tinymce" name="description" placeholder="Place some text here" >{{ $record->description }}</textarea>
                    @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
                </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Image - Recommended Size (1920*470)</label>
                            <?php if (!empty($record->image)) { ?>
                            <img src="<?php echo url($record->image) ?>" alt="" title="" class="fancybox" id="prev_img" />
                            <?php } else { ?>
                            <img src="{{ asset('admin/images/no-image.png', $secure = null) }}" alt="" title="" class="fancybox" id="prev_img" />
                            <?php } ?>
                            @if ($errors->has('image'))
                            <span class="help-block">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                            @endif
                            <a href="<?php echo url('/uploads/filemanager/dialog.php?type=1&field_id=image') ?>" data-fancybox-type="iframe" class="btn btn-info fancy">Insert</a>
                            <button class="btn btn-danger remove_box_image" type="button">Remove</button>
                            <button class="btn btn-warning prev_box_image" type="button" style="display: none;">Previous Image</button>
                            <input type="hidden" value="<?php echo isset($record->image)?url($record->image):'' ?>"  name="image" class="form-control" id="image">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="published_date">Published Date <span class="text-danger">*</span></label>
                            <input type="text" class="form-control datepicker" id="published_date" name="published_date" value="{{ $record->published_date }}" >
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="statusid" class="form-control">
                                <option value="1" <?= isset($record->status) && ($record->status == '1')? 'selected' : '' ?> >{!! PUBLISH !!}</option>
                                <option value="0" <?= isset($record->status) && ($record->status == '0')? 'selected' : '' ?> >{!! UNPUBLISH !!}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Update</button>
                            <button type="reset" class="btn btn-danger resetbtn">Clear</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection