<?php

namespace App\Traits;

use App\Models\Subject;
use illuminate\Http\Request;

trait HelperTrait
{
    public function processSubjects(request $request) {

        $Subjects = Subject::all()

 //          $Subjects = Subject::orderBy('created_at', 'desc')->get();
//
 //          $Subjects = Subject::orderBy('created_at', 'desc')->paginate(10)

        return response()->json(['success'], status: 200);

    }
} 