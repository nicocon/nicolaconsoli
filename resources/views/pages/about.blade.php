@extends('layouts.app')

@section('title', 'Chi sono - Nicola Consoli')

@section('content')

<section class="page-hero about-hero">
    <div class="container">
        <p class="eyebrow">Chi sono</p>
        <h1>Creo soluzioni digitali partendo da problemi reali.</h1>
        <p>
            Sono Nicola, mi occupo di sviluppo web e mi piace costruire strumenti semplici,
            utili e curati, capaci di rendere più chiaro e veloce il lavoro quotidiano.
        </p>
    </div>
</section>

<section class="section about-intro-section">
    <div class="container about-intro-grid">

        <div class="about-profile-card">
            <div class="profile-avatar image-avatar">
                <img src="{{ asset('images/avatar-nicola.png') }}" alt="Avatar di Nicola Consoli">
            </div>

            <h2>Nicola Consoli</h2>
            <p class="profile-role">Full Stack Developer</p>

            <div class="profile-info">
                <div>
                    <span>Focus</span>
                    <strong>Web app & gestionali</strong>
                </div>

                <div>
                    <span>Stack</span>
                    <strong>PHP, Laravel, MySQL, JS</strong>
                </div>

                <div>
                    <span>Approccio</span>
                    <strong>Pratico, pulito, concreto</strong>
                </div>
            </div>
        </div>

        <div class="about-text-card">
            <p class="eyebrow">Il mio modo di lavorare</p>
            <h2>Mi piace trasformare idee e necessità in strumenti veri.</h2>

            <p>
                Nel tempo mi sono avvicinato sempre di più allo sviluppo di gestionali,
                applicazioni web e interfacce operative pensate per risolvere esigenze reali.
                Non mi interessa solo “scrivere codice”: mi piace capire il problema,
                semplificarlo e costruire qualcosa che sia davvero utile.
            </p>

            <p>
                Questo sito personale nasce proprio con questa idea: raccontare il mio percorso,
                mostrare i progetti che sto costruendo e avere uno spazio dove sperimentare
                nuove sezioni, interazioni e contenuti.
            </p>
        </div>

    </div>
</section>

<section class="section values-section">
    <div class="container">
        <div class="section-heading">
            <p class="eyebrow">Cosa mi guida</p>
            <h2>Tre cose a cui do molta importanza</h2>
            <p>
                Ogni progetto per me deve essere chiaro, utile e piacevole da usare.
            </p>
        </div>

        <div class="values-grid">

            <div class="value-card">
                <div class="value-number">01</div>
                <h3>Semplicità</h3>
                <p>
                    Un’interfaccia deve aiutare, non confondere. Mi piace creare esperienze
                    pulite, ordinate e facili da capire.
                </p>
            </div>

            <div class="value-card">
                <div class="value-number">02</div>
                <h3>Concretezza</h3>
                <p>
                    Prima di aggiungere funzionalità, cerco di capire cosa serve davvero.
                    Il codice deve risolvere un problema, non complicarlo.
                </p>
            </div>

            <div class="value-card">
                <div class="value-number">03</div>
                <h3>Crescita</h3>
                <p>
                    Ogni progetto è un’occasione per imparare qualcosa: una tecnologia,
                    un metodo migliore o un modo più chiaro di progettare.
                </p>
            </div>

        </div>
    </div>
</section>

<section class="section skills-section">
    <div class="container skills-grid">

        <div>
            <p class="eyebrow">Competenze</p>
            <h2>Tecnologie e strumenti che uso</h2>
            <p>
                Lavoro principalmente con tecnologie web, backend PHP/MySQL e interfacce
                dinamiche. Mi piace costruire sistemi ordinati, mantenibili e facilmente
                migliorabili nel tempo.
            </p>
        </div>

        <div class="skills-panel">
            <div class="skill-group">
                <h3>Backend</h3>
                <div class="tags">
                    <span>PHP</span>
                    <span>Laravel</span>
                    <span>MySQL</span>
                    <span>API</span>
                    <span>Database design</span>
                </div>
            </div>

            <div class="skill-group">
                <h3>Frontend</h3>
                <div class="tags">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                    <span>jQuery</span>
                    <span>Bootstrap</span>
                    <span>Responsive UI</span>
                </div>
            </div>

            <div class="skill-group">
                <h3>Altri strumenti</h3>
                <div class="tags">
                    <span>Git</span>
                    <span>GitHub</span>
                    <span>VS Code</span>
                    <span>Flutter</span>
                    <span>Supabase</span>
                    <span>Cloudinary</span>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="section timeline-section">
    <div class="container">
        <div class="section-heading">
            <p class="eyebrow">Percorso</p>
            <h2>Una crescita continua</h2>
            <p>
                Il mio percorso è fatto di progetti, prove, problemi risolti e nuove idee da sviluppare.
            </p>
        </div>

        <div class="timeline">

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <span>Step 1</span>
                    <h3>Prime basi web</h3>
                    <p>
                        HTML, CSS, PHP, MySQL e JavaScript: le fondamenta da cui sono partito.
                    </p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <span>Step 2</span>
                    <h3>Gestionali e flussi aziendali</h3>
                    <p>
                        Ho iniziato a costruire strumenti più complessi per organizzare dati,
                        processi, operatori, documenti e attività reali.
                    </p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <span>Step 3</span>
                    <h3>Laravel e progetti più strutturati</h3>
                    <p>
                        Sto portando il mio modo di sviluppare verso architetture più ordinate,
                        moderne e facili da mantenere.
                    </p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <span>Step 4</span>
                    <h3>Spazio personale online</h3>
                    <p>
                        nicolaconsoli.it diventa il posto dove raccontare quello che costruisco
                        e sperimentare nuove idee.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cta-box">
            <p class="eyebrow">Progetti</p>
            <h2>Vuoi vedere cosa sto costruendo?</h2>
            <p>
                Nella pagina Progetti trovi una panoramica dei lavori più importanti,
                dalle web app ai progetti personali.
            </p>

            <div class="hero-actions">
                <a href="{{ route('projects') }}" class="btn btn-primary">Vai ai progetti</a>
                <a href="{{ route('contacts') }}" class="btn btn-secondary">Contattami</a>
            </div>
        </div>
    </div>
</section>

@endsection