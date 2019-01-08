<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function AddClients(){
        return view('admin.Clients.add');
    }

    public function SaveClients(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'business_name' => 'required',
            'email' => 'required|email|unique:clients',
            'mobile' => 'required|unique:clients|max:10|min:10',
            'address' => 'required',
        ]);
        try {
            $Clients = new Client;
            $Clients->name = request('name');
            $Clients->business_name = request('business_name');
            $Clients->email = request('email');
            $Clients->mobile = request('mobile');
            $Clients->address = request('address');
            $Clients->GST = request('GST');
            $Clients->PAN = request('PAN');
            $Clients->notes = request('notes');
            $Clients->truck_number = request('truck_number');
            $Clients->consigment_number = request('consigment_number');
            $Clients->save();
            return back()->with('success','Clients Added Sucessfully!!');
        } catch (\Exception $e) {
            return back()->with('wrong','Sorry! something Went To Wrong.');
        }
    }

    public function ViewAllClients(){
        $Clients = Client::get()->all();
        return view('admin.Clients.view',compact('Clients'));
    }


    public function ClientsEdit($id){
        try {
            $Client = Client::findorfail($id);
            return view('admin.Clients.clientedit',compact('Client'));
        } catch (\Exception $e) {
            return back()->with('wrong','Sorry! something Went To Wrong.');
        }
    }

    public function updateClient(Request $request,$id){
        $this->validate($request, [
            'name' => 'required',
            'business_name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|max:10|min:10',
            'address' => 'required',
        ]);
        try {
            $Clients =Client::findorfail($id);
            $Clients->name = request('name');
            $Clients->business_name = request('business_name');
            $Clients->email = request('email');
            $Clients->mobile = request('mobile');
            $Clients->address = request('address');
            $Clients->GST = request('GST');
            $Clients->PAN = request('PAN');
            $Clients->notes = request('notes');
            $Clients->truck_number = request('truck_number');
            $Clients->consigment_number = request('consigment_number');
            $Clients->save();
            return back()->with('success','Clients Update Sucessfully!!');
        } catch (\Exception $e) {
            return back()->with('wrong','Sorry! something Went To Wrong.');
        }
    }


    public function DeleteClient($id){
        try {
            Client::findorfail($id)->delete();
            return back()->with('success','Clients Deleted Sucessfully!!');
        } catch (\Exception $e) {
            return back()->with('wrong','Sorry! something Went To Wrong.');
        }
    }

}
