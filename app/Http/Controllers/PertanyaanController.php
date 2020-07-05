<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function create(){
        return view('pertanyaan.form');
    }

    public function store(Request $request){
        $new_pertanyaan = PertanyaanModel::save($request->all());
        return redirect('/pertanyaan');
    }

    public function index(){
        $pertanyaan = PertanyaanModel::get_all();
        return view('pertanyaan.index');
    }
}
