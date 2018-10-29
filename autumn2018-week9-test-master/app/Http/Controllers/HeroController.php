<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;

class HeroController extends Controller
{
    //
    public function show($hero_slug)
    {
        $hero = \App\Hero::where('slug', $hero_slug)->first();

        if (!$hero) {
            abort(404, 'Hero not found');
        }

        $view = view('hero/show');
        $view->hero = $hero;
        return $view;
    }

    public function index()
    {
        $heroes = Hero::all();
        return view('hero.index',compact('heroes'));
    }
    public function store()
    {
        Hero::create(request(['subject','description']));
        return redirect('/hero');
    }

    public function edit(Hero $hero)
    {
        return view('hero.edit',compact('hero'));
    }
    public function update(Hero $hero)
    {
        $hero->update(request(['subject','description']));
        return redirect('/hero');
    }
}
