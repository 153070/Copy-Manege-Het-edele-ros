@extends('layouts.app')

@section('content')

<div class="container">

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
        <div class="col-sm-6">
            <h2>Leerling:</h2>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Naam</th>
                            <th scope="col">Geboortedatum</th>
                            <th scope="col">Geslacht</th>
                            <th scope="col">Adres</th>
                            <th scope="col">Woonplaats</th>
                            <th scope="col">Email</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Wachtwoord</th>
                            <th scope="col">Telefoonnummer</th>
                            <th scope="col">Les Pakket</th>
                            <th scope="col">Leerling aanmaken</th>
                            <th scope="col">Wijzig</th>
                            <th scope="col">Verwijder</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inschrijvingen as $inschrijving)
                        <tr>
                            <td>{{ $inschrijving->naam }}</td>
                            <td>{{ $inschrijving->leeftijd }}</td>
                            <td>{{ $inschrijving->geslacht }}</td>
                            <td>{{ $inschrijving->adres }}</td>
                            <td>{{ $inschrijving->woonplaats }}</td>
                            <td>{{ $inschrijving->email }}</td>
                            <td>{{ $inschrijving->rol }}</td>
                            <td>{{ $inschrijving->password }}</td>
                            <td>{{ $inschrijving->telefoonnummer }}</td>
                            <td>{{ $inschrijving->lespakket }}</td>
                            <td>
                                <a href="{{ route('inschrijvingen.index', ['inschrijvingen' => $inschrijving->id]) }}" class="btn btn-success btn-sm">Aanmaken</a>
                            </td>
                            <td>
                                <a href="{{ route('inschrijvingen.edit', ['inschrijvingen' => $inschrijving->id]) }}" class="btn btn-primary btn-sm">Wijzig</a>
                            </td>
                            <td>
                                <form method="post" action="{{ route('inschrijvingen.destroy', ['inschrijvingen' => $inschrijving->id]) }}">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Verwijder</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection