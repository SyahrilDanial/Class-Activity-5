<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studController extends Controller
{
    public function studDetail(Request $request){

        $input = $request->all();
        $stud_detail = array();

        $stud_detail['name'] = $input['name'];
        $stud_detail['matricNo'] = $input['matricNo'];
        $stud_detail['gender'] = $input['gender'];
        $stud_detail['dob'] = $input['dob'];
        $stud_detail['city'] = $input['city'];
        $stud_detail['maritalstat'] = $input['maritalstat'];
        $stud_detail['religion'] = $input['religion'];
        $stud_detail['active'] = $input['active'];
        $stud_detail['year'] = $input['year'];
        $stud_detail['idno'] = $input['idno'];
        $stud_detail['email'] = $input['email'];
        return view('detail', compact('stud_detail'));

    }
}
