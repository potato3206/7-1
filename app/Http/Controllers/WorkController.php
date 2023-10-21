<?php

// app/Http/Controllers/WorkController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;

class WorkController extends Controller
{
    public function index(Work $work)
    {

        return view('works.shift')->with(['works'=> $work->get()]);
    }

    // その他のアクションやロジックを追加
}
