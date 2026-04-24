@extends('layouts.app')

@section('title', 'nicolaconsoli.it - Nicola Consoli')

@section('content')

<section class="page-hero project-detail-hero">
    <div class="container">
        <a href="{{ route('projects') }}" class="back-link">← Torna ai progetti</a>

        <p class="eyebrow">Sito personale</p>
        <h1>nicolaconsoli.it</h1>
        <p>
            Il mio sito personale: portfolio, spazio creativo, laboratorio digitale
            e punto di partenza per raccontare quello che sto costruendo.
        </p>

        <div class="project-detail-meta">
            <span>Laravel</span>
            <span>Blade</span>
            <span>CSS</span>
            <span>JavaScript</span>
            <span>Work in progress</span>
        </div>
    </div>
</section>

<section class="section project-detail-section">
    <div class="container project-detail-grid">

        <div class="project-detail-main">

            <div class="detail-block">
                <p class="eyebrow">Perché nasce</p>
                <h2>Un sito personale che non sia solo una pagina statica.</h2>
                <p>
                    nicolaconsoli.it nasce come spazio personale online, ma con l’idea
                    di essere qualcosa di più del classico sito vetrina.
                </p>
                <p>
                    Voglio usarlo per raccontare chi sono, cosa faccio, quali progetti
                    porto avanti e per sperimentare piccole interazioni, easter egg
                    e sezioni creative.
                </p>
            </div>

            <div class="detail-block">
                <p class="eyebrow">Direzione</p>
                <h2>Portfolio, identità digitale e playground creativo.</h2>
                <p>
                    Il sito deve essere professionale, ma anche personale. Deve parlare
                    di sviluppo, progetti e competenze, ma anche avere dettagli che lo rendano
                    riconoscibile e diverso dal solito.
                </p>
            </div>

            <div class="detail-block">
                <p class="eyebrow">Funzionalità</p>
                <h2>Cosa contiene il sito</h2>

                <div class="detail-feature-grid">
                    <div>
                        <strong>Home</strong>
                        <p>Presentazione, avatar, progetti, stack, progressi ed easter egg.</p>
                    </div>

                    <div>
                        <strong>Chi sono</strong>
                        <p>Profilo personale, competenze, valori e percorso.</p>
                    </div>

                    <div>
                        <strong>Progetti</strong>
                        <p>Portfolio, schede progetto e descrizione dei lavori principali.</p>
                    </div>

                    <div>
                        <strong>Playground</strong>
                        <p>Quiz, terminale interattivo, curiosità random e dettagli nascosti.</p>
                    </div>
                </div>
            </div>

            <div class="detail-block">
                <p class="eyebrow">Cosa rappresenta</p>
                <h2>Un progetto che cresce insieme a me.</h2>
                <p>
                    Questo sito è un laboratorio. Ogni sezione può migliorare, cambiare,
                    espandersi e diventare un modo per mostrare non solo cosa so fare,
                    ma anche come penso e come costruisco.
                </p>
            </div>

        </div>

        <aside class="project-detail-side">
            <div class="project-side-card">
                <div class="project-big-icon">NC</div>
                <h3>nicolaconsoli.it</h3>
                <p>Sito personale e laboratorio creativo.</p>

                <div class="side-progress">
                    <div class="side-progress-top">
                        <span>Avanzamento</span>
                        <strong>45%</strong>
                    </div>
                    <div class="progress-track">
                        <div class="progress-fill progress-blue" style="width: 45%;"></div>
                    </div>
                </div>
            </div>

            <div class="project-side-card">
                <h3>Stack</h3>
                <div class="tech-list">
                    <span>Laravel</span>
                    <span>Blade</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                    <span>Responsive</span>
                </div>
            </div>

            <div class="project-side-card">
                <h3>Stato</h3>
                <p>
                    Work in progress, con nuove sezioni, animazioni ed easter egg in arrivo.
                </p>
            </div>
        </aside>

    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cta-box">
            <p class="eyebrow">Continua a esplorare</p>
            <h2>Vuoi scoprire la parte più interattiva?</h2>
            <p>
                Vai nel Playground per provare terminale, quiz, curiosità random
                e modalità segrete.
            </p>

            <div class="hero-actions">
                <a href="{{ route('playground') }}" class="btn btn-primary">Vai al Playground</a>
                <a href="{{ route('projects') }}" class="btn btn-secondary">Tutti i progetti</a>
            </div>
        </div>
    </div>
</section>

@endsection