@extends('layouts.dashboardview')
@section('content')
@include('_errors')


<section class="container pt-5 pb-5 min-vh-100">
    <div class="row">
        <div class="col-sm-12">
            <div class="detail-page">
                <h2 class="titel">Les:</h2>
                <div class="lijn">
                    <p class="col-sm-6 col-md-4 col-lg-2"><b>Begin datum:</b></p>
                    <p class="col-sm-6 col-md-8 col-lg-10">{{ date('d-m-Y H:i', strtotime($agenda->start_datum)) }}</p>
                </div>
                <div class="lijn">
                    <p class="col-sm-6 col-md-4 col-lg-2"><b>Eind datum:</b></p>
                    <p class="col-sm-6 col-md-8 col-lg-10">{{ date('d-m-Y H:i', strtotime($agenda->eind_datum)) }}</p>
                </div>
                <div class="lijn">
                    <p class="col-sm-6 col-md-4 col-lg-2"><b>Lesdoel:</b></p>
                    <p class="col-sm-6 col-md-8 col-lg-10">{{ $agenda->lesdoel }}</p>
                </div>
                <div class="lijn">
                    <p class="col-sm-6 col-md-4 col-lg-2"><b>Soort:</b></p>
                    <p class="col-sm-6 col-md-8 col-lg-10">{{ $agenda->soort }}</p>
                </div>
                <div class="lijn">
                    <p class="col-sm-6 col-md-4 col-lg-2"><b>Deelnemers:</b></p>
                    <p class="col-sm-6 col-md-8 col-lg-10">
                        @foreach ($agenda->agendaUsers as $user)
                        {{ $user->name }},
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
    </div>
    @foreach ($comments as $comment)
    @if($comment->agenda_id == $agenda->id)
    <div class="row" style="margin-top: 20px;">
        <div class="col-sm-12">
            <div class="detail-page">
                <div class="col-sm-12">
                    @foreach ($users as $user)
                    @if ($comment->user_id == $user->id)
                    <b>{{ $user->name }}:</b>
                    @endif
                    @endforeach
                    {{ $comment->comment }}
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
    <div class="row" style="margin-top: 20px;">
        <div class="col-sm-12">
            <div class="comment detail-page" >
                <form action="{{ route('comment.store') }}?agenda_id={{ $agenda->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="comment" class="form-label mb-0">Reactie:</label>
                        <input type="text" class="form-control" name="comment" id="comment">
                    </div><br>

                    <input type="submit" class="btn btn-primary col-sm-1" value="Aanmaken">
                </form>
            </div>
        </div>
    </div>
</section>


@endsection