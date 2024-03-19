@extends('layouts.app')
@section('content')
    <div id="jumbo" class="text-light">
        <h1 class="text-center">Benvenuto su <br>
            <span>SysPlax!!</span>
        </h1>
    </div>
    <section class="virtualMachineService">
        <a href="{{ route('serviceVirtualMachine') }}" class="service-box d-flex">
            <div class="description">
                <h1>Virtual Machines</h1>
                <p>Le macchine virtuali consentono di eseguire sistemi operativi diversi su un unico dispositivo. Da Windows 7-11 a Linux (Zorin, Ubuntu, Kali, Arch), offrono ambienti virtualizzati per testare, sviluppare e esplorare vari sistemi operativi in modo sicuro e flessibile.</p>
            </div>
            <div class="image h-100">
                <img class="w-100 h-100" src="/img/service-vitualM.jpg" alt="">
            </div>
        </a>
    </section>
    <section class="containerService">
        <a href="{{ route('serviceContainer') }}" class="service-box ">
            <div class="description">
                <h1>Containers</h1>
                <p>I container consentono la creazione e l'esecuzione efficiente di numerosi microservizi, fornendo un ambiente isolato e scalabile. Ottimizzano la distribuzione del software, facilitando la gestione e la scalabilità delle applicazioni complesse.</p>
            </div>
            <div class="image h-100">
                <img class="w-100 h-100" src="/img/service-container.jpg" alt="">
            </div>
        </a>
    </section>
    <section class="storageService">
        <a href="{{ route('serviceStorage') }}" class="service-box">
            <div class="description">
                <h1>Storage</h1>
                <p>Il servizio di storage personalizzato mediante server virtuali TrueNAS offre soluzioni su misura, ottimizzate per le esigenze dell'utente. Affidabilità, flessibilità e prestazioni elevate caratterizzano questa soluzione avanzata di archiviazione dati.</p>
            </div>
            <div class="image h-100">
                <img class="w-100 h-100" src="/img/service-server.jpg" alt="">
            </div>
        </a>
    </section>

    <footer class=" text-center py-5 fs-1">
        grazie <br> graziella <br> <strong>grazie al cazzo</strong>
    </footer>
@endsection
