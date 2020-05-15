@extends('layouts.app', ['page' => __('category_edit'), 'pageSlug' => 'menu'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Edit Catetory') }}</h5>
                </div>
                <form method="post" action="{{ route('menu.category') }}" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            @method('put')

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ __('Name') }}</label>

                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{$data->category_name}}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label>{{ __('Parent Category') }}</label>
                                <input type="parent_cat" name="parent_cat" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Parent_cat') }}" value="{{ $data->parent_id }}">
                                @include('alerts.feedback', ['field' => 'email'])
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label>{{ __('Parent Category') }}</label>
                                <select type="parent_cat" name="parent_cat" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Parent_cat') }}">
                                    @if($data->status==0){
                                        <option value="0" selected>Disabled</option>
                                        <option value="1">Active</option>
                                    }
                                    
                                    @else
                                        <option value="0">Disabled</option>
                                        <option value="1" selected>Active</option>
                                    @endif
                                    
                                </select>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>

                            <div class="form-group{{ $errors->has('parentID') ? ' has-danger' : '' }}">
                                <label>{{ __('Parent ID') }}</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose parent category</option>
                                    <option class="dropdown-item">Bun</option>
                                    <option class="dropdown-item">Pho</option>
                                    <option class="dropdown-item">Chao</option>
                                    <option class="dropdown-item">Com</option>
                                </select>
                                @include('alerts.feedback', ['field' => 'parentID'])
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
