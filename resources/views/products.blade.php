@extends('layouts.app') 

@section('content')
    <section class="d_flex">
        @include('partials.pasta', ['title' => "LE LUNGHE", 'type' => "lunga"])
        @include('partials.pasta', ['title' => "LE CORTE", 'type' => "corta"])
        @include('partials.pasta', ['title' => "LE CORTISSIME", 'type' => "cortissima"])
    </section>
@endsection

