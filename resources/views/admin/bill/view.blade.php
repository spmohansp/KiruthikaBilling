@extends('admin.layout.master')

@section('ViewBills')
    active
@endsection

@section('Bills')
    active
@endsection

@section('BreadCrumbsPage')
    <i class="fa fa-files-o" style="color:#663ab7"></i>  &nbsp View Bill
@endsection

@section('BreadCrumbs')
    <li class="breadcrumb-item">Bills</li>
    <li class="breadcrumb-item"><a href="{{ url('/admin/bills') }}">View Bills</a></li>
@endsection

@section('Content')
<div class="row">
    <div class="col-xs-12">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Invoice No</th>
                    <th>Customer Name</th>
                    <th>Cost</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                @foreach($Bills as $Bill)
                    <tr>
                        <td>{{ $Bill->date }}</td>
                        <td>{{ $Bill->invoice }}</td>
                        <td>{{ $Bill->Client->name }}</td>
                        <td>{{ $Bill->TOTAL }}</td>
                        <td>
                            <p class="bs-component">
                             <form action="{{ route('admin.DeleteBill',$Bill->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-primary" type="button" onclick="window.location.href='{{ route('admin.printBill',$Bill->id) }}'">View</button>
                                <a href="{{ route('admin.EditBill',$Bill->id) }}" class="btn btn-success">Edit</a>
                                <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</i> </button>
                            </form>
                            </p>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
