@extends('admin.layout.master')

@section('Profile')
    active
@endsection

@section('BreadCrumbsPage')
    <i class="fa fa-user-secret" style="color:#663ab7"></i>  &nbsp Edit Profile
@endsection

@section('BreadCrumbs')
    <li class="breadcrumb-item"> <a href="{{ url('/admin/profile') }}">Profile </a></li>
@endsection


@section('Content')

    <form action="{{ route('admin.updateProfile') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
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
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="file" name="logo" aria-describedby="emailHelp">
                    </div>
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
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="logo_text" aria-describedby="emailHelp" value="{{ $Profile->logo_text }}">
                    </div>
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
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="company_name" aria-describedby="emailHelp" value="{{ $Profile->company_name }}">
                    </div>
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
                    <textarea class="form-control form-control-lg" name="address"  rows="3" style="border:0">{{ $Profile->address }}</textarea>
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
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="mobile" aria-describedby="emailHelp" value=" {{ $Profile->mobile }}">
                    </div>
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
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="email" aria-describedby="emailHelp" value="{{ $Profile->email }}">
                    </div>
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
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="bill_prefix" aria-describedby="emailHelp" value="{{ $Profile->bill_prefix }}">
                    </div>
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
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="bill_start_number" aria-describedby="emailHelp" value="{{ $Profile->bill_start_number }}">
                    </div>
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
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="bank_account" aria-describedby="emailHelp" value="{{ $Profile->bank_account }}">
                    </div>
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
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="gst" aria-describedby="emailHelp" value="{{ $Profile->gst }}">
                    </div>
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
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="pan" aria-describedby="emailHelp" value="{{ $Profile->pan }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-xs-5 col-md-5">
                </div>
                <div class="col-lg-1 col-xs-1 col-md-1">
                    <button type="submit" class="btn btn-success btn-sm">Update Profile</button>
                </div>
            </div>
        </div>
    </div>
    </form>

@endsection