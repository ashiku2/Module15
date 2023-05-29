<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form action="{{ url('/') }}/form" method="post">
    @csrf
    <div class="container">
        <h1 class="text-center">
            Registration
        </h1>

        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" pattern=".{2,}" title="Minimum length 2" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" pattern=".{8,}" title="Password minimum length 8" class="form-control">
        </div>

        <button class="btn btn-primary">Submit</button>
    </div>
</form>
</body>
</html>
