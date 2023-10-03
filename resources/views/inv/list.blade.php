@foreach ($invs as $inv)
<form action="/api/invs/{{$inv->id}}" method="post">
    {{csrf_field()}}
    {{method_field('GET')}}
    <input type="submit" value="{{$inv->appeared}}">
    <input type="submit" value="{{$inv->event_id}}">
    <input type="submit" value="{{$inv->user_id}}">
</form>
@endforeach