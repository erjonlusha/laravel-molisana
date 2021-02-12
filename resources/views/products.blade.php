@extends('layouts.app') 

@section('content')
    <section class="d_flex">
        <h2>LE LUNGHE</h2>
        <div class=" d_flex wrap">
            @foreach ($pasta as $va => $item) 
                @if($item['tipo'] === 'lunga')
                    @include('partials.pasta')
                @endif
            @endforeach
        </div>

        <h2>LE CORTE</h2>
        <div class=" d_flex wrap">
            @foreach ($pasta as $va => $item) 
                @if($item['tipo'] === 'corta')
                    @include('partials.pasta')
                @endif
            @endforeach
        </div>

        <h2>LE CORTISSIME</h2>
        <div class=" d_flex wrap">
            @foreach ($pasta as $va => $item) 
                @if($item['tipo'] === 'cortissima')
                    @include('partials.pasta')
                @endif
            @endforeach
        </div>
    </section>
@endsection

