<?php

namespace App\Http\Controllers;

use App\Rule;
use Illuminate\Http\Request;

class RulesController extends Controller
{
    public function getRules(){
        return Rule::all();
    }
}
