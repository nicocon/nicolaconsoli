@extends('layouts.app')

@section('title', 'Contatti - Nicola Consoli')

@section('content')

<section class="page-hero contacts-hero">
    <div class="container">
        <p class="eyebrow">Contatti</p>
        <h1>Hai un’idea, un progetto o vuoi semplicemente scrivermi?</h1>
        <p>
            Questo è lo spazio giusto per metterci in contatto. Che sia per parlare di sviluppo,
            progetti digitali, collaborazioni o nuove idee, puoi trovarmi qui.
        </p>
    </div>
</section>

<section class="section contacts-section">
    <div class="container contacts-grid">

        <div class="contact-main-card">
            <p class="eyebrow">Scrivimi</p>
            <h2>Partiamo da un messaggio semplice.</h2>

            <p>
                Mi piace confrontarmi su idee concrete, progetti web, gestionali,
                app, siti personali e strumenti digitali pensati per semplificare il lavoro.
            </p>

            <p>
                Anche se questo sito è nato come spazio personale, può diventare anche
                un punto di partenza per nuove collaborazioni o semplicemente per raccontare
                meglio quello che costruisco.
            </p>

            <div class="contact-email-box">
                <span>Email</span>
                <a href="mailto:info@nicolaconsoli.it">
                    info@nicolaconsoli.it
                </a>
            </div>
        </div>

        <aside class="contact-side-card">
            <div class="contact-avatar image-avatar">
                <img src="{{ asset('images/avatar-nicola.png') }}" alt="Avatar di Nicola Consoli">
            </div>

            <h2>Nicola Consoli</h2>
            <p>Full Stack Developer</p>

            <div class="contact-mini-list">
                <div>
                    <span>Focus</span>
                    <strong>Web app, Laravel, gestionali</strong>
                </div>

                <div>
                    <span>Disponibile per</span>
                    <strong>Idee, progetti e collaborazioni</strong>
                </div>

                <div>
                    <span>Risposta</span>
                    <strong>Appena possibile</strong>
                </div>
            </div>
        </aside>

    </div>
</section>

<section class="section social-section">
    <div class="container">

        <div class="section-heading">
            <p class="eyebrow">Dove trovarmi</p>
            <h2>Canali e link utili</h2>
            <p>
                Qui puoi inserire i tuoi profili ufficiali. Per ora lasciamo i link pronti,
                poi li sostituiamo con quelli reali.
            </p>
        </div>

        <div class="social-grid">

            <a href="mailto:info@nicolaconsoli.it" class="social-card">
                <span class="social-icon">@</span>
                <div>
                    <h3>Email</h3>
                    <p>Il modo più diretto per scrivermi.</p>
                </div>
            </a>

            <a href="#" target="_blank" class="social-card">
                <span class="social-icon">in</span>
                <div>
                    <h3>LinkedIn</h3>
                    <p>Profilo professionale e percorso lavorativo.</p>
                </div>
            </a>

            <a href="#" target="_blank" class="social-card">
                <span class="social-icon">GH</span>
                <div>
                    <h3>GitHub</h3>
                    <p>Codice, repository e progetti tecnici.</p>
                </div>
            </a>

            <a href="#" target="_blank" class="social-card">
                <span class="social-icon">IG</span>
                <div>
                    <h3>Instagram</h3>
                    <p>Contenuti personali, sportivi e creativi.</p>
                </div>
            </a>

        </div>

    </div>
</section>

<section class="section contact-ideas-section">
    <div class="container">

        <div class="contact-banner">
            <div>
                <p class="eyebrow">Prima di scrivermi</p>
                <h2>Puoi contattarmi per qualcosa di semplice o per un’idea più grande.</h2>
            </div>

            <div class="contact-topics">
                <span>Siti web</span>
                <span>Laravel</span>
                <span>Gestionali</span>
                <span>App</span>
                <span>Portfolio</span>
                <span>Automazioni</span>
            </div>
        </div>

    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cta-box">
            <p class="eyebrow">Continua a esplorare</p>
            <h2>Vuoi tornare a vedere cosa sto costruendo?</h2>
            <p>
                Nella pagina Progetti trovi una panoramica dei lavori principali,
                mentre nel Playground ci sono le parti più interattive e leggere del sito.
            </p>

            <div class="hero-actions">
                <a href="{{ route('projects') }}" class="btn btn-primary">Vai ai progetti</a>
                <a href="{{ route('playground') }}" class="btn btn-secondary">Vai al Playground</a>
            </div>
        </div>
    </div>
</section>

@endsection