@extends('layouts.app', ['page' => __('cashier_list'), 'pageSlug' => 'staff'])

@section('content')
<div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 style="display: inline-block;" class="card-title"> Staff</h4>
                    <a href="{{ route('staff.add')  }}" style="float: right; display: inline-block;" type="button" class="btn btn-primary">Add Staff</a>
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
                                UserName
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
                            @foreach($data as $item)
                                <tr>
                                    <td>
                                    {{$item->name}}
                                    </td>
                                    <td>
                                    {{$item->username}}
                                    </td>
                                    <td>
                                    {{date('d/m/yy h:i:s',$item->last_login+25200)}}
                                    </td>
                                    <td class="td-actions text-center">
                                        <a href="{{ route('staff.edit', $item->id)  }}" type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                                            <i class="tim-icons icon-settings"></i>
                                        </a>
                                        <a href="{{ route('staff.delete', $item->id) }}" type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
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
