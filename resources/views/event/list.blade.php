@foreach ($events as $event)
<form action="/api/events/{{$event->event_id}}" method="post">
    {{csrf_field()}}
    {{method_field('GET')}}
    <input type="submit" value="{{$event->date}}">
    <input type="submit" value="{{$event->location}}">
</form>
@endforeach