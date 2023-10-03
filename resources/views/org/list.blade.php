@foreach ($orgs as $org)
<form action="/api/orgs/{{$org->org_id}}" method="post">
    {{csrf_field()}}
    {{method_field('GET')}}
    <input type="submit" value="{{$org->name}}">
</form>
@endforeach