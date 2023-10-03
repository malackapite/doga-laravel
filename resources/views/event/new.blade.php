<form action="/api/events" method="post">
    {{csrf_field()}}
    <input type="date" name="date">
    <input type="text" name="location" placeholder="Location">
    <select name="org_id">
        @foreach ($orgs as $org)
            <option value="{{$org->org_id}}">{{$org->name}}</option>
        @endforeach
    </select>
    <input type="submit" value="Ok">
</form>