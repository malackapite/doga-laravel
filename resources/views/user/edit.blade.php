<form action="/api/users/{{$user->id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="text" name="name" value="{{$user->name}}" placeholder="Name">
    <input type="text" name="email" value="{{$user->email}}" placeholder="e-mail">
    <input type="text" name="gender" value="{{$user->gender}}" placeholder="Gender">
    <input type="submit" value="Ok">
</form>