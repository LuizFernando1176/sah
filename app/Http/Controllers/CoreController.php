<?php

namespace App\Http\Controllers;

use App\Cursos;
use App\Filmes;
use function redirect;
use function view;

class CoreController extends Controller {

    //

    function indexFilme() {
        $filmes = Filmes::all();

        return view('core.indexFilme', compact('filmes'));
    }

    function indexCurso() {
        $cursos = Cursos::all();
        
        return view('core.indexCurso', compact('cursos'));
    }

    function adicionarFilmes() {

        $filme = new Filmes();

        $filme->nome = filter_input(INPUT_POST, 'nome');
        $filme->ano_filme = filter_input(INPUT_POST, 'ano_filme');
        $filme->categoria = filter_input(INPUT_POST, 'categoria');
        $filme->data = filter_input(INPUT_POST, 'data');

        $filme->save();

        return redirect('/sistema/filmes');
    }

    function adicionarCursos() {

        $cursos = new Cursos();

        $cursos->nome = filter_input(INPUT_POST, 'nome');
        $cursos->ano_curso = filter_input(INPUT_POST, 'ano_filme');
        $cursos->categoria = filter_input(INPUT_POST, 'categoria');
        $cursos->data = filter_input(INPUT_POST, 'data');

        $cursos->save();

        return redirect('/sistema/cursos');
    }

}
