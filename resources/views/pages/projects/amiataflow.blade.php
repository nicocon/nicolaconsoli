@extends('layouts.app')

@section('title', 'AmiataFlow - Nicola Consoli')

@section('content')

<section class="page-hero project-detail-hero">
    <div class="container">
        <a href="{{ route('projects') }}" class="back-link">← Torna ai progetti</a>

        <p class="eyebrow">Gestionale aziendale</p>
        <h1>AmiataFlow</h1>
        <p>
            Un gestionale sviluppato per organizzare processi aziendali, operatori,
            materiali, ordini, documenti e flussi di lavoro reali.
        </p>

        <div class="project-detail-meta">
            <span>PHP</span>
            <span>MySQL</span>
            <span>JavaScript</span>
            <span>Bootstrap</span>
            <span>In sviluppo attivo</span>
        </div>
    </div>
</section>

<section class="section project-detail-section">
    <div class="container project-detail-grid">

        <div class="project-detail-main">

            <div class="detail-block">
                <p class="eyebrow">Il problema</p>
                <h2>Organizzare tanti flussi diversi in un unico sistema.</h2>
                <p>
                    AmiataFlow nasce dall’esigenza di gestire attività aziendali complesse:
                    operatori, lavori giornalieri, materiali, magazzini, ordini, documenti,
                    manutenzioni e report.
                </p>
                <p>
                    Il vero obiettivo è ridurre confusione, passaggi manuali e perdita di informazioni,
                    trasformando procedure quotidiane in strumenti digitali chiari.
                </p>
            </div>

            <div class="detail-block">
                <p class="eyebrow">La soluzione</p>
                <h2>Un gestionale modulare, pratico e costruito sui bisogni reali.</h2>
                <p>
                    Il progetto è composto da vari moduli collegati tra loro, ognuno pensato
                    per risolvere un’esigenza specifica. La parte più interessante è che ogni
                    funzionalità nasce da un caso reale e viene migliorata man mano che viene usata.
                </p>
            </div>

            <div class="detail-block">
                <p class="eyebrow">Funzionalità</p>
                <h2>Cosa gestisce AmiataFlow</h2>

                <div class="detail-feature-grid">
                    <div>
                        <strong>Operatori & lavori</strong>
                        <p>Assegnazione lavori, ore, stato attività e organizzazione giornaliera.</p>
                    </div>

                    <div>
                        <strong>Magazzino & materiali</strong>
                        <p>Movimenti, inventario, scarichi, carichi e controllo disponibilità.</p>
                    </div>

                    <div>
                        <strong>Ordini & documenti</strong>
                        <p>Gestione ordini, PDF, DDT, documenti collegati e storico.</p>
                    </div>

                    <div>
                        <strong>Report & controlli</strong>
                        <p>Query, filtri, tabelle, esportazioni e viste operative.</p>
                    </div>
                </div>
            </div>

            <div class="detail-block">
                <p class="eyebrow">Cosa sto imparando</p>
                <h2>Un progetto che mi fa crescere ogni giorno.</h2>
                <p>
                    AmiataFlow mi permette di lavorare su backend, database, frontend,
                    logiche operative, performance, sicurezza dei dati e usabilità.
                </p>
                <p>
                    È un progetto che mi insegna una cosa fondamentale: il codice migliore
                    non è quello più spettacolare, ma quello che aiuta davvero le persone
                    a lavorare meglio.
                </p>
            </div>

        </div>

        <aside class="project-detail-side">
            <div class="project-side-card">
                <div class="project-big-icon">AF</div>
                <h3>AmiataFlow</h3>
                <p>Gestionale aziendale in sviluppo attivo.</p>

                <div class="side-progress">
                    <div class="side-progress-top">
                        <span>Avanzamento</span>
                        <strong>85%</strong>
                    </div>
                    <div class="progress-track">
                        <div class="progress-fill progress-green" style="width: 85%;"></div>
                    </div>
                </div>
            </div>

            <div class="project-side-card">
                <h3>Stack</h3>
                <div class="tech-list">
                    <span>PHP</span>
                    <span>MySQL</span>
                    <span>JS</span>
                    <span>jQuery</span>
                    <span>Bootstrap</span>
                    <span>CSS</span>
                </div>
            </div>

            <div class="project-side-card">
                <h3>Stato</h3>
                <p>
                    Progetto attivo, in continuo sviluppo e ampliamento con nuovi moduli.
                </p>
            </div>
        </aside>

    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cta-box">
            <p class="eyebrow">Altri progetti</p>
            <h2>Vuoi vedere anche gli altri lavori?</h2>
            <p>
                Torna alla pagina Progetti per scoprire NohaVolley e nicolaconsoli.it.
            </p>

            <div class="hero-actions">
                <a href="{{ route('projects') }}" class="btn btn-primary">Tutti i progetti</a>
                <a href="{{ route('projects.nohavolley') }}" class="btn btn-secondary">Vai a NohaVolley</a>
            </div>
        </div>
    </div>
</section>

@endsection