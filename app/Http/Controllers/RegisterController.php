<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Get_thongtin()
    {
        //
        return view('register');
    }

    public function Post_thongtin(Request $request){
        

        $data =$request->all();
        dd($data);
    }

    public function text()
    {
        $bien_a = 'danh sach cau thu ';
        $mang_cau_thu =[
            'nguyen van a, 2003, 22',
            'nguyen van b, 2002, 21',
        ];

        $mang = [
            ["name" => "nguyen van a",
            "email" => "â@gmail.com",
            "sdt" => "4444444"],
        
            ["name" => "nguyen van b",
            "email" => "â@gmail.com",
            "sdt" => "4444444"],
            
            ["name" => "nguyen van c",
            "email" => "â@gmail.com",
            "sdt" => "4444444"],
        ];

        $x= 0;
        for($i=0; $i<=100; $i++){
            $x = $i+ $x;
        }

        return view('trang_register', compact('bien_a', 'mang_cau_thu', 'mang', 'x'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
