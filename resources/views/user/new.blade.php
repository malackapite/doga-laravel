<form action="/api/users" method="post">
    {{csrf_field()}}
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="email" placeholder="e-mail">
    <input type="text" name="gender" placeholder="Gender">
    <input type="submit" value="Ok">
</form>