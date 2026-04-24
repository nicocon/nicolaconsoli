@extends('layouts.app')

@section('title', 'Contatti - Nicola Consoli')

@section('content')

<section class="page-hero">
    <div class="container">
        <h1>Contatti</h1>
        <p>
            Vuoi scrivermi, propormi un progetto o semplicemente fare due chiacchiere?
            Qui trovi i miei contatti.
        </p>
    </div>
</section>

<section class="section">
    <div class="container contact-box">

        <h2>Restiamo in contatto</h2>

        <p>
            Puoi contattarmi via email oppure seguirmi sui miei canali social.
        </p>

        <div class="contact-links">
            <a href="mailto:info@nicolaconsoli.it">Email</a>
            <a href="#" target="_blank">LinkedIn</a>
            <a href="#" target="_blank">GitHub</a>
            <a href="#" target="_blank">Instagram</a>
        </div>

    </div>
</section>

@endsection