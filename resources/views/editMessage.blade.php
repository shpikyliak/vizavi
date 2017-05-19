<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Messages</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
</head>
<body>
<h1>Edit</h1>
<div class="col-md-6">
<form role="form" action="/messages/{{$message->id}}/edit" method="post">
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{$message->email}}" required>
    </div>
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Name" required value="{{$message->name}}">
    </div>
    <div class="form-group">
        <textarea name="message" id="message" class="form-control" rows="3" required>{{$message->message}}</textarea>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" class="btn btn-success" id="send-form">Send</button>
</form>
<div
</body>
</html>