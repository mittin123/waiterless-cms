@extends('layouts.app', ['page' => __('client'), 'pageSlug' => 'customer'])

@section('content')
<div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 style="display: inline-block;" class="card-title"> Customer</h4>
                    <a href="" style="float: right; display: inline-block;" type="button" class="btn btn-primary">Add Customer</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter" id="datatables">
                            <thead class=" text-primary">
                            <tr>
                                <th>
                                Name
                                </th>
                                <th>
                                Email
                                </th>
                                <th>
                                Phone
                                </th>
                                <th>
                                Total Payment
                                </th>
                                <th class="text-center">
                                Vip Level
                                </th>
                                <th>
                                Last Login
                                </th>
                                <th class="text-center">
                                Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                    Duong Quang Anh
                                    </td>
                                    <td>
                                    pr0ovjp1999@gmail.com
                                    </td>
                                    <td>
                                    01234567899
                                    </td>
                                    <td>
                                    5.000.000 vnd
                                    </td>
                                    <td class="text-center">
                                    15
                                    </td>
                                    <td>
                                    04/05/2020 1:46:00 AM
                                    </td>
                                    <td class="td-actions text-center">
                                        <a href="" type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                                            <i class="tim-icons icon-simple-remove"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
