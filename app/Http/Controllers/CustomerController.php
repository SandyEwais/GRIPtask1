<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Transformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function viewAllCustomers(){
        return view('customers',[
            'customers' => Customer::all()
        ]);
    }
    public function viewSingleCustomer(Customer $customer){
        return view('customer-details',[
            'customer' => Customer::find($customer)->first()
        ]);

    }
    public function showTransferForm(Customer $customer){
        return view('transfer',[
            'sender' => Customer::find($customer)->first(),
            'customers' => Customer::all()->except($customer->id)
        ]);
    }
    public function transfer(Request $request){
        $request->validate([
            'sender' => 'required',
            'receiver' => 'required|NotIn:Select',
            'amount' => 'required'
        ]);
        $sender = Customer::where('name',$request->sender)->first();
        $receiver = Customer::where('name',$request->receiver)->first();
        if($request->amount > $sender->balance || $request->amount <= 0){
            return redirect()->back()->with('error','Amount of money is invalid.');
            exit;
        }else{
            $transformation = [
                'sender' => $request->sender,
                'receiver' => $request->receiver,
                'amount' => $request->amount
            ];
            Transformation::create($transformation);
            $sender->balance = $sender->balance - $request->amount;
            $sender->save();
            $receiver->balance = $receiver->balance + $request->amount;
            $receiver->save();
            return redirect()->route('view-customers')->with('message','Transformation took place successfully.');
        }

    }
}
