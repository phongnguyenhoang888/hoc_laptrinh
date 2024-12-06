<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
class EditController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function edits($id)
     {
         // Lấy thông tin cầu thủ theo ID
         $value = DB::table('cauthu')->where('id', $id)->first();
        
         // Kiểm tra nếu không tìm thấy cầu thủ
        
     
         // Truyền dữ liệu sang view
         return view('trangEdit', compact('value'));
     }
     
     public function updates(Request $request)
     {
     
     }
     
    public function index()
    {
        //
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
 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
