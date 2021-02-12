@extends('layouts.app') 

@section('content')
    <h1>Pasta</h1>
    <section class="d-flex">
        @foreach ($pasta as $item) 
            @include('partials.pasta')
        @endforeach
    </section>
@endsection