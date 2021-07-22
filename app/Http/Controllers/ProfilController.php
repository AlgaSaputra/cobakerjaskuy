<?php

namespace App\Http\Controllers;
use App\Models\PenggunaModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $user = PenggunaModel::where('id', Auth::user()->id)->first();
        return view('user.profil', compact('user'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            

        ]);
        $user = PenggunaModel::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;

        $user->update();
        return redirect('profil');
    }
}
