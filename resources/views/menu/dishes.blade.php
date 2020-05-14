@extends('layouts.app', ['page' => __('dishes'), 'pageSlug' => 'menu'])

@section('content')
<div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 style="display: inline-block;" class="card-title"> Dishes</h4>
                    <a href="" style="float: right; display: inline-block;" type="button" class="btn btn-primary">Add Dishes</a>
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
                                Description
                                </th>
                                <th>
                                Category
                                </th>
                                <th class="text-center">
                                Price
                                </th>
                                <th class="text-center">
                                Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img width="200" src="https://beptruong.edu.vn/wp-content/uploads/2018/06/bun-rieu-cua.jpg" class="">
                                    </td>
                                    <td>
                                    Boon Real Cua
                                    </td>
                                    <td>
                                    Real bun of Hanoi
                                    </td>
                                    <td>
                                    Bun
                                    </td>
                                    <td class="text-center">
                                    35.000 vnd
                                    </td>
                                    <td class="td-actions text-center">
                                        <a href="" type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon">
                                            <i class="tim-icons icon-single-02"></i>
                                        </a>
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
