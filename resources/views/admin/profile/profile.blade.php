@extends('admin.layout.master')

@section('Profile')
    active
@endsection

@section('BreadCrumbsPage')
    <i class="fa fa-user-secret" style="color:#663ab7"></i>  &nbsp Profile
@endsection

@section('BreadCrumbs')
    <li class="breadcrumb-item"> <a href="{{ url('/admin/profile') }}">Profile </a></li>
@endsection


@section('Content')
    <div class="row">
        <div class="col-xs-10">

        </div>
        <div class="col-xs-2">
            <button class="btn btn-success" type="button" onclick="window.location.href='{{ url('/admin/profile/edit') }}'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button>
        </div>
    </div>
    <div class="row tile w3-hide-small w3-hide-medium" style="margin-top:1%">
        <div class="col-lg-12 col-xs-12 col-md-2">
            <div class="row">
                <div class="col-lg-3 col-xs-3 col-md-3">
                    Logo
                </div>
                <div class="col-lg-1 col-xs-1 col-md-1">
                    :
                </div>
                <div class="col-lg-8 col-xs-8 col-md-8">
                    {{ $Profile->logo }}
                </div>
            </div>
            <hr style="height:2px;border:none;background-color:grey;">
            <div class="row">
                <div class="col-lg-3 col-xs-3 col-md-3">
                    Company Logo
                </div>
                <div class="col-lg-1 col-xs-1 col-md-1">
                    :
                </div>
                <div class="col-lg-8 col-xs-8 col-md-8">
                    {{ $Profile->logo_text }}
                </div>
            </div>
            <hr style="height:2px;border:none;background-color:grey;">
            <div class="row">
                <div class="col-lg-3 col-xs-3 col-md-3">
                    Company Name
                </div>
                <div class="col-lg-1 col-xs-1 col-md-1">
                    :
                </div>
                <div class="col-lg-8 col-xs-8 col-md-8">
                    {{ $Profile->company_name }}
                </div>
            </div>
            <hr style="height:2px;border:none;background-color:grey;">
            <div class="row">
                <div class="col-lg-3 col-xs-3 col-md-3">
                    Address
                </div>
                <div class="col-lg-1 col-xs-1 col-md-1">
                    :
                </div>
                <div class="col-lg-8 col-xs-8 col-md-8">
                    {{ $Profile->address }}
                </div>
            </div>
            <hr style="height:2px;border:none;background-color:grey;">
            <div class="row">
                <div class="col-lg-3 col-xs-3 col-md-3">
                    Phone Number
                </div>
                <div class="col-lg-1 col-xs-1 col-md-1">
                    :
                </div>
                <div class="col-lg-8 col-xs-8 col-md-8">
                    {{ $Profile->mobile }}
                </div>
            </div>
            <hr style="height:2px;border:none;background-color:grey;">
            <div class="row">
                <div class="col-lg-3 col-xs-3 col-md-3">
                    Email
                </div>
                <div class="col-lg-1 col-xs-1 col-md-1">
                    :
                </div>
                <div class="col-lg-8 col-xs-8 col-md-8">
                    {{ $Profile->email }}
                </div>
            </div>
            <hr style="height:2px;border:none;background-color:grey;">
            <div class="row">
                <div class="col-lg-3 col-xs-3 col-md-3">
                    Bill Prefix
                </div>
                <div class="col-lg-1 col-xs-1 col-md-1">
                    :
                </div>
                <div class="col-lg-8 col-xs-8 col-md-8">
                    {{ $Profile->bill_prefix }}
                </div>
            </div>
            <hr style="height:2px;border:none;background-color:grey;">
            <div class="row">
                <div class="col-lg-3 col-xs-3 col-md-3">
                    Bill Starting Number
                </div>
                <div class="col-lg-1 col-xs-1 col-md-1">
                    :
                </div>
                <div class="col-lg-8 col-xs-8 col-md-8">
                    {{ $Profile->bill_start_number }}
                </div>
            </div>
            <hr style="height:2px;border:none;background-color:grey;">
            <div class="row">
                <div class="col-lg-3 col-xs-3 col-md-3">
                    Default Bank Account
                </div>
                <div class="col-lg-1 col-xs-1 col-md-1">
                    :
                </div>
                <div class="col-lg-8 col-xs-8 col-md-8">
                    {{ $Profile->bank_account }}
                </div>
            </div>
            <hr style="height:2px;border:none;background-color:grey;">
            <div class="row">
                <div class="col-lg-3 col-xs-3 col-md-3">
                    GST Number
                </div>
                <div class="col-lg-1 col-xs-1 col-md-1">
                    :
                </div>
                <div class="col-lg-8 col-xs-8 col-md-8">
                    {{ $Profile->gst }}
                </div>
            </div>
            <hr style="height:2px;border:none;background-color:grey;">
            <div class="row">
                <div class="col-lg-3 col-xs-3 col-md-3">
                    PAN Number
                </div>
                <div class="col-lg-1 col-xs-1 col-md-1">
                    :
                </div>
                <div class="col-lg-8 col-xs-8 col-md-8">
                    {{ $Profile->pan }}
                </div>
            </div>
        </div>
    </div>

@endsection