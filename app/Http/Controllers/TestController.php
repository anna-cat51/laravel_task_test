<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        // Eloquent
        $values = Test::all();

        $count = Test::count();

        $first = Test::findOrFail(1);

        $whereIII = Test::where('text', '=', 'iii')->get();
        // クエリビルダ
        $queryBuilder = DB::table('tests')->where('text', '=', 'iii')
        ->select('id', 'text')
        ->get();

        dd($values, $count, $first, $whereIII, $queryBuilder);

        //dd($values);

        return view('tests.test', compact('values'));
    }
}
