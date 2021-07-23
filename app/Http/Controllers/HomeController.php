<?php

namespace App\Http\Controllers;

use App\Models\Conten;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $conten = Conten::where('pekerjaan', 'LIKE', '%'.$keyword.'%')
        ->orwhere('nama_perusahaan', 'LIKE', '%'.$keyword.'%')
        ->paginate(100);
        $conten->appends($request->all());
        return view('user.content', compact('conten'));
    }

    // public function search(Request $request)
    // {
    //     $keyword = $request->search;
    //     $users = User::where('name', 'like', "%" . $keyword . "%")->paginate(5);
    //     return view('user.content', compact('conten'));
    // }
}