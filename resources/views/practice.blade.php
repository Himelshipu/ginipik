<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Practice </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
<div class="container mt-4">

{{--
    {{$posts->id}} <br>
    {{$posts->user_id}} <br>
    {{$posts->title}}<br>
    {{$posts->body}}
    --}}



    <table class="table table-bordered">
        <thead>
        <tr>
            <th width="10%">User Id</th>
            <th>Title</th>
            <th>body</th>
            <th width="10%">Posted on</th>
        </tr>
        </thead>

        <tbody>
       @foreach($posts as $item)
            <tr>
                <td>{{$item->user_id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->body}}</td>
                <td>{{$item->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>

</html>
