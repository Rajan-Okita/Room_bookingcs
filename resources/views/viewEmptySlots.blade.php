
@if(isset($emptyLocations))
    <h2>Empty Locations:</h2>

    @if(count($emptyLocations) > 0)
        <ul>
            @foreach($emptyLocations as $location)
                <li>
                {{ $location['location']}}
                </li>
            @endforeach
        </ul>
    @else
        <p>No empty locations found.</p>
    @endif
@endif

