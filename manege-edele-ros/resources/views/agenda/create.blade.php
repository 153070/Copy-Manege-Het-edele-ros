@extends('layouts.dashboardview')

@section('content')
@include('_errors')

<div class="container pt-5 pb-5 min-vh-100">
    <div class="row">
        <div class="col-sm-12">
            <h2>Maak nieuwe les aan</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('agenda.store') }}" method="POST">

                @csrf

                <div class="form-group">
                    <label for="start_datum" class="form-label mb-0">Begin:</label>
                    <input type="datetime-local" class="form-control" name="start_datum" id="start_datum">
                </div><br>

                <div class="form-group">
                    <label for="eind_datum" class="form-label mb-0">Einde:</label>
                    <input type="datetime-local" class="form-control" name="eind_datum" id="eind_datum">
                </div><br>

                <div class="form-group">
                    <label for="lesdoel" class="form-label mb-0">Lesdoel:</label>
                    <input type="text" class="form-control" name="lesdoel" id="lesdoel">
                </div><br>

                <div class="form-group">
                    <label for="soort">Soort les:</label>
                    <select class="form-control" name="soort" id="soort">
                        <option disabled selected>Kies:</option>
                        <option>Les</option>
                        <option>Examen</option>
                    </select>
                </div><br>

                <h4>Gebruikers:</h4>
                <table class="table">
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>
                                <input type="checkbox" name="agendaUsers[]" value="{{ $user->id }}">
                            </td>
                            <td>
                                {{$user->name}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table><br>

                <input type="submit" class="btn btn-primary col-sm-1" value="Aanmaken">
            </form>
        </div>
    </div>
</div>

@endsection