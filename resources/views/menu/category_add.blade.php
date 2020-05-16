@extends('layouts.app', ['page' => __('category_add'), 'pageSlug' => 'menu'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Add Category') }}</h5>
                </div>
                <form method="post" action="" autocomplete="off">
                    <div class="card-body">
                            @csrf

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ __('Name') }}</label>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>

                            <div class="form-group{{ $errors->has('parent_id') ? ' has-danger' : '' }}">
                                <label>{{ __('Parent ID') }}</label>
                                <select name="parent_id" id="parent_id" class="form-control">
                                        <option value="0">No parent category</option>
                                    @foreach($category_list as $item)
                                        <option value="{{$item->category_id}}">{{$item->category_name}}</option>
                                    @endforeach
                                </select>
                                @include('alerts.feedback', ['field' => 'parent_id'])
                            </div>

                            <div class="form-group">
                                <label>{{ __('Status') }}</label>
                                <select name="status" id="status" class="form-control">
                                        <option value="0">Disable</option>
                                        <option value="1" selected>Active</option>
                                </select>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Add') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
