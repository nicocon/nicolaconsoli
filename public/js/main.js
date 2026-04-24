document.addEventListener('DOMContentLoaded', function () {
    /*
    |--------------------------------------------------------------------------
    | Mobile menu
    |--------------------------------------------------------------------------
    */
    const menuToggle = document.getElementById('menuToggle');
    const mainNav = document.getElementById('mainNav');

    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', function () {
            menuToggle.classList.toggle('active');
            mainNav.classList.toggle('open');
            document.body.classList.toggle('menu-open');
        });

        const navLinks = mainNav.querySelectorAll('a');

        navLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                menuToggle.classList.remove('active');
                mainNav.classList.remove('open');
                document.body.classList.remove('menu-open');
            });
        });
    }

    /*
    |--------------------------------------------------------------------------
    | Reveal animations
    |--------------------------------------------------------------------------
    */
    const revealSelectors = [
        '.section',
        '.page-hero',
        '.hero-content',
        '.card',
        '.project-card',
        '.featured-card',
        '.project-showcase-card',
        '.about-profile-card',
        '.about-text-card',
        '.value-card',
        '.skills-panel',
        '.timeline-item',
        '.play-card',
        '.idea-card',
        '.contact-main-card',
        '.contact-side-card',
        '.social-card',
        '.contact-banner',
        '.cta-box',
        '.now-item',
        '.stat-card',
        '.stack-card',
        '.detail-block',
        '.project-side-card'
    ];

    const revealElements = document.querySelectorAll(revealSelectors.join(','));

    revealElements.forEach(function (element, index) {
        element.classList.add('reveal');

        if (index % 3 === 1) {
            element.classList.add('reveal-delay-1');
        }

        if (index % 3 === 2) {
            element.classList.add('reveal-delay-2');
        }
    });

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12
        });

        revealElements.forEach(function (element) {
            observer.observe(element);
        });
    } else {
        revealElements.forEach(function (element) {
            element.classList.add('visible');
        });
    }

    /*
    |--------------------------------------------------------------------------
    | Scroll top button
    |--------------------------------------------------------------------------
    */
    const scrollTopBtn = document.getElementById('scrollTopBtn');

    if (scrollTopBtn) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 420) {
                scrollTopBtn.classList.add('show');
            } else {
                scrollTopBtn.classList.remove('show');
            }
        });

        scrollTopBtn.addEventListener('click', function () {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    /*
    |--------------------------------------------------------------------------
    | Easter egg - Developer Mode
    |--------------------------------------------------------------------------
    */
    const devToast = document.getElementById('devToast');
    const closeDevMode = document.getElementById('closeDevMode');

    const secretWord = 'nicola';
    let typedKeys = '';

    function enableDevMode(showToast = true) {
        document.body.classList.add('dev-mode');
        localStorage.setItem('nicola_dev_mode', '1');

        if (showToast && devToast) {
            devToast.classList.add('show');

            setTimeout(function () {
                devToast.classList.remove('show');
            }, 4200);
        }
    }

    function disableDevMode() {
        document.body.classList.remove('dev-mode');
        localStorage.removeItem('nicola_dev_mode');
    }

    if (localStorage.getItem('nicola_dev_mode') === '1') {
        enableDevMode(false);
    }

    document.addEventListener('keydown', function (event) {
        const key = event.key.toLowerCase();

        if (key.length !== 1 || event.ctrlKey || event.metaKey || event.altKey) {
            return;
        }

        typedKeys += key;

        if (typedKeys.length > secretWord.length) {
            typedKeys = typedKeys.slice(-secretWord.length);
        }

        if (typedKeys === secretWord) {
            enableDevMode(true);
            typedKeys = '';
        }
    });

    if (closeDevMode) {
        closeDevMode.addEventListener('click', function () {
            disableDevMode();
        });
    }

    /*
    |--------------------------------------------------------------------------
    | Playground - Random facts
    |--------------------------------------------------------------------------
    */
    const factButton = document.getElementById('factButton');
    const randomFact = document.getElementById('randomFact');

    const facts = [
        'Dietro ogni gestionale fatto bene c’è sempre una domanda semplice: “come posso far risparmiare tempo a chi lo usa?”',
        'Il miglior codice non è quello più complicato, ma quello che riesci a capire anche dopo mesi.',
        'Un sito personale non deve solo presentarti: deve far capire il tuo modo di pensare.',
        'Laravel è perfetto per trasformare un’idea semplice in un progetto ordinato e pronto a crescere.',
        'A volte una piccola interazione rende una pagina molto più memorabile.',
        'Un buon progetto digitale nasce quando design, logica e utilità lavorano insieme.',
        'La cosa più bella dello sviluppo è vedere un problema reale diventare uno strumento concreto.'
    ];

    if (factButton && randomFact) {
        factButton.addEventListener('click', function () {
            const randomIndex = Math.floor(Math.random() * facts.length);
            randomFact.textContent = facts[randomIndex];
        });
    }

    /*
    |--------------------------------------------------------------------------
    | Playground - Mini quiz
    |--------------------------------------------------------------------------
    */
    const quizOptions = document.querySelectorAll('.quiz-option');
    const quizResult = document.getElementById('quizResult');

    if (quizOptions.length && quizResult) {
        quizOptions.forEach(function (option) {
            option.addEventListener('click', function () {
                quizOptions.forEach(function (item) {
                    item.classList.remove('correct', 'wrong');
                });

                const isCorrect = option.dataset.correct === 'true';

                if (isCorrect) {
                    option.classList.add('correct');
                    quizResult.textContent = 'Esatto! Questa era facile, ma ci stava.';
                } else {
                    option.classList.add('wrong');
                    quizResult.textContent = 'Quasi! La risposta giusta è PHP e Laravel.';
                }
            });
        });
    }

        /*
    |--------------------------------------------------------------------------
    | Playground - Interactive terminal
    |--------------------------------------------------------------------------
    */
    const terminalInput = document.getElementById('terminalInput');
    const terminalOutput = document.getElementById('terminalOutput');

    function terminalPrint(html, className = '') {
        if (!terminalOutput) {
            return;
        }

        const line = document.createElement('p');

        if (className) {
            line.className = className;
        }

        line.innerHTML = html;
        terminalOutput.appendChild(line);
        terminalOutput.scrollTop = terminalOutput.scrollHeight;
    }

    function runTerminalCommand(command) {
        const cleanCommand = command.trim().toLowerCase();

        if (!cleanCommand) {
            return;
        }

        terminalPrint('<span>$</span> ' + cleanCommand, 'terminal-command');

        if (cleanCommand === 'help') {
            terminalPrint('Comandi disponibili:', 'terminal-muted');
            terminalPrint('about · skills · projects · contact · secret · clear', 'terminal-link');
            return;
        }

        if (cleanCommand === 'about') {
            terminalPrint('Nicola è un Full Stack Developer che crea siti, gestionali e strumenti digitali.', 'terminal-muted');
            return;
        }

        if (cleanCommand === 'skills') {
            terminalPrint('PHP · Laravel · MySQL · JavaScript · HTML · CSS · Flutter · Git', 'terminal-muted');
            return;
        }

        if (cleanCommand === 'projects') {
            terminalPrint('Progetti principali: AmiataFlow, NohaVolley e nicolaconsoli.it', 'terminal-muted');
            return;
        }

        if (cleanCommand === 'contact') {
            terminalPrint('Puoi scrivere a: <span class="terminal-link">info@nicolaconsoli.it</span>', 'terminal-muted');
            return;
        }

        if (cleanCommand === 'secret') {
            terminalPrint('Indizio: hai già provato a scrivere <strong>nicola</strong> fuori dal terminale?', 'terminal-warning');
            return;
        }

        if (cleanCommand === 'dev') {
            enableDevMode(true);
            terminalPrint('Developer Mode attivata.', 'terminal-success');
            return;
        }

        if (cleanCommand === 'clear') {
            terminalOutput.innerHTML = '';
            terminalPrint('<span>$</span> clear');
            terminalPrint('Terminale pulito. Scrivi <strong>help</strong> per ricominciare.');
            return;
        }

        terminalPrint('Comando non riconosciuto. Scrivi <strong>help</strong>.', 'terminal-error');
    }

    if (terminalInput && terminalOutput) {
        terminalInput.addEventListener('keydown', function (event) {
            if (event.key === 'Enter') {
                runTerminalCommand(terminalInput.value);
                terminalInput.value = '';
            }
        });
    }
});