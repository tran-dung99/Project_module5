<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route("uploadSong")}}" enctype="multipart/form-data" method="post">
    @csrf
    <span>Tên bài hát:</span>
    <input name="nameSong">
    <span>Thể loại:</span>
    <input name="category">
    <span>Ca sĩ:</span>
    <select name="singer" >
        @foreach($singers as $value)
        <option value="{{$value->id}}">{{$value->name}}</option>
        @endforeach
    </select>
    <span>Link:</span>
    <input type="file" name="file">
    <span>Image</span>
    <input type="file" name="imageFile">
    <input type="submit" class="btn btn-success" value="Upload Song">
</form>
{{--// create play list--}}
<form action="{{route("playlist")}}" enctype="multipart/form-data" method="post">
    @csrf
    <span>Tên play list:</span>
    <input name="playlist">
    <span>Image</span>
    <input type="file" name="fileimage">
    <input type="submit" class="btn btn-success" value="Create PLay List">
</form>
</body>
</html>
