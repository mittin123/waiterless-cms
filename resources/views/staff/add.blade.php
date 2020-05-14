@extends('layouts.app', ['page' => __('add'), 'pageSlug' => 'customer'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Add Profile') }}</h5>
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

                            <div class="form-group{{ $errors->has('username') ? ' has-danger' : '' }}">
                                <label>{{ __('Email address') }}</label>
                                <input type="text" name="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}">
                                @include('alerts.feedback', ['field' => 'username'])
                            </div>
                            
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <label>{{ __('Password') }}</label>
                                <input type="text" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                                @include('alerts.feedback', ['field' => 'password'])
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
