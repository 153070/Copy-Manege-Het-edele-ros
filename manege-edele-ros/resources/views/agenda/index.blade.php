@extends('layouts.dashboardview')

@section('content')

<div class="container pt-5 pb-5 min-vh-100">
    <div class="row">
        @if(auth()->user()->role === 'eigenaar' || auth()->user()->role === 'instructeur')
        <div class="col-sm-6">
            <h2>Agenda</h2>
        </div>
        <div class="col-sm-6">
            <a style="float: right;" class="btn btn-success btn-sm" href="{{route('agenda.create')}}">Les aanmaken</a>
        </div>
        @else
        <div class="col-sm-12">
            <h2>Agenda</h2>
        </div>
        @endif
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Lessen:</th>
                            <th scope="col">Begin datum</th>
                            <th scope="col">Eind datum</th>
                            <th scope="col">Lesdoel</th>
                            <th scope="col">Soort</th>
                            <th scope="col">Gebruikers</th>
                            @if(auth()->user()->role === 'eigenaar' || auth()->user()->role === 'instructeur')
                            <th scope="col">Wijzig</th>
                            <th scope="col">Verwijder</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agendas as $agenda)
                        <tr>
                            <td><a href="{{ route('agenda.show', ['agenda' => $agenda->id]) }}">Les:</a></td>
                            <td>{{ date('d-m-Y H:i', strtotime($agenda->start_datum)) }}</td>
                            <td>{{ date('d-m-Y H:i', strtotime($agenda->eind_datum)) }}</td>
                            <td>{{ $agenda->lesdoel }}</td>
                            <td>{{ $agenda->soort }}</td>
                            <td>
                                @foreach ($agenda->agendausers as $user)
                                {{ $user->name }}, 
                                @endforeach
                            </td>
                            @if(auth()->user()->role === 'eigenaar' || auth()->user()->role === 'instructeur')
                            <td>
                                <form method="GET" action="{{ route('agenda.edit',$agenda->id) }}">
                                    @csrf
                                    <input type="hidden" name="agenda_id" value="{{ $agenda->id }}">
                                    <button type="submit" class="btn btn-primary btn-sm">Wijzig</button>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="{{route('agenda.destroy',$agenda->id)}}">
                                    <!-- <a class="btn btn-danger btn-sm" href="{{route('agenda.edit',$agenda->id)}}">Wijzig</a> -->
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Weet je zeker dat je dit wilt verwijderen?')">Verwijder</button>
                                </form>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection