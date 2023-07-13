<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrator Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="bg-dark col-auto col-md-2 min-vh-100">
            <div class="bg-dark p-2">
                <a class="d-flex align-items-center text-decoration-none text-white mt-1">
                    <span class="fs-4 d-none d-sm-inline">Side Menu</span>
                </a>
                <ul class="nav nav-tabs flex-column mt-4">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" aria-current="page">
                            <i class="fs-5 fa fa-gauge"></i> <span class="fs-4 ms-2 d-none d-sm-inline">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                            <li><a class="nav-link text-white" href="{{url('/timetable')}}">View timetable</a></li>
                            <li><a class="nav-link text-white" href="{{url('/admin')}}">Add timetable</a></li>
                    </li>

                    <li class="nav-item">
{{--                        <a class="nav-link text-white" href="{{ route('category.create') }}">--}}
                            Create Category
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('/members') }}">
                            <i class="fs-5 fa-solid fa-users"></i> <span class="fs-4 ms-2 d-none d-sm-inline">Users</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div>
            @yield('content')
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>
</html>
