<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use App\Models\LegendaNutricional;
use App\Models\Refeicao;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
    public function index()
    {
        $alimentos = Alimento::all();

        $dataHoje = date('Y/m/d');
        $refeicoesDiarias = Refeicao::where([
            ['user_id', '=', Auth::user()->id],
            ['dataHora', '=', $dataHoje],
        ]);

        $seteDias = date('Y/m/d', strtotime(date('Y-m-d') . '-7days'));
        $refeicoesSemanais = Refeicao::where('user_id', '=', Auth::user()->id)->whereBetween('dataHora', [$seteDias, $dataHoje]);

        $trintaDias = date('Y/m/d', strtotime(date('Y-m-d') . '-30days'));
        $refeicoesMensais = Refeicao::where('user_id', '=', Auth::user()->id)->whereBetween('dataHora', [$trintaDias, $dataHoje]);

        $legendasNutricionais = LegendaNutricional::all();
        $users = User::all();

        // return view('home');
        return view('home', ['alimentos' => $alimentos, 'refeicoesDiarias' => $refeicoesDiarias, 'refeicoesSemanais' => $refeicoesSemanais, 'refeicoesMensais' => $refeicoesMensais, 'legendasNutricionais' => $legendasNutricionais, 'users' => $users]);
    }
}
