<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cauthu extends Model
{
    //

    use Notifiable;
    protected $table ="cauthu";
    public $timestamp = true;

    // nhuwngx cot dc insert update edit
    protected $fillble = [
        'ten_cau_thu', 'tuoi','quoc_tich', 'vi_tri', 'luong'
    ];
}
