<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
            @if (Session::has('error'))
            <div class="alert alert-info">{{ Session::get('error') }}</div>
         @endif
    <form action="{{route('admin')}}" method="GET">
            <div class="form-group">
                <label for="exampleInputEmail1">Поиск</label>
                <input type="text" name="find" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="поиск">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        @foreach ($query as $item)
            {{$item->id}}
        @endforeach
        <div>
               
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>