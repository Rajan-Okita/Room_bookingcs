<!DOCTYPE html>
<html>
<head>
    <title>Find Empty Locations</title>
</head>
<body>
<h1>Find Empty Locations</h1>
<form action="{{ route('find.empty.locations') }}" method="post">
    @csrf
    <label for="target_day">Day:</label>
    <input type="text" name="target_day" id="target_day" required value="{{old('target_day')}}"/>

    <label for="start_time">Start Time:</label>
    <input type="time" name="start_time" id="start_time" required value="{{old('start_time')}}"/>

    <label for="end_time">End Time:</label>
    <input type="time" name="end_time" id="end_time" required value="{{old('end_time')}}"/>

    <button type="submit">Find Empty Locations</button>
</form>

@if(isset($emptyLocations))
    <h2>Empty Locations:</h2>
    @if(count($emptyLocations) > 0)
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Location</td>
                <td>Action</td>
            </tr>
            @foreach($emptyLocations as $location)
                <tr>
                    <td>{{$location['id']}}</td>
                <td>{{ $location['location']}}</td>
            <td>Book</td>
                </tr>
            @endforeach
        </table>
    @else
        <p>No empty locations found.</p>
    @endif
@endif
</body>
</html>
