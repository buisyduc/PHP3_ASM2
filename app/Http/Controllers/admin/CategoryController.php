<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Phone;
use Illuminate\Http\Request;

class CategoryController extends Controller{
    public function index(){
        $listCategorys = Category::all();
        return view('admin.category.categorymanagement',compact('listCategorys'));
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(Request $request) {
        // Xác thực dữ liệu
        $request->validate([
            'name' => 'required|string|max:255', // Kiểm tra trường name
        ]);
    
        // Lưu dữ liệu vào cơ sở dữ liệu
        Category::create([
            'name' => $request->name,
        ]);
    
        // Chuyển hướng với thông báo thành công
        return redirect()->route('admin.category.categorymanagement')
                         ->with('message', 'Thêm dữ liệu thành công');
    }
    public function destroy(Category $category) {
        // Xóa tất cả bản ghi trong bảng phones liên quan đến danh mục này
        Phone::where('category_id', $category->id)->delete();
    
        // Sau đó xóa danh mục
        $category->delete();
    
        return redirect()->route('admin.category.categorymanagement')
                         ->with('message', 'Xóa dữ liệu thành công');
    }
    
    
}