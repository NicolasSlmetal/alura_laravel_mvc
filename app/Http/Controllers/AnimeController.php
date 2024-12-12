<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function index()
    {
        $animes = Anime::query()->orderBy('anm_title')->get();

        return view("animes.index", )->with("animes", $animes)->with("title", "Animes");
    }

    public function create() {
        return view("animes.create")->with("title", "Inserir anime");
    }

    public function store(Request $request) {

        $anime = new Anime();

        $anime->title = $request->input("title");
        $anime->description = $request->input("description");
        $anime->episodesNumber = intval($request->input("episodesNumber"));
        $anime->launchDate = $request->input("launchDate");;

        $anime->save();

        return redirect("/animes");
    }
}
