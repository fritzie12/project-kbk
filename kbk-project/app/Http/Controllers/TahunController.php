<?php

namespace App\Http\Controllers;

use App\Models\RefTahunModel;
use Illuminate\Http\Request;

class TahunController extends Controller
{
    function index(){

        $data = array(
            'tahuns' => RefTahunModel::all()
        );

        return view('tahun.list',$data);
    }
}
