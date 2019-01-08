<?php

namespace App\Http\Controllers;


use App\Admin;
use App\Bill;
use App\Client;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function AddBill(){
        return view('admin.bill.add');
    }

    public function SaveBills(Request $request){
        $this->validate($request, [
            'client_id' => 'required|exists:clients,id',
            'date' => 'required|date',
        ]);
        try {
            $lastData =  Bill::orderBy('id', 'desc')->first();
            $Admin = Admin::findorfail(auth()->user()->id);
            $Bill = new Bill;
            $Bill->client_id = request('client_id');

            if (!empty($lastData)){
                $lastInvoice = explode('-',$lastData->invoice);
                if($lastInvoice[0]== $Admin->bill_prefix){
                    $Bill->invoice = $Admin->bill_prefix.'-'.(end($lastInvoice)+1);
                }else{
                    $Bill->invoice = $Admin->bill_prefix.'-'.$Admin->bill_start_number;
                }
            }else{
                $Bill->invoice = $Admin->bill_prefix.'-'.$Admin->bill_start_number;
            }

            $Bill->date = request('date');
            $Bill->textarea = request('textarea');
            $Bill->FREIGHT = request('FREIGHT');
            $Bill->HEIGHT_CASE = request('HEIGHT_CASE');
            $Bill->HOLTING = request('HOLTING');
            $Bill->UNLOADING_CHARGES = request('UNLOADING_CHARGES');
            $Total = request('FREIGHT') + request('HEIGHT_CASE') + request('HOLTING') + request('UNLOADING_CHARGES');
            $Bill->TOTAL = $Total;
            $Bill->ADVANCE = request('ADVANCE');
            $Bill->PENDING = $Total - request('ADVANCE');
            $Bill->save();
            return back()->with('success','Bill Generated Sucessfully!!');
        } catch (\Exception $e) {
            return back()->with('wrong','Sorry! something Went To Wrong.');
        }
    }


    public function ViewAllBills(){
        $Bills = Bill::get()->all();
        return view('admin.bill.view',compact('Bills'));
    }

    public function EditBill($id){
        try {
            $Bill = Bill::findorfail($id);
            return view('admin.bill.edit',compact('Bill'));
        } catch (\Exception $e) {
            return back()->with('wrong','Sorry! something Went To Wrong.');
        }
    }


    public function updateBill(Request $request,$id){
        $this->validate($request, [
            'client_id' => 'required|exists:clients,id',
            'date' => 'required|date',
        ]);
        try {
            $Bill = Bill::findorfail($id);
            $Bill->client_id = request('client_id');
            $Bill->date = request('date');
            $Bill->textarea = request('textarea');
            $Bill->FREIGHT = request('FREIGHT');
            $Bill->HEIGHT_CASE = request('HEIGHT_CASE');
            $Bill->HOLTING = request('HOLTING');
            $Bill->UNLOADING_CHARGES = request('UNLOADING_CHARGES');
            $Total = request('FREIGHT') + request('HEIGHT_CASE') + request('HOLTING') + request('UNLOADING_CHARGES');
            $Bill->TOTAL = $Total;
            $Bill->ADVANCE = request('ADVANCE');
            $Bill->PENDING = $Total - request('ADVANCE');
            $Bill->save();
            return back()->with('success','Bill Updated Sucessfully!!');
        } catch (\Exception $e) {
            return back()->with('wrong','Sorry! something Went To Wrong.');
        }
    }


    public function DeleteBill($id){
        try {
            Bill::findorfail($id)->delete();
            return back()->with('success','Bill Deleted Sucessfully!!');
        } catch (\Exception $e) {
            return back()->with('wrong','Sorry! something Went To Wrong.');
        }
    }

    public function printBill($id){
        try {
            $Admin = Admin::findorfail(auth()->user()->id);
            $Bill = Bill::findorfail($id);
            $Client = Client::findorfail($Bill->id);
            return view('admin.bill',compact('Bill','Admin','Client'));
        } catch (\Exception $e) {
            return back()->with('wrong','Sorry! something Went To Wrong.');
        }
    }
}
