<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Shop;
use App\Order;
use App\Stock;
class BusinessController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login_val(Request $req)
    {
        $req->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $email=$req->email;
        $password=$req->password;
        $info=User::where('email',$email)->first();
        if(!$info)
        {
           
            echo "We can't recognize your mail";
        }
        elseif(Hash::check($password,$info->password))
        {
            return redirect('stock');
        }
        else
        {
            
            echo "invalid password";
        }
    }
    public function stock()
    {
        $data=Shop::all();
        $value=Order::all();
        return view('stock',['users'=>$data],['oname'=>$value]);
    }

    public function stock_action(Request $req)
    {
        $purchase=new Stock;
        $purchase->name=$req->name;
        $purchase->product=$req->product;
        $purchase->stock=$req->stock;
        $purchase->save();
        return redirect('stock');
    }
    public function show()
    {
        $c=DB::table('stocks')->paginate(5);
        return view('view',['data'=>$c]);
    }
    public function edit($id)
    {
        $data=Stock::find($id);
        return view('update',['updata'=>$data]);
    }
    public function update(Request $req)
    {
        $datas=Stock::find($req->id);
        $datas->name=$req['name'];
        $datas->product=$req->product;
        $datas->stock=$req->stock;
        $datas->save();
        return redirect('view');
    }
    function delete($id)
    {
        $data=Stock::find($id);
        $data->delete();
        return redirect('view');
    }
    
}

