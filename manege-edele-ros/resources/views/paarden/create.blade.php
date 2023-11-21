@extends('layouts.dashboardview')

@section('content')
@include('_errors')

<div class="container pt-5 pb-5 min-vh-100">
    <div class="row">
        <div class="col-sm-12">
            <h2>Paard toevoegen</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('paarden.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="naam" class="form-label mb-0">Naam:</label>
                    <input type="text" class="form-control" name="naam" id="naam">
                </div><br>

                <div class="form-group">
                    <label for="geboortedatum" class="form-label mb-0">Geboortedatum:</label>
                    <input type="date" class="form-control" name="geboortedatum" id="geboortedatum">
                </div><br>

                <div class="form-group">
                    <label for="geslacht">Geslacht:</label>
                    <select class="form-control" name="geslacht" id="geslacht">
                        <option disabled selected>Kies:</option>
                        <option value="Man">Man</option>
                        <option value="Vrouw">Vrouw</option>
                    </select>
                </div><br>

                <div class="form-group">
                    <label for="tamheid">Tamheid:</label>
                    <select class="form-control" name="tamheid" id="tamheid">
                        <option disabled selected>Kies:</option>
                        <option value="tam">Tam</option>
                        <option value="gemiddeld">Gemiddeld</option>
                        <option value="wild">Wild</option>
                    </select>
                </div><br>

                <input type="submit" class="btn btn-primary col-sm-1" value="Creëer">
            </form>
        </div>
    </div>
</div>

@endsection
