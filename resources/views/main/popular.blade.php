@extends('layouts.master')
@section('content')
    <div class="container">
        <h3>Popular</h3>
        @include('components.article_card', ['article'=> $article])
        <div class="d-flex justify-content-center pt-3">
            {{$article->links()}}
        </div>
    </div>
@endsection