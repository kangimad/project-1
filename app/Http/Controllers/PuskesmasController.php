<?php

namespace App\Http\Controllers;

use App\Models\Puskesmas;
use Illuminate\Http\Request;

class PuskesmasController extends Controller
{
    public function index() {
        return view('data-puskesmas', [
                    'active' => 'puskesmas',
                    'title' => 'Puskesmas',
                    'puskesmas' => Puskesmas::filter(request(['search']))->paginate(15)
                ]);
    }
}
