<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller{
    public function register(){
        return view('admin.register');
    }
    public function store(Request $request)
    {
        
    
        // Get data from request
        $data = $request->only('username', 'email', 'password', 'role', 'active');
        
        // Hash the password
        $data['password'] = bcrypt($data['password']);
        
        // Save data to database
        User::create($data);
    
        return redirect()->route('admin.register')->with('message', 'Tạo tài khoản thành công');
    }
    
    
    public function showLoginForm()
    {
        return view('admin.login'); // Tạo view cho trang đăng nhập
    }
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Lấy người dùng dựa trên email
    $user = User::where('email', $request->email)->first();

    // Kiểm tra xem người dùng có tồn tại và mật khẩu có đúng không
    if ($user && Hash::check($request->password, $user->password)) {
        // Kiểm tra trạng thái tài khoản
        if ($user->active == 2) {
            return redirect()->route('admin.login')->with('message', 'Tài khoản không kích hoạt.'); 
        }

        Auth::login($user); // Đăng nhập người dùng

        // Kiểm tra vai trò và chuyển hướng tương ứng
        if ($user->role === 'admin') {
            return redirect()->route('admin.phone.dashboard'); // Đến trang admin
        } else {
            return redirect()->route('admin.information',$user); // Đến trang người dùng
        }
    }

    return back()->withErrors([
        'email' => 'Thông tin đăng nhập không đúng.',
    ]);
}

    public function user_information(User $user)
    {
        return view('admin.information',compact('user')); // Tạo view cho information
    }
      public function dashboard()
    {
        return view('admin.phone.dashboard'); // Tạo view cho dashboard
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
    
}