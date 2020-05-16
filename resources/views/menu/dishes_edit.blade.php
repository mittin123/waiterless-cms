@extends('layouts.app', ['page' => __('dishes_edit'), 'pageSlug' => 'menu'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Edit Dishes') }}</h5>
                </div>
                <form method="POST" action="" autocomplete="off">
                    <div class="card-body">
                            @csrf
                    
                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ __('Name') }}</label>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{$data->name}}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                <label>{{ __('Description') }}</label>
                                <input type="text" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="{{ __('') }}" value="{{ $data->description }}">
                                @include('alerts.feedback', ['field' => 'description'])
                            </div>

                            <div class="form-group{{ $errors->has('discount') ? ' has-danger' : '' }}">
                                <label>{{ __('Discount') }}</label>
                                <input type="text" name="discount" class="form-control{{ $errors->has('discount') ? ' is-invalid' : '' }}" placeholder="{{ __('') }}" value="{{ $data->discount }}">
                            </div>
                            <div class="form-group{{ $errors->has('cate') ? ' has-danger' : '' }}">
                                <label>{{ __('Category') }}</label>
                                <select name="cate" id="cate" class="form-control">
                                @foreach($category_list as $item)
                                    @if($item->category_id==$data->category)
                                        <option value="{{$item->category_id}}" selected>{{$item->category_name}}</option>
                                    @else
                                        <option value="{{$item->category_id}}">{{$item->category_name}}</option>
                                    @endif
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>{{ __('Status') }}</label>
                                <select name="cate" id="cate" class="form-control">
                                    @if($item->status==0)
                                        <option value="0" selected>Disable</option>
                                        <option value="1">Active</option>
                                    @else
                                        <option value="0">Disable</option>
                                        <option value="1" selected>Active</option>
                                    @endif
                                </select>
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
                                <input type="number" name="price" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" placeholder="{{ __('Price') }}" value="{{ $data->price }}">
                                @include('alerts.feedback', ['field' => 'price'])
                            </div>

                            <label>{{ __('Image') }}</label>
                            <br/>
                                <input type="file" name="photo" id="input-picture" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                <img id="output" src="https://teamtech24.com/foodhati/foodhatiAdmin/assets/img/foodimg/default-food-image.jpg" width="100" height="100">

                    </div>
                    <div class="card-footer">
                        <button type="submit" name ="action" class="btn btn-fill btn-primary">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
