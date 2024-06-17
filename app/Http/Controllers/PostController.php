<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Post::all();
        return response()->json($tasks);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create(Request $request )
    // {
             
    // }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Tạo một bài đăng mới từ dữ liệu được gửi trong yêu cầu
       return  Post ::create([
            "id" => $request->input("id"),   
            "title" => $request->input("title"),
            "description" => $request->input("title"),
            "user_id" => $request->input("user_id"),
        ]);
    
        ;
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
