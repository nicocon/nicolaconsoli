@extends('layouts.app')

@section('title', 'Playground - Nicola Consoli')

@section('content')

<section class="page-hero playground-hero">
    <div class="container">
        <p class="eyebrow">Playground</p>
        <h1>Una pagina più libera, curiosa e interattiva.</h1>
        <p>
            Qui raccolgo piccoli esperimenti, idee leggere, curiosità random e dettagli nascosti.
            Non tutto deve essere serio: anche un sito personale può avere un po’ di personalità.
        </p>
    </div>
</section>

<section class="section playground-section">
    <div class="container playground-grid">

        <article class="play-card play-card-large">
            <div class="play-card-header">
                <span class="play-icon">?</span>
                <div>
                    <p class="eyebrow">Random</p>
                    <h2>Curiosità casuale</h2>
                </div>
            </div>

            <p id="randomFact" class="random-fact">
                Clicca il pulsante qui sotto per scoprire una curiosità.
            </p>

            <button class="btn btn-primary play-btn" id="factButton" type="button">
                Genera curiosità
            </button>
        </article>

        <article class="play-card">
            <div class="play-card-header">
                <span class="play-icon">Q</span>
                <div>
                    <p class="eyebrow">Quiz</p>
                    <h2>Quanto conosci Nicola?</h2>
                </div>
            </div>

            <div class="quiz-box" id="quizBox">
                <p class="quiz-question">
                    Qual è una delle tecnologie principali che Nicola usa nello sviluppo web?
                </p>

                <div class="quiz-options">
                    <button type="button" class="quiz-option" data-correct="false">
                        Photoshop
                    </button>

                    <button type="button" class="quiz-option" data-correct="true">
                        PHP e Laravel
                    </button>

                    <button type="button" class="quiz-option" data-correct="false">
                        AutoCAD
                    </button>
                </div>

                <p class="quiz-result" id="quizResult"></p>
            </div>
        </article>

        <article class="play-card terminal-card interactive-terminal-card">
            <div class="terminal-top">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="terminal-body">
                <div class="terminal-output" id="terminalOutput">
                    <p><span>$</span> welcome</p>
                    <p>Benvenuto nel mini terminale di nicolaconsoli.it</p>
                    <p>Scrivi <strong>help</strong> per vedere i comandi disponibili.</p>
                </div>

                <div class="terminal-input-row">
                    <span>$</span>
                    <input
                        type="text"
                        id="terminalInput"
                        autocomplete="off"
                        spellcheck="false"
                        placeholder="scrivi un comando..."
                    >
                </div>
            </div>
        </article>

    </div>
</section>

<section class="section playground-extra-section">
    <div class="container">

        <div class="section-heading">
            <p class="eyebrow">Dettagli nascosti</p>
            <h2>Piccole cose che renderanno il sito più personale</h2>
            <p>
                Questa pagina potrà crescere nel tempo con mini giochi, easter egg,
                animazioni e contenuti curiosi.
            </p>
        </div>

        <div class="ideas-grid">

            <div class="idea-card">
                <span>01</span>
                <h3>Quiz evoluto</h3>
                <p>
                    Più domande, punteggio finale e magari un messaggio personalizzato
                    in base al risultato.
                </p>
            </div>

            <div class="idea-card">
                <span>02</span>
                <h3>Modalità segreta</h3>
                <p>
                    Un comando nascosto o una combinazione di tasti per sbloccare
                    un tema alternativo del sito.
                </p>
            </div>

            <div class="idea-card">
                <span>03</span>
                <h3>Timeline interattiva</h3>
                <p>
                    Una piccola linea del tempo con tap/click sui momenti più importanti
                    del tuo percorso.
                </p>
            </div>

        </div>

    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cta-box">
            <p class="eyebrow">Work in progress</p>
            <h2>Questo spazio crescerà insieme al sito.</h2>
            <p>
                L’idea è aggiungere nel tempo piccoli esperimenti e dettagli che rendano
                nicolaconsoli.it riconoscibile e diverso dal solito portfolio.
            </p>

            <div class="hero-actions">
                <a href="{{ route('projects') }}" class="btn btn-primary">Torna ai progetti</a>
                <a href="{{ route('contacts') }}" class="btn btn-secondary">Scrivimi</a>
            </div>
        </div>
    </div>
</section>

@endsection