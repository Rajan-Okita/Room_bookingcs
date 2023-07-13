<h1>Timetables</h1>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Subject</td>
        <td>location</td>
        <td>Slots</td>
        <td>Day</td>
        <td>Start time</td>
        <td>End time</td>
        <td>Operation</td>
    </tr>
    @foreach($timetables as $timetable)
        <tr>
            <td>{{$timetable['id']}}</td>
            <td>{{$timetable['subject']}}</td>
            <td>{{$timetable['location']}}</td>
            <td>{{$timetable['slots']}}</td>
            <td>{{$timetable['days']}}</td>
            <td>{{$timetable['start_time']}}</td>
            <td>{{$timetable['end_time']}}</td>
            <td><a href={{"clear/".$timetable['id']}}>Delete</a>
                <a href={{"update/".$timetable['id']}}>Edit</a>
            </td>
        </tr>
    @endforeach
</table>

<span>
    {{$timetables->links()}}
</span>

<style>
    .w-5{
        display:none;
    }
</style>
