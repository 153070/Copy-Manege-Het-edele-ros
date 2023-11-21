@extends('layouts.dashboardview')

@section('content')
@include('_errors')

<div class="container pt-5 pb-5 min-vh-100">
    <div class="row">
        <div class="col-sm-12">
            <h2>Wijzig paard</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('paarden.update', ['paarden' => $paard->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="naam" class="form-label mb-0">Naam:</label>
                    <input type="text" class="form-control" name="naam" id="naam" value="{{ $paard->naam }}">
                </div><br>

                <div class="form-group">
                    <label for="geboortedatum" class="form-label mb-0">geboortedatum:</label>
                    <input type="date" class="form-control" name="geboortedatum" id="geboortedatum" value="{{ $paard->geboortedatum }}">
                </div><br>

                <div class="form-group">
                    <label for="geslacht">Geslacht:</label>
                    <select class="form-control" name="geslacht" id="geslacht">
                        <option disabled selected>Kies:</option>
                        <option value="Man" {{ $paard->geslacht === 'Man' ? 'selected' : '' }}>Man</option>
                        <option value="Vrouw" {{ $paard->geslacht === 'Vrouw' ? 'selected' : '' }}>Vrouw</option>
                    </select>
                </div><br>

                <div class="form-group">
                    <label for="tamheid">Tamheid:</label>
                    <select class="form-control" name="tamheid" id="tamheid">
                        <option disabled selected>Kies:</option>
                        <option value="tam" {{ $paard->tamheid === 'tam' ? 'selected' : '' }}>Tam</option>
                        <option value="gemiddeld" {{ $paard->tamheid === 'gemiddeld' ? 'selected' : '' }}>Gemiddeld</option>
                        <option value="wild" {{ $paard->tamheid === 'wild' ? 'selected' : '' }}>Wild</option>
                    </select>
                </div><br>

                <input type="submit" class="btn btn-primary col-sm-1" value="Wijzig">
            </form>
        </div>
    </div>
</div>

@endsection
