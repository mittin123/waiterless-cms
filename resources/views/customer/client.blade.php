@extends('layouts.app', ['page' => __('client'), 'pageSlug' => 'customer'])

@section('content')
<div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 style="display: inline-block;" class="card-title"> Customer</h4>
                    <a href="{{route('customer.add')}}" style="float: right; display: inline-block;" type="button" class="btn btn-primary">Add Customer</a>
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
                            @foreach($data as $item)
                                <tr>
                                    <td>
                                    {{$item->name}}
                                    </td>
                                    <td>
                                    {{$item->email}}
                                    </td>
                                    <td>
                                    {{$item->phone}}
                                    </td>
                                    <td>
                                    {{
                                        number_format($item->total_payment,0,',','.')
                                    }}
                                    </td>
                                    <td class="text-center">
                                    {{$item->vip_level}}
                                    </td>
                                    <td>
                                    {{date('d/m/yy h:i:s',$item->last_login)}}
                                    </td>
                                    <td class="td-actions text-center">
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
