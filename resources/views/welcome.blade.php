<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>To Do Lister</h1>
    <form action="add" method="POST">
        @csrf
        <input type="text" name="event" placeholder="enter activity"><br><br>
        <input type="submit" value="Add">
    </form>

        @foreach($events as $event)
            <p><a href={{"delete/".$event['id']}}>Delete</a>
                      {{$event['event']}}             
                      <a href={{"edit/".$event['id']}}>Edit</a></p>
        @endforeach

</body>
<style>
    h1 {
        font: 300;
        color: gray;
    }

    html {
        /* background-color: #808080; */

    }
</style>
</html>