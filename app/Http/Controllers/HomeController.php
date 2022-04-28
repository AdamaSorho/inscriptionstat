<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Inscription;
use App\Models\Paiement;
use Illuminate\Contracts\Support\Renderable;
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
    public function index()
    {
        $paye = Paiement::get('inscription_id')->toArray();
//        $formation = Formation::where("libelle", "like" . "%" . "art oratoire" . "%")->first();
//        $formation = Formation::find(37);
        $formation = Formation::find(10);
        $candidatsPayes = Inscription::whereIn('id', $paye)
                                        ->where('formation_id', $formation->id)->get();
        $candidatsInscrits = Inscription::where('formation_id', $formation->id)->get();

        $inscriptionsPayes = $candidatsPayes->map(function ($inscription) {
            return ["cout" => $inscription->prixFormation->cout];
        });

        $montant = $inscriptionsPayes->sum("cout");
        $montantUvci = ($montant * 50) / 100;
        $montantFortic = ($montant * 25) / 100;
        $montantTransVie = ($montant * 25) / 100;
        $titre = "Liste des candidats ayant payé l'inscription à la certification ".$formation->libelle;

        return view('home', [
            "formation" => $formation,
            "candidatsPayes" => $candidatsPayes,
            "candidatsInscrits" => $candidatsInscrits,
            "montant" => $montant,
            "montantUvci" => $montantUvci,
            "montantFortic" => $montantFortic,
            "montantTransVie" => $montantTransVie,
            "titre" => $titre,
        ]);
    }

    public function inscrits(): Renderable
    {
        $formation = Formation::find(10);
        $candidatsInscrits = Inscription::where('formation_id', $formation->id)->get();
        $titre = "Liste des candidats inscrits à la certification ".$formation->libelle;

        return view("inscrits", [
            "candidatsInscrits" => $candidatsInscrits,
            "titre" => $titre,
        ]);
    }

    public function payes(): Renderable
    {
        $paye = Paiement::get('inscription_id')->toArray();
//        $formation = Formation::where("libelle", "like" . "%" . "art oratoire" . "%")->first();
//        $formation = Formation::find(37);
        $formation = Formation::find(10);
        $candidatsPayes = Inscription::whereIn('id', $paye)
                                        ->where('formation_id', $formation->id)->get();
        $titre = "Liste des candidats ayant payé l'inscription à la certification ".$formation->libelle;

        return view("payes", [
            "titre" => $titre,
            "candidatsPayes" => $candidatsPayes,
        ]);
    }
}
