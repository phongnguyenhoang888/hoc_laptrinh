<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\cauthu; // phuong thuc goi model 
class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function get_data(){
        // lay data
        $data = cauthu::all();
       // $data_cauthu  = DB::table('cauthu')->get();
        //$data_cauthu  =$data_cauthu  ->toArray();
        
        // trả về view
        return view('index_cauthu', compact('data'));
     }
    public function get_tt()
    {
        return view('trangAdd');
    }
    public  function post_tt(Request $request){
            $dulieu_add = $request ->all();
            $name = $request->input('name');
            $tuoi = $request->input('tuoi');
            $vitri = $request->input('vi_tri');
            $quoc_tich = $request->input('quoc_tich');
            $luong =$request->input('luong');



            DB::table('cauthu')->insert([
                'ten_cau_thu' => $name,
                'tuoi' => $tuoi,
                'vi_tri' => $vitri,
                'quoc_tich' => $quoc_tich,
                'luong' => $luong,
               
            ]);
            return view('/index_cauthu');

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
