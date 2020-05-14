@extends('layouts.app', ['page' => __('dishes_edit'), 'pageSlug' => 'menu'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Edit Profile') }}</h5>
                </div>
                <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            @method('put')

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ __('Name') }}</label>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                <label>{{ __('Description') }}</label>
                                <input type="text" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="{{ __('Description') }}" value="{{ old('description', auth()->user()->description) }}">
                                @include('alerts.feedback', ['field' => 'description'])
                            </div>

                            <div class="form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
                                <label>{{ __('Parent ID') }}</label>
                                <select id="category" name="category" class="form-control">
                                    <option selected>Choose parent category</option>
                                    <option class="dropdown-item">Bun</option>
                                    <option class="dropdown-item">Pho</option>
                                    <option class="dropdown-item">Chao</option>
                                    <option class="dropdown-item">Com</option>
                                </select>
                                @include('alerts.feedback', ['field' => 'category'])
                            </div>

                            <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                <label>{{ __('Price') }}</label>
                                <input type="number" name="price" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" placeholder="{{ __('Price') }}" value="{{ old('price', auth()->user()->price) }}">
                                @include('alerts.feedback', ['field' => 'price'])
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
