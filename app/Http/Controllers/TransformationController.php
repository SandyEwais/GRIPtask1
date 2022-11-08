<?php

namespace App\Http\Controllers;

use App\Models\Transformation;
use Illuminate\Http\Request;

class TransformationController extends Controller
{
    public function viewTransformationsHistory(){
        return view('transformations-history',[
            'transformations' => Transformation::paginate(10)
        ]);
    }
}
