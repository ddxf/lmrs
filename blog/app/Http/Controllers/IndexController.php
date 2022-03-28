<?php


namespace App\Http\Controllers;


class IndexController extends Controller
{

    public function index()
    {
        return view('index.index', ['data' => '拂晓右耳']);
    }

    public function article()
    {

    }
}
