@extends('layouts.dashboardview')

@section('content')
@include('_errors')

<div class="container pt-5 pb-5 min-vh-100">
    <div class="row">
        <div class="col-sm-12">
            <h2>Mededeling wijzigen</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('mededeling.update', $mededelingen->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="mededeling" class="form-label mb-0">Mededeling:</label>
                    <textarea class="form-control" name="mededeling" id="mededeling" value="{{ $mededelingen->mededeling }}" rows="3"></textarea>
                </div><br>

                <input type="submit" class="btn btn-primary col-sm-1" value="Wijzig">
            </form>
        </div>
    </div>
</div>

@endsection