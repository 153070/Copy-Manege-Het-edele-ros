@extends('layouts.homeview')

    <body>

        @yield('header-content')

       
        @section('main-content')
        <div class="container mt-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <h2 class="font-weight-bold">Inschrijving:</h2><br>
            <form action="{{ route('inschrijvingen.store') }}" method="POST">
                @csrf

                <div class="form-group mb-3">
                    <label for="naam" class="form-label">Naam</label>
                    <input type="text" class="form-control" id="naam" placeholder="Vul in naam" name="naam">
                </div>
                <div class="form-group mb-3">
                    <label for="leeftijd" class="form-label">Geboortedatum</label>
                    <input type="date" class="form-control" id="leeftijd" placeholder="Vul in datum" name="leeftijd">
                </div>

                <div class="form-group mb-3">
                    <label for="geslacht" class="form-label">Geslacht</label>
                    <select class="form-control" id="geslacht" name="geslacht">
                        <option disabled selected>Kies:</option>
                        <option value="Man">Man</option>
                        <option value="Vrouw">Vrouw</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="adres" class="form-label">Adres</label>
                    <input type="text" class="form-control" id="adres" placeholder="Vul in addres" name="adres">
                </div>
                <div class="form-group mb-3">
                    <label for="woonplaats" class="form-label">Woonplaats</label>
                    <input type="text" class="form-control" id="woonplaats" placeholder="Vul in woonplaats" name="woonplaats">
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Vul in email" name="email">
                </div>
                <div class="form-group mb-3">
                    <label for="telefoonnummer" class="form-label">Telefoonnummer</label>
                    <input type="text" class="form-control" id="telefoonnummer" placeholder="Vul in telefoonnummer" name="telefoonnummer">
                </div>
                <div class="form-group mb-3">
                    <label for="lespakket" class="form-label">Les Pakket</label>
                    <select class="form-control" id="lespakket" name="lespakket">
                        <option disabled selected>Kies:</option>
                        <option value="Pakket 1" @if(request('lespakket') === 'Pakket 1') selected @endif>Pakket 1</option>
                        <option value="Pakket 2"@if(request('lespakket') === 'Pakket 2') selected @endif>Pakket 2</option>
                        <option value="Pakket 3"@if(request('lespakket') === 'Pakket 3') selected @endif>Pakket 3</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="opmerking" class="form-label">Opmerking</label>
                    <textarea class="form-control" id="opmerking" rows="5" name="opmerking" placeholder="Opmerking in vullen"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
</html>
@endsection

    @yield('footer-content')