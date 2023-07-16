

<!doctype html>
<head>
    <title>
        Timetable Page
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
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

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
                <h4>Timetable</h4>
                <hr>
                <form action="{{route('add-subjects')}}" method="post">
                    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                        @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                    @csrf
                    <div class="table-responsive">
                        <tr>
                            <th>Subject</th>
                            <td><input type="text" name="subject" class="form-control" placeholder="Enter subject" value="{{old('subject')}}"/></td>
                            <span class="text-danger">@error('subject'){{$message}} @enderror</span><br>
                        </tr>
                        <tr>
                            <th>Location</th>
                            <td><input type="text" name="location" class="form-control" placeholder="Enter subject location" value="{{old('location')}}"/></td>
                            <span class="text-danger">@error('location'){{$message}} @enderror</span><br>
                        </tr>

                        <tr>
                            <th>Slots</th>
                            <td><input type="number" name="slots" class="form-control" placeholder="Enter number of slots" value="{{old('slots')}}"/></td>
                            <span class="text-danger">@error('slots'){{$message}} @enderror</span><br>
                        </tr>

                        <tr>
                            <th>Day of week</th>
                            <td><input type="text" name="days" class="form-control" placeholder="Enter day" value="{{old('days')}}"/></td>
                            <span class="text-danger">@error('days'){{$message}} @enderror</span><br>
                        </tr>

                        <tr>
                            <th>Start time</th>
                            <td><input type="time" name="start_time" class="form-control" value="{{old('start_time')}}"/></td>
                            <span class="text-danger">@error('start_time'){{$message}} @enderror</span><br>
                        </tr>

                        <tr>
                            <th>End time</th>
                            <td><input type="time" name="end_time" class="form-control" value="{{old('end_time')}}"/></td>
                            <span class="text-danger">@error('end_time'){{$message}} @enderror</span><br>
                        </tr>

                        <tr>
                            <td colspan="2">
                        <button class="btn btn-block btn-primary text-dark" type="submit">Add value</button>
                            </td>
                        </tr>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </x-slot>
</x-app-layout>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

