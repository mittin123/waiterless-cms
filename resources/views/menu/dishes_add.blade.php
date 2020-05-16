@extends('layouts.app', ['page' => __('dishes_add'), 'pageSlug' => 'menu'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Edit Profile') }}</h5>
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

                            <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                <label>{{ __('Description') }}</label>
                                <input type="text" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}">
                                @include('alerts.feedback', ['field' => 'description'])
                            </div>
                            
                            <div class="form-group{{ $errors->has('cate') ? ' has-danger' : '' }}">
                                <label>{{ __('Category') }}</label>
                                <select name="cate" id="cate" class="form-control">
                                @foreach($data as $item)
                                    <option value="{{$item->category_id}}">{{$item->category_name}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>{{ __('Status') }}</label>
                                <select name="status" id="status" class="form-control">  
                                        <option value="0">Disable</option>
                                        <option value="1" selected>Active</option>
                                </select>
                                @include('alerts.feedback', ['field' => 'status'])
                            </div>
                            <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                <label>{{ __('Price') }}</label>
                                <input type="number" name="price" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" value="0">
                                @include('alerts.feedback', ['field' => 'price'])
                            </div>

                            <div class="form-group{{ $errors->has('discount') ? ' has-danger' : '' }}">
                                <label>{{ __('Discount') }}</label>
                                <input type="number" name="discount" class="form-control{{ $errors->has('discount') ? ' is-invalid' : '' }}" value="0">
                                @include('alerts.feedback', ['field' => 'discount'])
                            </div>

                            <label>{{ __('Image') }}</label>
                            <br/>
                            <input type="file" name="image" id="input-picture" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                            <img id="output" src="https://teamtech24.com/foodhati/foodhatiAdmin/assets/img/foodimg/default-food-image.jpg" width="100" height="100">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Add') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
