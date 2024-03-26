<?php

namespace App\Http\Controllers;

use App\Models\RefProdiModel;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    function index(){

        $data = array(
            'prodis' => RefProdiModel::all()
        );

        return view('prodi.list',$data);
    }
}
