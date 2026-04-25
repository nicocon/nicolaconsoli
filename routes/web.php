<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Route::view('/', 'pages.home')->name('home');
Route::view('/chi-sono', 'pages.about')->name('about');
Route::view('/progetti', 'pages.projects')->name('projects');
Route::view('/playground', 'pages.playground')->name('playground');
Route::view('/contatti', 'pages.contacts')->name('contacts');

Route::view('/progetti/amiataflow', 'pages.projects.amiataflow')->name('projects.amiataflow');
Route::view('/progetti/nohavolley', 'pages.projects.nohavolley')->name('projects.nohavolley');
Route::view('/progetti/nicolaconsoli', 'pages.projects.nicolaconsoli')->name('projects.nicolaconsoli');

Route::post('/richiedi-cv', function (Request $request) {
    $data = $request->validate([
        'name' => ['required', 'string', 'max:120'],
        'email' => ['required', 'email', 'max:160'],
        'message' => ['nullable', 'string', 'max:2000'],
        'source_page' => ['nullable', 'string', 'max:120'],
    ]);

    try {
        Mail::raw(
            "Hai ricevuto una nuova richiesta CV.\n\n" .
            "Nome: " . $data['name'] . "\n" .
            "Email: " . $data['email'] . "\n" .
            "Pagina: " . ($data['source_page'] ?? 'Non specificata') . "\n\n" .
            "Messaggio:\n" . ($data['message'] ?? 'Nessun messaggio'),
            function ($message) use ($data) {
                $message->to('nconsoli48@gmail.com')
                    ->subject('Nuova richiesta CV dal sito nicolaconsoli.it')
                    ->replyTo($data['email'], $data['name']);
            }
        );

        return back()->with('cv_success', 'Richiesta inviata correttamente. Ti risponderò appena possibile.');
    } catch (\Throwable $e) {
        return back()
            ->withInput()
            ->with('cv_error', 'Non sono riuscito a inviare la richiesta. Riprova tra poco.');
    }
})->name('cv.request');