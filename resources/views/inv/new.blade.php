<form action="/api/invs" method="post">
    {{csrf_field()}}
    <select name="appeared">
        <option value="1">appered</option>
        <option value="0">not appered</option>
    </select>
    <select name="event_id">
        @foreach ($events as $event)
            <option value="{{$event->event_id}}">{{$event->date}}</option>
        @endforeach
    </select>
    <select name="user_id">
        @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>
    <input type="submit" value="Ok">
</form>