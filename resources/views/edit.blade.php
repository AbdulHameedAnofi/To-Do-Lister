
<h1>Edit Activity</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$event['id']}}">
    <input type="text" name="event" value="{{$event['event']}}"><br><br>
    <input type="submit" value="Edit">
</form>