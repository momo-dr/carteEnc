<?php
    public function index()
    {
        //
        $carteEtudiant = CarteEtudiant::all();
        return view('pages.index', compact('carteEtudiant'));
    }
