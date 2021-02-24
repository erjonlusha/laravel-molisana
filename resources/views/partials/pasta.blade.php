

<h2>{{$title}}</h2>
<div class=" d_flex wrap">
    @foreach ($pasta as $key => $item)  
        @if($item['tipo'] === $type)
            <a href="{{ route('prodotto', $key) }}" class="img_pasta">
                <img src="{{ $item['src'] }}" alt="">
            </a>
        @endif
    @endforeach
</div>

