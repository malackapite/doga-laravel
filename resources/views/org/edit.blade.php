<form action="/api/orgs/{{$org->org_id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="text" name="name" value="{{$org->name}}" placeholder="Name">
    <input type="text" name="description" value="{{$org->description}}" placeholder="Description">
    <input type="submit" value="Ok">
</form>