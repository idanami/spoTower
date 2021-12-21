<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Question;
use Illuminate\Http\Request;

class AddQuestionController extends Controller
{
    public function addQuestion(Request $request) {
        $request->validate([
            'zip_code' => 'required|min:5',
            'age_option' => 'required|not_in:0',
        ]);

        $addQuestion = new Question();
        $addQuestion->zip_code = $request->zip_code;
        $addQuestion->age = $request->age_option;
        $addQuestion->married_option = $request->married_option === 'on' ? 1 : 0;
        $addQuestion->vehicles_option = $request->vehicles_option === 'on' ? 1 : 0;
        $addQuestion->insured_option = $request->insured_option === 'on' ? 1 : 0;
        $addQuestion->home_option = $request->home_option === 'on' ? 1 : 0;
        $addQuestion->save();

        $zipCode = $addQuestion->zip_code;

        $companies = Company::all();

        return view('answer',['companies'=> $companies, 'zipCode' => $zipCode]);
    }
}
