

<!doctype html>
<head>
    <title>
        Admin Page
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
                <h4>Admin</h4>
                <hr>
                <form action="{{route('add-subjects')}}" method="post">
                    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                        @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                    @csrf
                    <div class="form-group">
                    <label for="Subject">Subject</label>
                    <input type="text" name="subject" placeholder="Enter subject" value="{{old('subject')}}">
                        <span class="text-danger">@error('subject'){{$message}} @enderror </span>
                    </div>
                    <div class="form-group">
                        <label for="Location">Location</label>
                        <input type="text" name="location" placeholder="Enter subject location" value="{{old('location')}}">
                        <span class="text-danger">@error('location'){{$message}} @enderror
                    </div>
                        <div class="form-group">
                            <label for="Slots">Slots</label>
                            <input type="number" name="slots" placeholder="Enter number of slots" value="{{old('slots')}}">
                            <span class="text-danger">@error('slots'){{$message}} @enderror
                        </div>
                    <div class="form-group">
                        <label for="Day of week">Day of week</label>
                        <input type="text" name="days" placeholder="Enter day" value="{{old('days')}}">
                        <span class="text-danger">@error('days'){{$message}} @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="Start time">Start time</label>
                        <input type="time" name="start_time" value="{{old('start_time')}}">
                        <span class="text-danger">@error('start_time'){{$message}} @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="End time">End time</label>
                        <input type="time" name="end_time" value="{{old('end_time')}}">
                        <span class="text-danger">@error('end_time'){{$message}} @enderror
                    </div>
                        <br>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Add value</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

