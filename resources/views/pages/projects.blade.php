@extends('layouts.app')

@section('title', 'Progetti - Nicola Consoli')

@section('content')

<section class="page-hero">
    <div class="container">
        <p class="eyebrow">Portfolio</p>
        <h1>Progetti</h1>
        <p>
            Qui raccolgo i progetti che rappresentano meglio il mio percorso:
            gestionali, app, siti web, strumenti digitali e idee in continua evoluzione.
        </p>
    </div>
</section>

<section class="section projects-showcase-section">
    <div class="container">

        <div class="project-showcase-card">
            <div class="project-showcase-content">
                <div class="project-topline">
                    <span class="project-label">Gestionale aziendale</span>
                    <span class="project-status active">In sviluppo attivo</span>
                </div>

                <h2>AmiataFlow</h2>

                <p>
                    AmiataFlow è un gestionale sviluppato per organizzare e semplificare
                    diversi processi aziendali: operatori, lavori, materiali, magazzini,
                    ordini, manutenzioni, documenti e flussi interni.
                </p>

                <p>
                    È uno dei progetti più completi su cui lavoro, perché unisce logica
                    backend, interfacce dinamiche, query MySQL, gestione documenti e
                    ottimizzazione dei flussi di lavoro reali.
                </p>

                <div class="tech-list">
                    <span>PHP</span>
                    <span>MySQL</span>
                    <span>JavaScript</span>
                    <span>jQuery</span>
                    <span>Bootstrap</span>
                    <span>CSS</span>
                </div>

                <div class="project-actions">
                    <a href="{{ route('projects.amiataflow') }}" class="btn btn-primary">
                        Apri scheda progetto
                    </a>
                </div>
            </div>

            <div class="project-showcase-side">
                <div class="project-big-icon">AF</div>

                <ul class="project-points">
                    <li>Gestione lavori e operatori</li>
                    <li>Moduli magazzino e materiali</li>
                    <li>Report, PDF e documenti</li>
                    <li>Interfacce operative mobile-friendly</li>
                </ul>
            </div>
        </div>

        <div class="project-showcase-card">
            <div class="project-showcase-content">
                <div class="project-topline">
                    <span class="project-label">Sport & community</span>
                    <span class="project-status progress">In evoluzione</span>
                </div>

                <h2>NohaVolley</h2>

                <p>
                    NohaVolley è un progetto digitale dedicato alla pallavolo, pensato per
                    raccontare squadre, partite, risultati, news e contenuti della società.
                </p>

                <p>
                    L’obiettivo è creare uno spazio moderno e coinvolgente per tifosi,
                    atleti, staff e appassionati, con funzionalità che possono crescere
                    nel tempo.
                </p>

                <div class="tech-list">
                    <span>Flutter</span>
                    <span>Laravel</span>
                    <span>Supabase</span>
                    <span>Cloudinary</span>
                    <span>API</span>
                    <span>UI Design</span>
                </div>

                <div class="project-actions">
                    <a href="{{ route('projects.nohavolley') }}" class="btn btn-primary">
                        Apri scheda progetto
                    </a>
                </div>
            </div>

            <div class="project-showcase-side">
                <div class="project-big-icon">NV</div>

                <ul class="project-points">
                    <li>News e contenuti sportivi</li>
                    <li>Roster e squadre</li>
                    <li>Area admin e gestione contenuti</li>
                    <li>Esperienza web e mobile</li>
                </ul>
            </div>
        </div>

        <div class="project-showcase-card">
            <div class="project-showcase-content">
                <div class="project-topline">
                    <span class="project-label">Sito personale</span>
                    <span class="project-status soon">Work in progress</span>
                </div>

                <h2>nicolaconsoli.it</h2>

                <p>
                    Questo sito nasce come spazio personale online: una presentazione,
                    un portfolio e allo stesso tempo un luogo dove sperimentare idee,
                    sezioni interattive e contenuti più leggeri.
                </p>

                <p>
                    L’obiettivo non è creare il classico sito vetrina statico, ma qualcosa
                    che rappresenti davvero il mio modo di lavorare e la mia crescita.
                </p>

                <div class="tech-list">
                    <span>Laravel</span>
                    <span>Blade</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                    <span>Responsive</span>
                </div>

                <div class="project-actions">
                    <a href="{{ route('projects.nicolaconsoli') }}" class="btn btn-primary">
                        Apri scheda progetto
                    </a>
                </div>
            </div>

            <div class="project-showcase-side">
                <div class="project-big-icon">NC</div>

                <ul class="project-points">
                    <li>Portfolio personale</li>
                    <li>Design responsive</li>
                    <li>Playground interattivo</li>
                    <li>Contenuti in continua crescita</li>
                </ul>
            </div>
        </div>

    </div>
</section>

<section class="section cv-request-section">
    <div class="container">
        <div class="cv-request-grid">

            <div class="cv-request-content">
                <p class="eyebrow">Curriculum</p>
                <h2>Vuoi richiedere il mio CV?</h2>
                <p>
                    Se vuoi approfondire il mio percorso, le mie esperienze e le competenze
                    che utilizzo nei progetti, puoi inviarmi una richiesta veloce tramite questo form.
                </p>

                <div class="cv-mini-points">
                    <span>Esperienze</span>
                    <span>Competenze tecniche</span>
                    <span>Progetti</span>
                    <span>Contatti</span>
                </div>
            </div>

            <form class="cv-request-form" action="{{ route('cv.request') }}" method="POST">
                @csrf

                @if(session('cv_success'))
                    <div class="form-alert form-alert-success">
                        {{ session('cv_success') }}
                    </div>
                @endif

                @if(session('cv_error'))
                    <div class="form-alert form-alert-error">
                        {{ session('cv_error') }}
                    </div>
                @endif

                <div class="form-group">
                    <label for="cv_name_projects">Nome e cognome</label>
                    <input
                        type="text"
                        id="cv_name_projects"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Es. Mario Rossi"
                        required
                    >
                    @error('name')
                        <small>{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="cv_email_projects">Email</label>
                    <input
                        type="email"
                        id="cv_email_projects"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="nome@email.it"
                        required
                    >
                    @error('email')
                        <small>{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="cv_message_projects">Messaggio</label>
                    <textarea
                        id="cv_message_projects"
                        name="message"
                        rows="5"
                        placeholder="Scrivimi perché vuoi ricevere il CV o per quale progetto vorresti contattarmi."
                    >{{ old('message') }}</textarea>
                    @error('message')
                        <small>{{ $message }}</small>
                    @enderror
                </div>

                <input type="hidden" name="source_page" value="Pagina Progetti">

                <button type="submit" class="btn btn-primary">
                    Richiedi il CV
                </button>
            </form>

        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cta-box">
            <p class="eyebrow">Hai curiosità?</p>
            <h2>Ogni progetto racconta un pezzo del mio percorso.</h2>
            <p>
                Alcuni sono più tecnici, altri più creativi, ma tutti nascono dalla stessa idea:
                costruire qualcosa di utile, chiaro e piacevole da usare.
            </p>

            <div class="hero-actions">
                <a href="{{ route('about') }}" class="btn btn-primary">Scopri chi sono</a>
                <a href="{{ route('contacts') }}" class="btn btn-secondary">Contattami</a>
            </div>
        </div>
    </div>
</section>

@endsection