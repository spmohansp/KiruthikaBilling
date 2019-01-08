@extends('admin.layout.master')

@section('AddClients')
    active
@endsection

@section('Clients')
    active
@endsection

@section('BreadCrumbsPage')
    <i class="fa fa-user" style="color:#663ab7"></i>  &nbsp Clients
@endsection

@section('BreadCrumbs')
    <li class="breadcrumb-item"> <a href="{{ url('/admin/clients') }}">Clients </a></li>
    <li class="breadcrumb-item"> <a href="{{ url('/admin/clients/add') }}">Add Clients </a></li>
@endsection

@section('Content')
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9">
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 " style="margin-left:-2.4%">
            <button class="btn btn-primary" type="button" onclick="location.href='{{ url('/admin/clients') }}'"> <i class="fa fa-eye"></i> &nbspView Clients</button>
        </div>
    </div>


    <div class="row" style="padding-top:3%;" >
    </div>
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 tile">
            <div class="">
                <div class="row">
                    <div class="col-lg-12">
                        <form method="post" action="{{ route('admin.UpdateClients',$Client->id) }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input class="form-control form-control-lg" type="text" name="name" aria-describedby="emailHelp" value="{{$Client->name}}">
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-lg" type="text" name="business_name" aria-describedby="emailHelp" value="{{$Client->business_name}}">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control form-control-lg" type="email" name="email" aria-describedby="emailHelp" value="{{$Client->email}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control form-control-lg" type="text" name="mobile" aria-describedby="emailHelp"value="{{$Client->mobile}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control form-control-lg" id="exampleTextarea" name="address"  rows="3">{{$Client->address}}</textarea>
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-lg" type="" aria-describedby="emailHelp" name="GST" value="{{$Client->GST}}">
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-lg" type="" aria-describedby="emailHelp" name="PAN" value="{{$Client->PAN}}">
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-lg" type="" aria-describedby="emailHelp" name="notes" value="{{$Client->notes}}">
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-lg" type="" aria-describedby="emailHelp" name="truck_number" value="{{$Client->truck_number}}" placeholder="Enter Truck Number">
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-lg" type="" aria-describedby="emailHelp" name="consigment_number" value="{{$Client->consigment_number}}" placeholder="Enter Consigment Number">
                            </div>
                            <div class="">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-2">

        </div>
    </div>


@endsection
