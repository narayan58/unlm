@extends('admin.master')
@section('title', $page_header)
@section('content-header', $page_header)
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">List of Product Category</div>
            <div class="card-body table-responsive">
                <table class="table table-hover table-sm dataTablePagination compact">
                    <thead class="bg-primary">
                        <tr>
                            <th width="10px">S.No</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th width="50px">Status</th>
                            <th width="50px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1; ?>
                        @foreach ($list as $item)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->slug }}</td>
                            <td class="center-align">
                                @if ($item->status == '1')
                                {!! ACTIVE_STATUS !!}
                                @else
                                {!! INACTIVE_STATUS !!}
                                @endif
                            </td>
                            <td width="100px" class="center-align">
                                <a href="{{ route($link.'.edit', $item->id) }}">{!! EDIT_ICON !!} </a>&nbsp;|&nbsp;
                                <a href="{{ route($link.'.delete', $item->id) }}" class="resetbtn">{!! DELETE_ICON !!}</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">{{ $page_header }}
            <div class="card-header-actions">
            <a class="card-header-action btn btn-warning" href="{{ route($link.'.create') }}">
                <small class="text-muted">{!! ADD_ICON !!}</small>
            </a>
        </div>
    </div>
            <div class="card-body">
                
                <form class="" method="POST" action="{{ route($link.'.update', $record->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="form-group">
                        <label for="title">Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $record->title }}">
                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>

                        <div class="form-group">
                        <label for="title">Meta Title<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="meta_title" value="{{ $record->meta_title }}" name="meta_title">
                        @if ($errors->has('meta_title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('meta_title') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="title">Meta Keywords<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="meta_keywords" value="{{ $record->meta_keywords }}" name="meta_keywords">
                        @if ($errors->has('meta_keywords'))
                            <span class="help-block">
                                <strong>{{ $errors->first('meta_keywords') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="title">Meta Description<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="meta_description" value="{{ $record->meta_description }}" name="meta_description">
                        @if ($errors->has('meta_description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('meta_description') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="slug" name="slug" value="{{ $record->slug }}">
                        @if ($errors->has('slug'))
                            <span class="help-block">
                                <strong>{{ $errors->first('slug') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="control-label">Featured Image</label>
                        @if(!empty($record->image))
                        <img src="{{ $record->image }}" alt="" title="" class='fancybox' id="prev_img" />
                        @elseif(!empty(old('image')))
                        <img src="{{ old('image') }}" alt="" title="" class='fancybox' id="prev_img" />
                        @else
                        <img src="{{ asset('admin/images/no-image.png', $secure = null) }}" alt="" class='fancybox' title="" id="prev_img" />
                        @endif
                        <a href="{{ url('/uploads/filemanager/dialog.php?type=1&field_id=image') }}" data-fancybox-type="iframe" class="btn btn-info fancy">Insert</a>
                        <button class="btn btn-danger remove_box_image" type="button">Remove</button>
                        <button class="btn btn-warning prev_box_image" type="button" style="display: none;">Previous Image</button>
                        <input type="hidden" value="{{ isset($record->image)?$record->image:old('image') }}"  name="image" class="form-control" id="image">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="statusid" class="form-control">
                            <option value="1" @if($record->status == '1') {{ 'selected' }} @endif >{!! PUBLISH !!}</option>
                            <option value="0" @if($record->status == '0') {{ 'selected' }} @endif >{!! UNPUBLISH !!}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Update</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection