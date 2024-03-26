<?php

namespace App\Http\Controllers;

use App\Models\RefJurusanModel;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    function index(){

        $data = array(
            'jurusans' => RefJurusanModel::all()
        );

        return view('jurusan.list',$data);
    }
}
