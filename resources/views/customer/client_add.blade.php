@extends('layouts.app', ['page' => __('client_add'), 'pageSlug' => 'customer'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Add Customer') }}</h5>
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
