<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
<body>
<x-app-layout>
    <x-slot name="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="dashboard">Room-Booking</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="dashboard">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="rooms">Rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gettimetables">View Time Table</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-sm btn-success" href="booking">Booking</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About Us
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="contacts">Contacts</a></li>
                                <li><a class="dropdown-item" href="https://strathmore.edu/">Socials</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div>
            <form action="{{ route('find.empty.locations') }}" method="post">
            @csrf
            <label for="target_day">Day:</label>
                <select name="target_day" id="target_day">
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                </select>

            <label for="start_time">Start Time:</label>
            <input type="time" name="start_time" id="start_time" required value="{{old('start_time')}}"/>

            <label for="end_time">End Time:</label>
            <input type="time" name="end_time" id="end_time" required value="{{old('end_time')}}"/><br><br>
                <button type="submit">Find Empty Locations</button>
            </form>

            @if(isset($emptyLocations))
                <h2>Empty Locations:</h2>
                @if(count($emptyLocations) > 0)
                    <table border="1">
                        <tr>
                            <td>Location</td>
                            <td>Action</td>
                        </tr>
                        @foreach($emptyLocations as $location)
                            <tr>
                                <td>{{ $location }}</td>
                                <td>Book</td>
                            </tr>
                        @endforeach
                    </table>
                @else
                    <p>No empty locations found.</p>
@endif
@endif
</div>
    </x-slot>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>
</body>
</html>
