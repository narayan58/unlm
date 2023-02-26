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
        
        <form class="" method="POST" action="{{ route($link.'.update', $record->id) }}">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label class="control-label" for="title">Product Title<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="title" value="{{ $record->title }}" >
                        @if ($errors->has('title'))
                        <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="designation">Old Price <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="designation" name="old_price" value="{{ $record->old_price }}" >
                        @if ($errors->has('old_price'))
                        <span class="help-block">
                            <strong>{{ $errors->first('old_price') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="designation">New Price <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="designation" name="new_price" value="{{ $record->new_price }}" >
                        @if ($errors->has('new_price'))
                        <span class="help-block">
                            <strong>{{ $errors->first('new_price') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="short_info">Short Info</label>
                        <br>
                        <textarea id="my-editor" class="tinymce" name="short_info" placeholder="Place some text here" >{{ $record->short_info }}</textarea>
                        @if ($errors->has('short_info'))
                        <span class="help-block">
                            <strong>{{ $errors->first('short_info') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="description">Description</label>
                        <br>
                        <textarea id="my-editor" class="tinymce" name="description" placeholder="Place some text here" >{{ ($record->description) }}</textarea>
                        @if ($errors->has('description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label class="control-label" for="title">Product Category</label>
                        <select name="product_category_id" id="product_category_id_selected" class="form-control">
                            @foreach($productCategory as $list)
                            <option value="{{ $list->id }}" @if($record->product_category_id == $list->id){{ 'selected' }} @endif>{{ $list->title }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('product_category_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('product_category_id') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="title">Product Sub Category</label>
                        <select name="product_category_id" id="product_category_id_selected" class="form-control">
                            @foreach($productSubCategory as $list)
                            <option value="{{ $list->id }}" @if($record->product_sub_category_id == $list->id){{ 'selected' }} @endif>{{ $list->title }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('product_category_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('product_category_id') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="description">Is Popularity</label>
                        <div class="form-check form-check-inline">
                            <input
                            class="form-check-input"
                            type="radio"
                            name="is_popularity"
                            id="inlineRadio1"
                            value="0"
                            @if($record->is_popularity == '0') {{ 'checked' }} @endif
                            />
                            <label class="form-check-label" for="inlineRadio1">No</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input
                            class="form-check-input"
                            type="radio"
                            name="is_popularity"
                            id="inlineRadio2"
                            value="1"
                            @if($record->is_popularity == '1') {{ 'checked' }} @endif

                            />
                            <label class="form-check-label" for="inlineRadio2">Yes</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="description">Is New</label>
                        <div class="form-check form-check-inline">
                            <input
                            class="form-check-input"
                            type="radio"
                            name="is_new"
                            id="inlineRadio1"
                            value="0"
                            @if($record->is_new == '0') {{ 'checked' }} @endif

                            />
                            <label class="form-check-label" for="inlineRadio1">No</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input
                            class="form-check-input"
                            type="radio"
                            name="is_new"
                            id="inlineRadio2"
                            value="1"
                            @if($record->is_new == '1') {{ 'checked' }} @endif

                            />
                            <label class="form-check-label" for="inlineRadio2">Yes</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="description">Is Featured</label>
                        <div class="form-check form-check-inline">
                            <input
                            class="form-check-input"
                            type="radio"
                            name="is_feature"
                            id="inlineRadio1"
                            value="0"
                            @if($record->is_feature == '0') {{ 'checked' }} @endif
                            />
                            <label class="form-check-label" for="inlineRadio1">No</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input
                            class="form-check-input"
                            type="radio"
                            name="is_feature"
                            id="inlineRadio2"
                            value="1"
                            @if($record->is_feature == '1') {{ 'checked' }} @endif
                            />
                            <label class="form-check-label" for="inlineRadio2">Yes</label>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label class="control-label" for="title">Product Sub Category</label>
                        <select name="product_sub_category_id" id="product_sub_category" class="form-control">
                            <option value="" selected disabled>Select Product Sub Category</option>
                        </div> --}}
                        
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
                                <option value="1" @if($record->status == '1') {{ 'selected' }} @endif>{!! PUBLISH !!}</option>
                                <option value="0" @if($record->status == '0') {{ 'selected' }} @endif>{!! UNPUBLISH !!}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button type="reset" class="btn btn-danger resetbtn">Clear</button>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="published_date">Choose Category</label>
                            <div style="height: 250px; overflow-y: scroll;">
                                <ul class="list-unstyled">
                                    @if(!empty($categorylist))
                                    @foreach( $categorylist as $cat)
                                    <li><input type="checkbox" name="category[]" value="{{ $cat->id }}"
                                        @if(!empty(old('category')))
                                        @foreach (old('category') as $postcat)
                                        @if ($postcat == $cat->id)
                                        checked
                                        @endif
                                        @endforeach
                                        @endif
                                    > {{ $cat->title }}</li>
                                    @endforeach
                                    @endif
                                </ul>
                            </div>
                            @if ($errors->has('category'))
                            <span class="help-block">
                                <strong>{{ $errors->first('category') }}</strong>
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
                            <label for="userfile_id" class="control-label">File</label>
                            <div class="controls">
                                <input type="text" class="form-control" id="file" name="file" value="{{ isset($record->file)?url($record->file):'' }}" readonly>
                                <br>
                                <a href="{{ url('/uploads/filemanager/dialog.php?type=2&field_id=file') }}" data-fancybox-type="iframe" class="btn btn-info fancy">Insert File</a>
                                @if(isset($record->image) && $record->file != '')
                                <div>
                                    <a target="_blank" href="{{ asset($record->file) }}" style="margin-left: 100px;">
                                        View File <i class="fa fa-file"></i>
                                    </a> |
                                    <button type="button" id="delete-file" class="text-danger" onclick="return confirm('Are You Sure ???')"><i class="fa fa-remove"></i></button>
                                </div>
                                @else
                                <p>No File</p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="published_date">Published Date <span class="text-danger">*</span></label>
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
                    </div> --}}
                </div>
            </form>
        </div>
    </div>
    @endsection