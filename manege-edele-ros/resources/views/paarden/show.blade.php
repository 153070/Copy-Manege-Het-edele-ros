@extends('layouts.dashboardview')

@section('content')

<section class="container pt-5 pb-5 min-vh-100">
    <div class="row">
        <div class="col-sm-12">
            <div class="detail-page">
                <h2 class="title">Horse Details:</h2>
                <div class="line">
                    <p class="col-sm-6 col-md-4 col-lg-2"><b>Name:</b></p>
                    <p class="col-sm-6 col-md-8 col-lg-10">{{ $paard->naam }}</p>
                </div>
                <div class="line">
                    <p class="col-sm-6 col-md-4 col-lg-2"><b>Age:</b></p>
                    <p class="col-sm-6 col-md-8 col-lg-10">{{ $paard->geboortedatum }}</p>
                </div>
                <div class="line">
                    <p class="col-sm-6 col-md-4 col-lg-2"><b>Gender:</b></p>
                    <p class="col-sm-6 col-md-8 col-lg-10">{{ $paard->geslacht }}</p>
                </div>
                <div class="line">
                    <p class="col-sm-6 col-md-4 col-lg-2"><b>Tameness:</b></p>
                    <p class="col-sm-6 col-md-8 col-lg-10">{{ $paard->tamheid }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
