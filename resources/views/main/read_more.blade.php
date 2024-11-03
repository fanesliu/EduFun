@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="py-5">
            <h1>{{$article->category->name}}</h1>
            <a class="fs-3 text-dark text-decoration-none">{{$article->title}}</a>
        </div>
        <div class="d-flex justify-content-center" style="border-radius: 40px">
            <img class="rounded rounded-40 img-thumbnail w-75" src="{{ asset('images/course/' . $article->id . '.png') }}"
                alt="img">
        </div>
        <div class="p-5 d-flex flex-column gap-3">
            <span>{{ $article->created_at->format('d M Y') }} | by: {{ strstr($article->author->name, ' ', true) }}</span>
            <p class="fs-5">{!! nl2br($article->desc) !!}</p>
        </div>
    </div>
@endsection
