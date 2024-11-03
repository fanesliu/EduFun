@extends('layouts.master')
@section('content')
    <div class="container p-2">
        <div class="col-auto">
            <img src="{{ asset('images/author/' . $author->id .'.png') }}" width="100" class="rounded rounded-circle img-thumbnail shadow bg-body row-1" alt="...">
        </div>
        <div class="col">
            <h3 class="mb-0 text-bold">{{$author->name}}</h3>
            <h4 class="text-muted">{{$author->specialist}}</h4>
        </div>
        @include('components.article_card', ['article'=>$author->article])
    </div>
@endsection