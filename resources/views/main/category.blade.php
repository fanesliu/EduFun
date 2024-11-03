@extends('layouts.master')
@section('content')
    <div class="container">
        <h3>{{$category->name}}</h3>
        @include('components.article_card', ['article'=>$category->article])
    </div>
@endsection