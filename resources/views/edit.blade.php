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
        <h1>Редактировать профиль</h1>
        @if (Session::has('error'))
        <div class="alert alert-info">{{ Session::get('error') }}</div>
     @endif
     @if (Session::has('suscces'))
     <div class="alert alert-info">{{ Session::get('suscces') }}</div>
  @endif
    <form enctype="multipart/form-data" action="{{route('update')}}" method="POST">
            @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Имя</label>
        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$result->nama}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$result->email}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">phone</label>
            <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$result->phone}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">salary</label>
            <input type="text" name="salary" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$result->salary}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">photo</label>
            <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$result->photo}}">
          </div>
          {{-- <div class="form-group">
            <label for="exampleInputEmail1">должность</label>
            <input type="text" name="position" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          </div> --}}
        <input type="hidden" name="id" value="{{$result->id}}">
        
        
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif          
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>