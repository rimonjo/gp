
@extends('layouts.app')


@section('content')
    <div class="container">
        <table class="table table-striped">
            <tr>
                <td> TRIPS Data</td>
            </tr>


                <tr>
                    <td>  TRIP SOURCE : {{$trip->src}} </td>
                    <td>  TRIP DESTINATION : {{$trip->dst}} </td>
                    <td>  TRIP DATE : {{$trip->trip_date}} </td>
                    <td>  TRIP FINAL REPORT : {{$trip->final_report}} </td>
                    <td>  TRIP DRIVER NAME : {{$trip->driver->driver_name}} </td>

                </tr>


        </table>

        <a href="/addtrip">Add new Driver</a>
    </div>
@endsection
