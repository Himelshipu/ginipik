@extends('layouts.frontend-home')

@section('content')
    <br>
    <div class="conatiner">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered mx-auto" style="width: 90%;">
                <thead>
                <tr>
                    <th scope="col" width="5%">SN</th>
                    <th scope="col" width="20%">Name</th>
                    <th scope="col" width="20%">Address</th>
                    <th scope="col">post Title</th>
                    <th scope="col">Word Number of Post</th>
                </tr>
                </thead>
                <tbody>
                @forelse($posts as $post)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->user->address->address ?? ''}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{str_word_count($post->body)}}</td>
                </tr>
                @empty
                    Nothing
                @endforelse

                </tbody>
            </table>







        </div>

    </div>
    </div>
@endsection
