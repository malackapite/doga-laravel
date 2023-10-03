@foreach ($users as $user)
<form action="/api/users/{{$user->id}}" method="post">
    {{csrf_field()}}
    {{method_field('GET')}}
    <input type="submit" value="{{$user->name}}">
</form>
@endforeach