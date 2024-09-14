@extends('layouts.base')
@section('title', $bb->title)
@section('main')
        <h1 class="my-3 text-center">Details</h1>
        <hr style="border: 3px solid white"/>
        <h2>{{ $bb->title }}</h2>
        <p>{{ $bb->content }}</p>
        <p>{{ $bb->price }} UAH.</p>
        <p><a class="text-white" href="{{ route('index')}}">Back to list</a></p>
    </div>
@endsection
