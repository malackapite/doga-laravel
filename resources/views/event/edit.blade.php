<form action="/api/events/{{$event->event_id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="date" name="date" value="{{$event->date}}">
    <input type="text" name="location" value="{{$event->location}}" placeholder="Location">
    <select name="org_id">
        @foreach ($orgs as $org)
            <option value="{{$org->org_id}}">{{$org->name}}</option>
        @endforeach
    </select>
    <input type="submit" value="Ok">
</form>