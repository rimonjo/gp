
@extends('layouts.app')


@section('content')
    <div class="container">
        <table class="table table-striped">
            <tr>
                <td> DRIVERS</td>
            </tr>

            @foreach($trips as $trip)
                <tr>
                    <td> <a href="{{ "/trip/".$trip->id}}">{{$trip->src}}</a>
                    </td>
                </tr>
            @endforeach

        </table>

        <a href="addtrip">Add new Trip</a>
    </div>
@endsection
