@extends('admin.layout.master')

@section('AddBill')
    active
@endsection

@section('Bills')
    active
@endsection

@section('BreadCrumbsPage')
    <i class="fa fa-files-o" style="color:#663ab7"></i>  &nbsp Add Bill
@endsection

@section('BreadCrumbs')
    <li class="breadcrumb-item">Bills</li>
    <li class="breadcrumb-item"><a href="{{ url('/admin/bill/add') }}">Add Bills</a></li>
@endsection

@section('Content')
    <div class="row">
        <div class="col-xs-2 col-lg-2 col-sm-2"></div>
        <div class="col-xs-12 col-lg-8 col-sm-8 tile">
            <form action="{{ route('admin.AddBills') }}" method="post">
                {{ csrf_field() }}
            <div class="selectcustomer">
                <div class="row" style="margin-left:-1%">
                    <div class=" col-xs-6 "  >
                        <div class="form-group">
                            <label for="">To</label>
                            <select class="form-control select" name="client_id">
                                <option value="">Select Customer</option>
                                @foreach(auth()->user()->getAllClients() as $Client)
                                    <option value="{{ $Client->id }}">{{ $Client->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="">

                    </div>
                    <div class=" col-xs-6 ">
                        <div class="form-group date">
                            <label for="">Date</label>
                            <input class="form-control select" name="date" type="date" value="{{ date('Y-m-d') }}" aria-describedby="" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:0%">
                    <div class="col-xs-12 col-lg-4 col-sm-4">
                        <div class="form-group">
                            <textarea class="form-control form-control-lg" id="" placeholder="Drop your tetx here ..." rows="12"></textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-8 col-sm-8">
                        <table class="table table-bordered">

                            <tbody>
                            <tr>
                                <td height="50" class="w3-center"><div style="margin-top:3%;">FREIGHT</div></td>
                                <td style="padding-left:2%;width:50%"><textarea class="form-control form-control-lg CalculateValues" id="FREIGHT" name="FREIGHT" placeholder="" rows="1" style="border:0"></textarea></td>
                            </tr>
                            <tr>
                                <td height="50" class="w3-center"><div style="margin-top:3%;">HEIGHT CASE</div></td>
                                <td style="padding-left:2%;width:50%"><textarea class="form-control form-control-lg CalculateValues" id="HEIGHT_CASE" name="HEIGHT_CASE" placeholder="" rows="1" style="border:0"></textarea></td>
                            </tr>
                            <tr>
                                <td height="50" class="w3-center"><div style="margin-top:3%;">HOLTING</div></td>
                                <td style="padding-left:2%;width:50%"><textarea class="form-control form-control-lg CalculateValues" id="HOLTING" name="HOLTING" placeholder="" rows="1" style="border:0"></textarea></td>
                            </tr>
                            <tr>
                                <td height="50" class="w3-center"><div style="margin-top:3%;">UNLOADING CHARGES</div></td>
                                <td style="padding-left:2%;width:50%"><textarea class="form-control form-control-lg CalculateValues" id="UNLOADING_CHARGES" name="UNLOADING_CHARGES" placeholder="" rows="1" style="border:0"></textarea></td>
                            </tr>
                            <tr>
                                <td height="50" class="w3-center"><div style="margin-top:3%;">TOTAL</div></td>
                                <td style="padding-left:2%;width:50%"><textarea class="form-control form-control-lg" id="TOTAL" placeholder="" rows="1" style="border:0" readonly></textarea></td>
                            </tr>
                            <tr>
                                <td height="50" class="w3-center"><div style="margin-top:3%;">ADVANCE</div></td>
                                <td style="padding-left:2%;width:50%"><textarea class="form-control form-control-lg CalculateValues" id="ADVANCE" name="ADVANCE" placeholder="" rows="1" style="border:0"></textarea></td>
                            </tr>
                            <tr>
                                <td height="50" class="w3-center"><div style="margin-top:3%;">PENDING</div></td>
                                <td style="padding-left:2%;width:50%"><textarea class="form-control form-control-lg" id="PENDING" placeholder="" rows="1" style="border:0" readonly></textarea></td>
                            </tr>

                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-xs-9">

                            </div>
                            <div class="col-xs-3 xs-2">
                                <button class="btn btn-primary" type="submit">Save Bill</button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            </form>

        </div>
        <div class="col-xs-2 col-lg-2 col-sm-2"></div>
    </div>


@endsection
