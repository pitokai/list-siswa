<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.user.index', [
            'siswa' => Siswa::where('user_id', auth()->user()->id)->get()
        ]);
    }
}
