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
                            @method('put')

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ __('Name') }}</label>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>

                            <div class="form-group{{ $errors->has('parentID') ? ' has-danger' : '' }}">
                                <label>{{ __('Parent ID') }}</label>
                                <select id="parentID" name="parentID" class="form-control">
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
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Add') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
