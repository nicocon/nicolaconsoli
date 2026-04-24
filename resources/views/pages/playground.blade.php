@extends('layouts.app')

@section('title', 'Playground - Nicola Consoli')

@section('content')

<section class="page-hero">
    <div class="container">
        <h1>Playground</h1>
        <p>
            Una sezione più libera, dove aggiungerò esperimenti, curiosità,
            mini giochi e contenuti interattivi.
        </p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cards-grid">

            <div class="card">
                <h3>Quiz su di me</h3>
                <p>Un piccolo quiz per scoprire qualcosa in più sul mio percorso.</p>
            </div>

            <div class="card">
                <h3>Curiosità random</h3>
                <p>Una frase o curiosità casuale ogni volta che entri nella pagina.</p>
            </div>

            <div class="card">
                <h3>Easter egg</h3>
                <p>Piccoli dettagli nascosti nel sito, da scoprire navigando.</p>
            </div>

        </div>
    </div>
</section>

@endsection