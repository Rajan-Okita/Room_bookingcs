@extends("adminDashboard")
@section("content")
<h1>Members list</h1>

<table border="1">
    <div class="table-responsive">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Operation</td>
    </tr>
    @foreach($members as $member)
    <tr>

        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['email']}}</td>
        <td><a href={{"delete/".$member['id']}}>Delete</a>
        <a href={{"edit/".$member['id']}}>Edit</a>
        </td>
    </tr>
    @endforeach
    </div>
</table>
<span>
    {{$members->links()}}
</span>
@endsection

<style>
    .w-5{
        display:none;
    }
</style>
