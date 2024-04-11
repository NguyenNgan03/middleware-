<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct(Request $request)
    {
        if ($request->is('categories')) {
            echo '<h3>xin chào unicode</h3>';
        }
    }
    // hiển thị danh sách chuyên mục
    public function index(Request $request)
    {
        // if (isset($_GET['id'])){
        //     echo $_GET['id'];
        // }
        // $dataRequest = $request->all();
        // dd($dataRequest);
        // $path = $request->path();
        // echo $path;
        // $url = $request->url();
        // $fullUrl = $request->fullUrl();
        // $method = $request->method();
        // $ip = $request->ip();
        // echo 'ip'.$ip;
        // $server = $request ->server();
        // dd($server);
        // $header = $request->header();
        // dd($header['']);
        // $id = $request->input('id');
        // $input= $request->input();
        // dd($input);

        $id = $request->input('id.1.name');
        dd($id);
        return view('clients/categories/list');
    }

    public function getCategory($id)
    {
        return view('clients/categories/edit');
    }

    public function updateCategory($id)
    {
        return 'Submit sửa chuyên mục' . $id;
    }
    public function handleAddCategory(Request $request)
    {
        $allData = $request->all();

        dd($allData);
    }
    public function addCategory()
    {
        return view('clients/categories/add');
    }

    public function deleteCategory($id)
    {
    }
}
