@extends('layouts.dashboardview')

@section('content')

<div class="container pt-5 pb-5 min-vh-100">
    <div class="row">
        <div class="col-sm-6">
            <h2>Paardenlijst</h2>
        </div>
        <div class="col-sm-6">
            <a style="float: right;" class="btn btn-success btn-sm" href="{{ route('paarden.create') }}">Voeg paard toe</a>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Naam</th>
                            <th scope="col">geboortedatum</th>
                            <th scope="col">Geslacht</th>
                            <th scope="col">Tamheid</th>
                            <th scope="col">Wijzig</th>
                            <th scope="col">Verwijder</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($paarden as $paard)
                        <tr>
                            <td>{{ $paard->naam }}</td>
                            <td>{{ $paard->geboortedatum }}</td>
                            <td>{{ $paard->geslacht }}</td>
                            <td>{{ $paard->tamheid }}</td>
                            <td>
                                <a href="{{ route('paarden.edit', ['paarden' => $paard->id]) }}" class="btn btn-primary btn-sm">Wijzig</a>
                            </td>
                            <td>
                                <form method="post" action="{{ route('paarden.destroy', ['paarden' => $paard->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Weet je zeker dat je dit wilt verwijderen?')">Verwijder</button>
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


