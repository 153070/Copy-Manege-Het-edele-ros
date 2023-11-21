@extends('layouts.dashboardview')

@section('content')



<div class="container pt-5 pb-5 min-vh-100">
    <div class="row">
        <div class="col-sm-12">
            <h2>Wijzig deze les</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('agenda.update', $agenda->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="start_datum" class="form-label mb-0">Begin:</label>
                    <input type="datetime-local" class="form-control" name="start_datum" id="start_datum" value="{{ $agenda->start_datum }}">
                </div><br>

                <div class="form-group">
                    <label for="eind_datum" class="form-label mb-0">Einde:</label>
                    <input type="datetime-local" class="form-control" name="eind_datum" id="eind_datum" value="{{ $agenda->eind_datum }}">
                </div><br>

                <div class="form-group">
                    <label for="lesdoel" class="form-label mb-0">Lesdoel:</label>
                    <input type="text" class="form-control" name="lesdoel" id="lesdoel" value="{{ $agenda->lesdoel }}">
                </div><br>

                <div class="form-group">
                    <label for="soort">Soort les:</label>
                    <select class="form-control" name="soort" id="soort">
                        <option disabled selected>Kies:</option>
                        @if ($agenda->soort == 'Les')
                        <option selected>Les</option>
                        @else
                        <option>Les</option>
                        @endif
                        @if ($agenda->soort == 'Examen')
                        <option selected>Examen</option>
                        @else
                        <option>Examen</option>
                        @endif
                    </select>
                </div><br>
                <h4>Gebruikers:</h4>
                <table class="table">
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>
                            
                                <input type="checkbox" name="agendaUsers[]" value="{{ $user->id }}" {{ $agendaUser->contains('user_id', $user->id) ? 'checked' : '' }}>
                            </td>
                            <td>{{$user->name}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <input type="submit" class="btn btn-primary col-sm-1" value="Wijzig">
            </form>
        </div>
    </div>
</div>





@endsection