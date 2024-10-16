<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller{
    public function index()
    {
        $listUser = User::all();
        $totalUser = User::count();

        return view('admin.accountmanagement.account', compact('listUser', 'totalUser', ));
    }

    public function destroy(User $user) {
        // Lấy thông tin người dùng hiện tại
        $currentUser = auth()->user();
    
        // Kiểm tra xem người dùng hiện tại có phải là người dùng cần xóa không
        if ($currentUser->id === $user->id) {
            return redirect()->route('admin.accountmanagement.account')->with( 'message', 'Bạn không thể xóa tài khoản của chính mình.');
        }
    
        // Xóa người dùng
        $user->delete();
        return redirect()->route('admin.accountmanagement.account')->with('message', 'Xóa tài khoản thành công.');
    }
    public function edit(User $user){
        return view('admin.accountmanagement.editaccount',compact('user'));
    }
    public function update(Request $request, User $user) {
        // Validate the request
        $request->validate([
            'active' => 'required|in:1,2', // Chỉ cho phép giá trị 1 hoặc 2
        ]);
    
        // Cập nhật thông tin người dùng
        $user->active = $request->active;
        $user->save();
    
        return redirect()->route('admin.accountmanagement.account')->with('message', 'Cập nhật tài khoản thành công.');
    }
    
}