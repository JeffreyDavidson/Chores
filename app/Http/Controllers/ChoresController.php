<?php

namespace App\Http\Controllers;

use App\Chore;

class ChoresController extends Controller
{
    public function show($id)
    {
        $chore = Chore::findOrFail($id);

        return view('chores.show', ['chore' => $chore]);
    }
}
