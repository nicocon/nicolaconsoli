@extends('layouts.app')

@section('title', 'Progetti - Nicola Consoli')

@section('content')

<section class="page-hero">
    <div class="container">
        <h1>Progetti</h1>
        <p>
            Qui raccolgo alcuni dei progetti a cui lavoro o che rappresentano il mio percorso.
        </p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="projects-grid">

            <article class="project-card">
                <span class="project-label">Gestionale</span>
                <h2>AmiataFlow</h2>
                <p>
                    Sistema gestionale sviluppato per organizzare flussi di lavoro,
                    operatori, materiali, ordini e processi aziendali.
                </p>
            </article>

            <article class="project-card">
                <span class="project-label">App / Sport</span>
                <h2>NohaVolley</h2>
                <p>
                    Progetto digitale dedicato alla pallavolo, con contenuti, squadre,
                    news e funzionalità pensate per società e tifosi.
                </p>
            </article>

            <article class="project-card">
                <span class="project-label">Personale</span>
                <h2>nicolaconsoli.it</h2>
                <p>
                    Il mio sito personale, creato per raccontare chi sono,
                    cosa faccio e sperimentare nuove idee.
                </p>
            </article>

        </div>
    </div>
</section>

@endsection