@extends('layouts.dashboardview')

@section('content')

<div class="container pt-5 pb-5 min-vh-100">
    <div class="row">
        <div class="col-sm-6">
            <h2>Mededeling</h2>
        </div>
        <div class="col-sm-6">
            <a style="float: right;" class="btn btn-success btn-sm" href="{{route('mededeling.create')}}">Mededeling geven</a>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Mededelingen:</th>
                            <th scope="col">Wijzig</th>
                            <th scope="col">Verwijder</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mededelingen as $mededeling)
                        <tr>
                            <td>{{ $mededeling->mededeling }}</td>
                            <td>
                                <form method="GET" action="{{ route('mededeling.edit',$mededeling->id) }}">
                                    @csrf
                                    <!-- <input type="hidden" name="mededeling_id" value="{{ $mededeling->id }}"> -->
                                    <button type="submit" class="btn btn-primary btn-sm">Wijzig</button>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="{{ route('mededeling.destroy', ['mededeling' => $mededeling]) }}">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Weet je zeker dat je dit wilt verwijderen?')">Verwijder</button>
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