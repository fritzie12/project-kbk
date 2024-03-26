<?php

namespace App\Http\Controllers;

use App\Models\RefDosenModel;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    function index(){

        $data = array(
            'dosens' => RefDosenModel::all()
        );

        return view('dosen.list',$data);
    }
}
