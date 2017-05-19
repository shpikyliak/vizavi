<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Firms</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<h1>{{$header}}</h1>
<nav>
    <a href="/">All firms</a><br>
    <a href="/messages">Messages</a><br>

    <b>Доп. задания:</b>
    <a href="/firms?phones=0&param=="> a. </a>
    <a href="/firms?phones=2&param=>="> b. </a>
    <a href="/firms?phones=2&param=<"> c. </a>
    <a href="/maxium">d. </a>
    @if(isset($max))
        <p>Phones amount : <b>{{$max}}</b></p>
    @endif
</nav>
<hr>
<div class="container my-content">
    <table class="table">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>Phone</th>
        </tr>
        @foreach($firms as $firm)
            <tr>
                <td>{{$firm->id}}</td>
                <td>{{$firm->name}}</td>
                <td>{{$firm->getPhone()}}</td>
            </tr>
        @endforeach
    </table>

</div>
</body>
</html>