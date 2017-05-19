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

<div style="padding: 20px">
    <form class="form-horizontal" method="post" action="/login">
        <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-5">
                <input type="text" name="email" class="form-control"  placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Password</label>
            <div class="col-sm-5">
                <input name="password" type="password" class="form-control" placeholder="Password">
            </div>
        </div>

        {{ csrf_field() }}

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>

    </form>

</div>
</body>
</html>