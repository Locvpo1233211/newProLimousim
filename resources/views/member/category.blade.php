@extends('layouts.master')
@section('contents')
<!-- Main Content -->
<main class="container mt-5">
<div class="container mt-5">
    <h1>Quản lý Danh mục</h1>
    
    <!-- Form thêm danh mục mới -->
    <form action="{{route('member.storeCategory')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Tên Danh mục:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>

    <!-- Danh sách các danh mục -->
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Danh mục</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            
                <tr>
                    <td>#x</td>
                    <td>#y</td>
                    <td>
                        <a href="{{route('member.editFormCategory',['id'=> $category->id])}}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{route('member.deleteCategory',['id'=>$category->id])}}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    </table>
</div>


</main>
</section>
@stop



