<h1>Update Products</h1>

<form action="/edit" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <label for="name">Subject</label> <br>
    <input type="text" name="subject" value="{{$data['subject']}}" > <br><br>
    <label for="email">Location</label><br>
    <input type="text" name="location" value="{{$data['location']}}"> <br><br>
    <label for="email">Slots</label><br>
    <input type="text" name="slots" value="{{$data['slots']}}"> <br><br>
    <label for="email">Day</label><br>
    <input type="text" name="days" value="{{$data['days']}}"> <br><br>
    <label for="email">Start time</label><br>
    <input type="text" name="start_time" value="{{$data['start_time']}}"> <br><br>
    <label for="email">End time</label><br>
    <input type="text" name="end_time" value="{{$data['end_time']}}"> <br><br>
    <button type="submit">Update</button>
</form>
