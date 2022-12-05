<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use App\Models\LegendaNutricional;
use App\Models\Refeicao;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $refeicoesDiarias = DB::table('refeicoes')
            ->select('id', 'titulo', 'dataHora', 'user_id')
            ->where('user_id', '=', Auth::user()->id)
            ->whereDate('dataHora', '=', $dataHoje)
            ->get();

        $dataHoje = date('Y/m/d');
        $seteDias = date('Y/m/d', strtotime(date('Y-m-d') . '-7days'));
        $refeicoesSemanais = DB::table('refeicoes')
            ->select('id', 'titulo', 'dataHora', 'user_id')
            ->where('user_id', '=', Auth::user()->id)
            ->whereDate('dataHora', '<=', $dataHoje)
            ->whereDate('dataHora', '>=', $seteDias)
            ->get();

        $dataHoje = date('Y/m/d');
        $trintaDias = date('Y/m/d', strtotime(date('Y-m-d') . '-30days'));
        $refeicoesMensais = DB::table('refeicoes')
            ->select('id', 'titulo', 'dataHora', 'user_id')
            ->where('user_id', '=', Auth::user()->id)
            ->whereDate('dataHora', '<=', $dataHoje)
            ->whereDate('dataHora', '>=', $trintaDias)
            ->get();

        $legendasNutricionais = LegendaNutricional::all();
        $users = User::all();

        // return view('home');
        return view('home', ['alimentos' => $alimentos, 'refeicoesDiarias' => $refeicoesDiarias, 'refeicoesSemanais' => $refeicoesSemanais, 'refeicoesMensais' => $refeicoesMensais, 'legendasNutricionais' => $legendasNutricionais, 'users' => $users]);
    }
}
