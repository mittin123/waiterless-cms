@extends('layouts.app', ['page' => __('category'), 'pageSlug' => 'menu'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 style="display: inline-block;" class="card-title"> Category</h4>
                    <a href="" style="float: right; display: inline-block;" type="button" class="btn btn-primary">Add Category</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                            <tr>
                                <th>
                                Image
                                </th>
                                <th>
                                Name
                                </th>
                                <th>
                                Country
                                </th>
                                <th>
                                City
                                </th>
                                <th class="text-center">
                                Salary
                                </th>
                                <th class="text-center">
                                Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                    Dakota Rice
                                    </td>
                                    <td>
                                    Dakota Rice
                                    </td>
                                    <td>
                                    Niger
                                    </td>
                                    <td>
                                    Oud-Turnhout
                                    </td>
                                    <td class="text-center">
                                    $36,738
                                    </td>
                                    <td class="td-actions text-center">
                                        <a href="" type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                                            <i class="tim-icons icon-settings"></i>
                                        </a>
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
