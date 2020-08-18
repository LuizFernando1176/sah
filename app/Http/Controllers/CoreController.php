<?php

namespace App\Http\Controllers;

use App\Cursos;
use App\Filmes;
use App\Musicas;
use App\Programas;
use App\Series;
use function redirect;
use function view;

class CoreController extends Controller {

    //todos index 

    function indexFilme() {
        $filmes = Filmes::all();

        return view('core.indexFilme', compact('filmes'));
    }

    function indexCurso() {
        $cursos = Cursos::all();

        return view('core.indexCurso', compact('cursos'));
    }

    function indexSeries() {
        $series = Series::all();

        return view('core.indexSerie', compact('series'));
    }

    function indexMusicas() {
        $musicas = Musicas::all();

        return view('core.indexMusica', compact('musicas'));
    }

    function indexProgramas() {
        $programas = Programas::all();

        return view('core.indexPrograma', compact('programas'));
    }

    //fim da index

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

    function adicionarSeries() {

        $series = new Series();

        $series->nome = filter_input(INPUT_POST, 'nome');
        $series->ano_curso = filter_input(INPUT_POST, 'ano_filme');
        $series->categoria = filter_input(INPUT_POST, 'categoria');
        $series->data = filter_input(INPUT_POST, 'data');

        $series->save();

        return redirect('/sistema/series');
    }

    function adicionarMusicas() {

        $musicas = new Musicas();

        $musicas->nome = filter_input(INPUT_POST, 'nome');
        $musicas->ano_curso = filter_input(INPUT_POST, 'ano_filme');
        $musicas->categoria = filter_input(INPUT_POST, 'categoria');
        $musicas->data = filter_input(INPUT_POST, 'data');

        $musicas->save();

        return redirect('/sistema/musicas');
    }

    function adicionarProgramas() {

        $programas = new Programas();

        $programas->nome = filter_input(INPUT_POST, 'nome');
        $programas->ano_curso = filter_input(INPUT_POST, 'ano_filme');
        $programas->categoria = filter_input(INPUT_POST, 'categoria');
        $programas->data = filter_input(INPUT_POST, 'data');

        $programas->save();

        return redirect('/sistema/programas');
    }

}
