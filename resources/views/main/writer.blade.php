@extends('layouts.master')
@section('content')
<h3 class="left">Our Writers: </h3>
    <div class="container d-flex flex-column p-5 align-items-center">
        <div class="container d-flex flex-row p-5 gap-3 justify-content-between">
            @include('components.writer_card')
        </div>
    </div>
@endsection