@extends('layouts.app', ['page' => __('category'), 'pageSlug' => 'menu'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 style="display: inline-block;" class="card-title"> Category</h4>
                    <a href="{{ route('menu.category_add')  }}" style="float: right; display: inline-block;" type="button" class="btn btn-primary">Add Category</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                            <tr>
                                <th>
                                Category ID
                                </th>
                                <th>
                                Category Name
                                </th>
                                <th class="text-center">
                                Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                                <tr>
                                    <td>
                                    {{$item->category_id}}
                                    </td>
                                    <td>
                                    {{$item->category_name}}
                                    </td>
                                    <td class="td-actions text-center">
                                        <a href="{{route('menu.category_edit',$item->category_id)}}" type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                                            <i class="tim-icons icon-settings"></i>
                                        </a>
                                        <a href="{{route('menu.category_delete',$item->category_id)}}" type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
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
