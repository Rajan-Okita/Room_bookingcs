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
    <input type="text" name="target_day" id="target_day" required>

    <label for="start_time">Start Time:</label>
    <input type="time" name="start_time" id="start_time" required>

    <label for="end_time">End Time:</label>
    <input type="time" name="end_time" id="end_time" required>

    <button type="submit">Find Empty Locations</button>
</form>

@if(isset($emptyLocations))
    <h2>Empty Locations:</h2>
    @if(count($emptyLocations) > 0)
        <ul>
            @foreach($emptyLocations as $location)
                <li>{{ $location }}</li>
            @endforeach
        </ul>
    @else
        <p>No empty locations found.</p>
    @endif
@endif
</body>
</html>
