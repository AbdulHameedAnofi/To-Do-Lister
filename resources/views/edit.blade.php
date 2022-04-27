

<link rel="stylesheet" href="{{url('css/app.css')}}">
    <header>
        <h1>To Do Lister</h1>
    </header>
    <div class="form">
        <form action="/edit" method="POST">
            <h2>Edit Activity</h2>
            @csrf
            <input type="hidden" name="id" value="{{$event['id']}}">
            <input type="text" name="event" value="{{$event['event']}}" placeholder="enter activity"><br><br>
            <button>Edit</button>
        </form>
    </div>
</form>