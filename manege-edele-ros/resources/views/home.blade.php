@extends('layouts.dashboardview')

@section('content')
<div class="container pt-5 pb-5 min-vh-100">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Je bent ingelogd!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 20px;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mededelingen gekregen van de eigenaar</div>
                @foreach ($mededelingen as $mededeling)
                <div class="home-card">
                <div class="card-body">
                    {{ $mededeling->mededeling }}
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection