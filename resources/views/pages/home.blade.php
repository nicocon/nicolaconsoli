@extends('layouts.app')

@section('title', 'Home - Nicola Consoli')

@section('content')

<section class="hero">
    <div class="container hero-content">
        <p class="eyebrow">Sviluppatore Web & Creatore Digitale</p>

        <h1>
            Ciao, sono Nicola.<br>
            Creo siti, gestionali e idee digitali.
        </h1>

        <p class="hero-text">
            Questo è il mio spazio personale online: un posto dove racconto chi sono,
            cosa costruisco e quali progetti sto portando avanti.
        </p>

        <div class="hero-actions">
            <a href="{{ route('projects') }}" class="btn btn-primary">Guarda i progetti</a>
            <a href="{{ route('about') }}" class="btn btn-secondary">Scopri chi sono</a>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2>Cosa troverai qui</h2>

        <div class="cards-grid">
            <div class="card">
                <h3>Progetti</h3>
                <p>Una raccolta dei lavori e delle idee che sto sviluppando.</p>
            </div>

            <div class="card">
                <h3>Esperienze</h3>
                <p>Il mio percorso, le tecnologie che uso e quello che sto imparando.</p>
            </div>

            <div class="card">
                <h3>Playground</h3>
                <p>Una sezione più leggera e interattiva, con curiosità e piccoli esperimenti.</p>
            </div>
        </div>
    </div>
</section>

@endsection