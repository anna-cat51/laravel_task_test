<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        // Eloquent
        $values = Test::all();

        $count = Test::count();

        $first = Test::findOrFail(1);

        $whereIII = Test::where('text', '=', 'iii')->get();

        dd($values, $count, $first, $whereIII);

        //dd($values);

        return view('tests.test', compact('values'));
    }
}
