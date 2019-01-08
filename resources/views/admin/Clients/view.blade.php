@extends('admin.layout.master')

@section('ViewClients')
    active
@endsection

@section('Clients')
    active
@endsection

@section('BreadCrumbsPage')
    <i class="fa fa-user" style="color:#663ab7"></i>  &nbsp Clients
@endsection

@section('BreadCrumbs')
    <li class="breadcrumb-item">Clients</li>
    <li class="breadcrumb-item"> <a href="{{ url('/admin/clients') }}">View Clients </a></li>
@endsection


@section('Content')
    <div class="row">
        <div class="col-lg-10 col-md-10 col-sm-10 " >
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 "  >
            <button class="btn btn-primary icon-btn" type="button" onclick="location.href='{{ url('/admin/clients/add') }}'"> <i class="fa fa-plus"></i> &nbsp Add Clients</button>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Business Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>Notes</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($Clients as $Client)
                            <tr>
                                <td>{{ $Client->name }}</td>
                                <td>{{ $Client->business_name }}</td>
                                <td>{{ $Client->email }}</td>
                                <td>{{ $Client->mobile }}</td>
                                <td>{{ $Client->address }}</td>
                                <td>{{ $Client->notes }}</td>
                                <td>
                                    <form action="{{ route('admin.DeleteClient', $Client->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <a href="{{ route('admin.clientedit', $Client->id) }}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> </button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection