@extends('layouts.app', ['page' => __('category_edit'), 'pageSlug' => 'menu'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Edit Catetory') }}</h5>
                </div>
                <form method="post" action="" autocomplete="off">
                    <div class="card-body">
                            @csrf

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ __('Name') }}</label>

                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{$data->category_name}}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>

                            <div class="form-group{{ $errors->has('parent_id') ? ' has-danger' : '' }}">
                                <label>{{ __('Parent Category') }}</label>
                                <select type="parent_cat" name="parent_cat" class="form-control{{ $errors->has('parent_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Parent_cat') }}">
                                    @if($data->parent_id==0){
                                        <option value="0" selected>No parent category</option>
                                    }
                                    @else
                                        <option value="0">No parent category</option>
                                        @foreach($category_list as $item)
                                            @if($item->category_id == $data->parent_id)
                                                <option value="{{$item->category_id}}" selected>{{$item->category_name}}</option>
                                            @else
                                                <option value="{{$item->category_id}}">{{$item->category_name}}</option>
                                            @endif
                                        @endforeach
                                    @endif
                                    
                                </select>
                            </div>

                            <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                                <label>{{ __('Status') }}</label>
                                <select type="status" name="status" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" placeholder="{{ __('Status') }}">
                                    @if($data->status==0)
                                        <option value="0" selected>Disable</option>
                                        <option value="1">Active</option>
                                    @else
                                        <option value="0">Disable</option>
                                        <option value="1" selected>Active</option>
                                    @endif
                                    
                                </select>
                            </div>

                            
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
