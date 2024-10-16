<?php 
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Phone;

class UserController extends Controller{
    public function index(){
        $listPhones = Phone::orderByDesc('id')->paginate(12);
        return view('user.phone.home',compact('listPhones'));
    }
    public function detail($id){
        $phone = Phone::where('id', $id)->first();
        return view('user.phone.detail',compact('phone'));
    }
}