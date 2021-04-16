@extends('layouts.main')

@section('title', 'README')

@section('content')
<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <div class="container mb-4">
        <h1 class="mt-5">README</h1>
        <p class="lead">Hier findest du die Aufgaben zum Q2E Tryout Project, das auf dem <a href="https://www.laravel.com" target="_blank">Laravel Framework</a> basiert.</p>

        <div class="card mb-4">
            <div class="card-header">
                <h2>Wichtige Hinweise</h2>
            </div>
            <div class="card-body">
                <p>
                    <ul>
                        <li>Die Dokumentation im Code erfolgt ausschließlich auf Englisch.</li>
                        <li>Verwende Bootstrap 4.6.x um dein HTML in Form zu bringen (bereits in <code>resources/scss/app.scss</code> integriert)</li>
                        <li>Verwende jQuery als die Haupt-Bibltiothek zum Arbeiten mit JavaScript (bereits in <code>resources/js/app.js</code></li>
                        <li>Nutze bei Bedarf eine richtige MYSQL Datenbank anstatt der konfigurierten SQLite Datenbank (<code>.env</code>).</li>
                    </ul>
                </p>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Die Aufgabenstellung</h2>
            </div>
            <div class="card-body">
                <p>
                    <ul>
                        <li><input type="checkbox" disabled/> Nutze die README.md Datei (standardmäßig mit Laravel Inhalten) um von Beginn an wichtige Funktionen der Applikation zu dokumentieren.</li>
                        <li><input type="checkbox" disabled/> Nimm an, dass die Applikation ausschließlich im deutschsprachigen Raum Verwendung findet.</li>
                        <li><input type="checkbox" disabled/> Erstelle eine Verwaltungsoberfläche für Veranstalungsorte (CRUD), wobei ein Veranstaltungsort folgende Informationen enthält
                            <ul>
                                <li>Name</li>
                                <li>Straße</li>
                                <li>Hausnummer</li>
                                <li>Postleitzahl</li>
                                <li>Ort</li>
                                <li>Land (D-A-CH)</li>
                                <li>Telefon</li>
                                <li>E-Mail Adresse</li>
                                <li>Webseite</li>
                                <li>Inhaber</li>
                                <li>buchbar für Veranstaltungen</li>
                            </ul>
                        </li>
                        <li><input type="checkbox" disabled/> Erstelle eine Detailansicht für Veranstaltungsorte, die man über einen Link aus der Liste aller Veranstaltungen aufrufen kann.
                            <ul>
                                <li>Diese Detailansicht soll alle Daten zum Veranstaltungsort schön übersichtlich ausgeben.</li>
                                <li>Zusätzlich soll eine Google Maps Karte angezeigt werden, die den Standort des Veranstaltungsortes anzeigt.</li>
                            </ul>
                        </li>
                        <li><input type="checkbox" disabled/> Erstelle eine API zum Auslesen von Veranstaltungsorten
                            <ul>
                                <li>Format: JSON</li>
                                <li>Dokumentation beachten.</li>
                            </ul>
                        </li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</main>
@endsection