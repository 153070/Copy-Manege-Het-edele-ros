@extends('layouts.homeview')

@section('main-content')
    <body>
        <!-- main -->
        <main class="main-content">
            <div class="d-flex mb-5 mx-auto">
                <img src="{{ asset('/images/Header bottom.png') }}" class="img-fluid" alt="Responsive image">
            </div>

            <div class="container text-center">
                <div class="row">

                    <div class="col-sm text-start">
                        <img src="{{ asset('/images/elisa-pitkanen-Z9-FZ6hko-k-unsplash 1.png') }}" class="img-fluid col-sm text-start" alt="Responsive image">
                    </div>
                    <div class="col-sm text-start ms-5">
                        <h2 class="header-text">Welkom bij L.R. en P.C. Het Edele Rosm</h2>
                        <p class="text-start">Het Edele Ros is een rijvereniging uit het Noord Brabantse dorp Haaren. Onze rijvereniging is opgericht op 6 januari 1931. 29 jaar later, in 1960, werd er ook een ponyclub opgericht. Het doel van onze vereniging is zoveel mogelijk ruiters en amazones een veilige en gezellige plaats te bieden om gezamenlijk en op eigen niveau de ruitersport te beoefenen, zowel met paarden als met pony’s. Het Edele Ros is een gezellige vereniging, waar iedereen van harte welkom is, van jong tot oud, van recreant tot wedstrijdruiter. Op onze website kun je onder andere informatie vinden over onze vereniging, wedstrijden, hoe je lid kan worden en hoe je contact met ons kunt opnemen. Wij wensen je veel plezier op onze website.</p>
                    </div>
                </div>
            </div>


            <div class="bar">
                <h2 class="d-flex justify-content-center mt-5 p-3 text-white">Paardrij pakketten</h2>
                <div class="package-container text-center">
                    <div class="bar-row d-flex align-item-center p-2">
                        <div class="col text-white">
                            <ul class="me-auto">
                                <a class="nav-link" href="{{ url('inschrijfformulier') }}?lespakket=Pakket 1">
                            
                                    <h3>Pakket 1</h3>
                                    <p>Kinderen tot 14 jaar<p>
                                
                                </a>
                            </ul>
                        </div>
                        <div class="col text-white">
                        <ul class="me-auto">
                                <a class="nav-link" href="{{ url('inschrijfformulier') }}?lespakket=Pakket 2">

                                    <h3>Pakket 2</h3>
                                    <p>Junioren 14 tot 18 jaar<p>

                                </a>
                            </ul>
                        </div>
                        <div class="col text-white">
                        <ul class="me-auto">
                                <a class="nav-link" href="{{ url('inschrijfformulier') }}?lespakket=Pakket 3">

                                    <h3>Pakket 3</h3>
                                    <p>Volwassenen vanaf 18 jaar</p>
                                </a>
                            </ul>
                        </div>
                    </div>

                    <div class="d-flex justify-content-around align-item-center mb-5 p-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-white">Incl lenen cap, chaps & bodyprotector</li>
                            <li class="list-group-item text-white">Gediplomeerde instructie</li>
                            <li class="list-group-item text-white">Vrijblijvend</li>
                        </ul>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-white">Incl lenen cap, chaps & bodyprotector</li>
                            <li class="list-group-item text-white">Gediplomeerde instructie</li>
                            <li class="list-group-item text-white">Vrijblijvend</li>
                        </ul>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-white">Incl lenen cap, chaps & bodyprotector</li>
                            <li class="list-group-item text-white">Gediplomeerde instructie</li>
                            <li class="list-group-item text-white">Vrijblijvend</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container text-center mb-5">
                <div class="row">
                    <div class="col text-start ms-5">
                        <h2 class="header-text ">Over Het Edele Ros</h2>
                        <p class="text-dark">Het Edele Ros is een rijvereniging en ponyclub. Je kunt lid worden als je beschikt over een eigen (verzorg) pony of paard. Je kunt dan deelnemen aan de lessen die gegeven worden en daarnaast heb je, buiten de vaste lestijden om, vrij toegang tot de rijhal om te kunnen rijden. Wij beschikken over een eigen accomodatie, met een grote rijhal en een mooi buitenterrein. Rijvereniging Het Edele Ros is dus geen manege waar paarden verhuurd worden voor lessen of buitenritten.</p>
                    </div>

                    <div class="media-image col-sm text-end">
                        <img src="{{ asset('/images/elisa-pitkanen-Z9-FZ6hko-k-unsplash 1.png') }}" class="img-fluid col-sm text-start" alt="Responsive image">
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-vB+zf4xw3LW0L0iBE3FbVzx4vP0m3UjF6xl2B0lUua7b0IdToll6wz9p5Bj5pd0z" crossorigin="anonymous"></script>
        </main>
        <!-- main -->
    </body>
@endsection