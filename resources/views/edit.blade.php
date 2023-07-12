<h1>Update Member</h1>

<form action="/edit" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <label for="name">Name</label> <br>
    <input type="text" name="name" value="{{$data['name']}}" > <br><br>
    <label for="email">Email</label><br>
    <input type="text" name="email" value="{{$data['email']}}"> <br><br>
    <button type="submit">Update</button>
</form>
