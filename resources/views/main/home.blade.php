@extends('layouts.master')
@section('content')
<img src="{{ asset('images/hero.png') }}" alt="hero" style="width: 100%; object-fit: cover;">
    <div class="container">
        @include('components.article_card')
    </div>
@endsection