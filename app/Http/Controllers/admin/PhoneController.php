<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class PhoneController extends Controller{
    public function dashboard()
    {
        // Lấy danh sách danh mục cùng với số lượng sản phẩm (điện thoại)
        $listUser = User::all();
        $categories = Category::withCount('phones')->get();
        $listPhone = Phone::orderByDesc('id')->paginate();
        $totalPhone = Phone::sum('stock');
        $totalCategories = Category::count();

        return view('admin.phone.dashboard', compact('listPhone', 'totalPhone', 'totalCategories', 'categories','listUser'));
    }
    public function create()
    {
        $Categories = Category::all();
        return view('admin.phone.create', compact('Categories'));
    }
    public function store(Request $request) {
        // Lấy dữ liệu
        $data = $request->except('image');
        $data['image'] = '';

        // Kiểm tra có tệp ảnh
        if ($request->hasFile('image')) {
            // Lưu ảnh vào thư mục posters
            $path_image = $request->file('image')->store('images', 'public'); // Lưu vào storage/app/public/posters
            $data['image'] = $path_image; // Lưu đường dẫn ảnh
        }

        // Lưu dữ liệu vào cơ sở dữ liệu
        Phone::create($data);

        return redirect()->route('admin.phone.dashboard')->with('message', 'Thêm dữ liệu thành công');
    }


    public function destroy(Phone $phone){
        $phone->delete();
        return redirect()->route('admin.phone.dashboard')->with('message','xoa du lieu thanh cong');


    }

    public function edit(Phone $phone){
        $Categories = Category::all();
        return view('admin.phone.edit',compact('Categories','phone'));
    }

    public function update(Request $request, Phone $phone)
{
    $data = $request->except('image');
    $data['image'] = asset('storage/' . $phone->image) ; // Keep existing poster unless a new one is uploaded
    
  
    
    if ($request->hasFile('image')) {
        // Lưu ảnh vào thư mục posters
        $path_image = $request->file('image')->store('images', 'public'); // Lưu vào storage/app/public/posters
        $data['image'] = $path_image; // Lưu đường dẫn ảnh
    }

    $phone->update($data);
        return redirect()->route('admin.phone.dashboard')->with('message', 'Cập nhật dữ liệu thành công');
    }
    

}