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
                            <a class="nav-link active" aria-current="page" href="dashboard">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rooms">Rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gettimetables">View Time Table</a>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link btn btn-sm btn-success" href="booking">Booking</a>--}}
{{--                        </li>--}}
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


        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ URL('img/IMG_1913.jpg_resized-scaled.jpg')  }}" class="d-block w-100" alt="placeholder">
                </div>
                <div class="carousel-item">
                    <img src="{{ URL('img/IMG_1913.jpg_resized-scaled.jpg')  }}" class="d-block w-100" alt="placeholder">
                </div>
                <div class="carousel-item">
                    <img src="{{ URL('img/IMG_1913.jpg_resized-scaled.jpg')  }}" class="d-block w-100" alt="placeholder">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <div class="container my-4 ">
            <h1 class="text-center border-bottom">Services</h1>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </x-slot>
</x-app-layout>
</body>
</html>
