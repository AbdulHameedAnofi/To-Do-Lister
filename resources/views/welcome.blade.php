<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>To Do Lister</h1>
    </header>
    <div class="form">
        <h2>Activity</h2>
        <form action="add" method="POST">
            @csrf
            <input type="text" name="event" placeholder="enter activity"><br><br>
            <button>Add</button>
        </form>
    </div>
        @foreach($events as $event)
            <div class="activities">
                <p><a href={{"delete/".$event['id']}}>Delete</a>
                        {{$event['event']}}             
                    <a href={{"edit/".$event['id']}}>Edit</a>
                </p>
            </div>
        @endforeach

</body>
</html>