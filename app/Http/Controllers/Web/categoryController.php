<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Repositories\CategoriesRepositoryInterface;
use Illuminate\Http\Request;
use Str;

class categoryController extends Controller
{   
    protected   $categoryRepository;
    public function __construct(CategoriesRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    
    //
    public function views(Request $request){
        return view("member.category");
    }
    // creat category
    public function store(Request $request){
        if(!$request->has("slug")){
            $request->merge(["slug"=> Str::slug($request->input('name'))]);
        
        $find=categories::find(1);
        dd($find);
           
        $request->validate([
            'name'=> 'required|unique:categories|max:255',
            'slug' => [
                'required',
                'unique:categories',
                'max:255',
                'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/i',]

            ]);
        $this->categoryRepository->create($request->all());
        return redirect()->back()->with('success','tao category thanh cong');
    }

}
    public function editForm(Request $request,$id){


        return view('member.editCategory');
    }
    public function update(Request $request, $id){
        dd($request->all(),$id);
        if(!$request->has("slug")){
            $request->merge(["slug"=> Str::slug($request->input('name'))]);
        $request->validate([
            'name'=> 'required|unique:categories|max:255',
            'slug' => [
                'required',
                'unique:categories',
                'max:255',
                'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/i',]

            ]);
        $this->categoryRepository->update($id, $request->all());
        return redirect()->route('member.category')->with('success','cap nhat thanh cong');


    }
}
    public function destroy($id){
        $this->categoryRepository->delete($id);
        return redirect()->back()->with('success','xoa thanh cong');
    }


}
