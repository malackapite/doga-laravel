<form action="/api/orgs" method="post">
    {{csrf_field()}}
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="description" placeholder="Description">
    <input type="submit" value="Ok">
</form>