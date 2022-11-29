<?php

namespace App\Http\Controllers;

use App\Models\InformacaoNutricional;
use App\Http\Requests\InformacaoNutricionalRequest;
use App\Models\Alimento;
use App\Models\LegendaNutricional;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{
    public function relatorio()
    {
        $users = User::all();
        $pdf = PDF::loadView('relatorios.users', ['users' => $users]);
        return $pdf->stream();
    }
}
