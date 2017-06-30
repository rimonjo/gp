
@extends('layouts.app')


@section('content')
    <div class="container">
        <table class="table table-striped">
            <tr>
                <td> DRIVERS</td>
            </tr>

            @foreach($drivers as $driver)
                <tr>
                    <td> <a href="{{ "/driver/".$driver->id}}">{{$driver->driver_name}}</a>
                    </td>
                </tr>
            @endforeach

        </table>

        <a href="adddriver">Add new Driver</a>
    </div>
@endsection
