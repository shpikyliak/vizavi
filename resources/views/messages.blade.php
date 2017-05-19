<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Messages</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
</head>
<body>
<h1>Cообщения</h1>
@if(Auth::check())
    <h3><a style="float: right" href="/logout">Logout</a></h3>

@else
    <h3><a style="float: right" href="/login">Login</a></h3>

@endif

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
    <hr>
    @include('flash::message')
    @foreach($messages as $message)

        <div class="row">
            <b>{{$message->name}}:</b>
            <p style="padding: 15px;" class="bg-info">{{$message->message}}</p>
            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
            {{$message->created_at}}
        </div>

        @if(Auth::check() && Auth::user()->name == 'admin')
            <a class="btn btn-default" href="/messages/{{$message->id}}/edit">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </a>

            <a class="btn btn-default" href="/messages/{{$message->id}}/delete">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </a>

        @endif
        <hr>
    @endforeach
    <div class="row">
        <h3></h3>
        <form role="form" action="/messages" method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <textarea name="message" id="message" class="form-control" rows="3" required></textarea>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-success" id="send-form">Send</button>
        </form>
    </div>
    <hr>

</div>
</body>
</html>