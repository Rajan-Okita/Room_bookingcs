
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
<body>
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
                    <a class="nav-link" href="rooms">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="gettimetables">View Time Table</a>
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
<table border="1">
    <tr>
        <td>Id</td>
        <td>Subject</td>
        <td>location</td>
        <td>Slots</td>
        <td>Day</td>
        <td>Start time</td>
        <td>End time</td>
    </tr>
@foreach(session('alltimetables') as $timetable)
        <tr>
            <td>{{ $timetable->id }}</td>
        <td>{{ $timetable->subject }}</td>
        <td>{{ $timetable->location }}</td>
        <td>{{ $timetable->slots }}</td>
        <td>{{ $timetable->days }}</td>
        <td>{{ $timetable->start_time }}</td>
        <td>{{ $timetable->end_time }}</td>
        </tr>

    @endforeach
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</table>
</body>

</html>
