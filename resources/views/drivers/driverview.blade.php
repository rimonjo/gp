
@extends('layouts.app')


@section('content')
    <div class="container">
        <table class="table table-striped">
            <tr>
                <td> DRIVER Data</td>
            </tr>


                <tr>
                    <td> Driver Name : {{$driver->driver_name}} </td>
                    <td> Driver Birthday : {{$driver->birthday}} </td>
                    <td> Driver Gender : {{$driver->gender}} </td>
                    <td> Driver Score : {{$driver->score}} </td>
                    <td> Driver NID : {{$driver->nid}} </td>

                </tr>


        </table>

        <a href="/adddriver">Add new Driver</a>
    </div>
@endsection
