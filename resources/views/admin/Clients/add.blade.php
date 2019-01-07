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
                        <form method="post" action="{{ route('admin.AddClients') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input class="form-control form-control-lg" type="text" name="name" aria-describedby="emailHelp" placeholder="Enter Client Name ">
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-lg" type="text" name="business_name" aria-describedby="emailHelp" placeholder="Enter Business Name ">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control form-control-lg" type="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Id ">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control form-control-lg" type="text" name="mobile" aria-describedby="emailHelp" placeholder="Enter Phone number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control form-control-lg" id="exampleTextarea" name="address" placeholder="Enter Address" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-lg" type="" aria-describedby="emailHelp" name="GST" placeholder="Enter GST Number">
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-lg" type="" aria-describedby="emailHelp" name="PAN" placeholder="Enter PAN Number">
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-lg" type="" aria-describedby="emailHelp" name="notes" placeholder="Enter Notes">
                            </div>
                            <div class="">
                                <button class="btn btn-primary" type="submit">Submit</button>
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
