<?php

namespace App\Http\Controllers;

use App\DeptModel;
use Illuminate\Http\Request;

class DeptController extends Controller
{
    //

    public function index() {
        $staffdiretory = DeptModel::all();
        return view('layouts/list',compact('staffdiretory'));

    }

    public function showDept($id){
        $staffdiretory= DeptModel::find($id);
        return view('layouts/list2')->with('staffdiretory',$staffdiretory);
    }


    public function showDetails($id){
        $staffDetails= DeptModel::find($id);
        return view('layouts/list3')->with('staffdiretory',$staffDetails);
    }

}

