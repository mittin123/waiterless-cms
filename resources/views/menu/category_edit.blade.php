@extends('layouts.app', ['page' => __('edit'), 'pageSlug' => 'customer'])

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
                                @include('alerts.feedback', ['field' => 'email'])
                            </div>
                            <label>{{ __('Image') }}</label>
                            <br/>
                                <input type="file" name="photo" id="input-picture" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                <img id="output" src="https://teamtech24.com/foodhati/foodhatiAdmin/assets/img/foodimg/default-food-image.jpg" width="100" height="100">

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
