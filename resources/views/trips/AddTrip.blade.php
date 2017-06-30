@extends('layouts.app')

@section('content')
<div class="container">
<form action="addtrip" method="POST">
{{ csrf_field() }}

<div class="form-group">
<label for="usr"> Trip Source : </label>
<input type="text" name="src" class="form-control">
</div>

<div class="form-group">
<label for="usr"> Trip Destination : </label>
<input type="text" name="dst" class="form-control">
</div>

<div class="form-group">
<label for="usr"> Trip Date: </label>
<input type="text" name="trip_date" class="form-control">
</div>

<div class="form-group">
<label for="usr"> Final Report: </label>
<input type="text" name="final_report" class="form-control">
</div>

<div class="form-group">
<label for="usr">  Driver: </label>
<input type="text" name="driver_id" class="form-control">
</div>

</br>
<input type="submit" value="add new Trip" class="btn btn-primary"/>
 </form>
</div>
@endsection
