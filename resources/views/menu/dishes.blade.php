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
                                Name
                                </th>
                                <th>
                                Description
                                </th>
                                <th>
                                Category
                                </th>
                                <th>
                                Price
                                </th>
                                <th class="text-center">
                                Status
                                </th>
                                <th class="text-center">
                                Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->category_name}}</td>
                                    <td>{{$item->price}}</td>
                                    <td class="text-center">
                                        @if($item->status==0)
                                            Disabled
                                        @else
                                            Active
                                        @endif
                                    </td>
                                    <td class="td-actions text-center">
                                        <a href="" type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon">
                                            <i class="tim-icons icon-single-02"></i>
                                        </a>
                                        <a href="edit/{{$item->id}}" type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                                            <i class="tim-icons icon-settings"></i>
                                        </a>
                                        <a href="" type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                                            <i class="tim-icons icon-simple-remove"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
