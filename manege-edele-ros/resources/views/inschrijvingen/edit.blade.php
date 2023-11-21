@extends('layouts.dashboardview')

@section('content')

<div class="container pt-5 pb-5 min-vh-100">

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

    <div class="row">
        <div class="col-sm-12">
            <h2>Leerling aanmaken</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('inschrijvingen.update', ['inschrijvingen' => $inschrijving->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="naam" class="form-label">Naam</label>
                    <input type="text" class="form-control" id="naam" placeholder="Vul in naam" name="naam" value="{{ $inschrijving->naam }}" disabled>
                </div>
                <div class="form-group mb-3">
                    <label for="leeftijd" class="form-label">Geboortedatum</label>
                    <input type="date" class="form-control" id="leeftijd" placeholder="Vul in datum" name="leeftijd" value="{{ $inschrijving->leeftijd }}" disabled>
                </div>

                <div class="form-group mb-3">
                    <label for="geslacht" class="form-label">Geslacht</label>
                    <select class="form-control" id="geslacht" name="geslacht" value="{{ $inschrijving->geslacht }}" disabled>
                        <option disabled selected>Kies:</option>
                        <option value="Man" {{ $inschrijving->geslacht === 'Man' ? 'selected' : '' }}>Man</option>
                        <option value="Vrouw" {{ $inschrijving->geslacht === 'Vrouw' ? 'selected' : '' }}>Vrouw</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="adres" class="form-label">Adres</label>
                    <input type="text" class="form-control" id="adres" placeholder="Vul in addres" name="adres" value="{{ $inschrijving->adres }}" disabled>
                </div>
                <div class="form-group mb-3">
                    <label for="woonplaats" class="form-label">Woonplaats</label>
                    <input type="text" class="form-control" id="woonplaats" placeholder="Vul in woonplaats" name="woonplaats" value="{{ $inschrijving->woonplaats }}" disabled>
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Vul in email" name="email" value="{{ $inschrijving->email }}" disabled>
                </div>
                <div class="form-group mb-3">
                    <label for="telefoonnummer" class="form-label">Telefoonnummer</label>
                    <input type="text" class="form-control" id="telefoonnummer" placeholder="Vul in telefoonnummer" name="telefoonnummer" value="{{ $inschrijving->telefoonnummer }}" disabled>
                </div>
                <div class="form-group mb-3">
                    <label for="lespakket" class="form-label">Les Pakket</label>
                    <select class="form-control" id="lespakket" name="lespakket" value="{{ $inschrijving->lespakket }}" disabled>
                        <option disabled selected>Kies:</option>
                        <option value="Pakket 1" @if(request('lespakket') === 'Pakket 1') selected @endif>Pakket 1</option>
                        <option value="Pakket 2"@if(request('lespakket') === 'Pakket 2') selected @endif>Pakket 2</option>
                        <option value="Pakket 3"@if(request('lespakket') === 'Pakket 3') selected @endif>Pakket 3</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="opmerking" class="form-label">Opmerking</label>
                    <textarea class="form-control" id="opmerking" rows="5" name="opmerking" placeholder="Opmerking in vullen" value="{{ $inschrijving->opmerking }}" disabled></textarea>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label mb-0">Wachtwoord:</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div><br>


                <input type="submit" class="btn btn-primary col-sm-1" value="Wijzig">
            </form>
        </div>
    </div>
</div>

@endsection