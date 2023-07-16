<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
<body>
<x-app-layout>
    <x-slot name="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Room-Booking</a>
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
                        <a class="nav-link" href="gettimetables">View Time Table</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active btn btn-sm btn-success" href="booking">Booking</a>
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

    <div class="table-responsive">
        <tr>
            <th>Booking Start Time <span class="text-danger">*</span></th>
            <td><input name="booking_starttime" type="datetime-local" class="form-control booking-starttime"/></td>
        </tr>
        <tr>
            <th>Booking End Time <span class="text-danger">*</span></th>
            <td><input name="booking_endtime" type="datetime-local" class="form-control"/></td>
        </tr>
        <tr>
            <th>Available Rooms <span class="text-danger">*</span></th>
            <td><select class="form-control room-list" name="room_id"></select></td>
        </tr>
        <tr>
            <th>Number Of People<span class="text-danger">*</span></th>
            <td><input name="no_of_people" type="text" class="form-control"/></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" class="btn btn-primary text-dark"/>
            </td>
        </tr>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </x-slot>
</x-app-layout>




</body>
</html>
