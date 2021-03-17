{{-- SEZIONE MAIN HOME  --}}
@extends('layouts.app')

{{-- SEZIONE HOME TITLE --}}
@section('title','sezione-home')

{{-- SEZIONE HOME STRUCTURE  --}}
@section('content')
    
    {{-- BOX MAIN HOME  --}}
    <div class="main-home">

        {{-- BOX NOME SHOP  --}}
        <div class="box nome-shop">
            <h2>{{ $NomeShop }} ti da il benvenuto</h2>
        </div>
        {{--END BOX NOME SHOP  --}}

        {{-- BOX MARCHE SHOP  --}}
        <h2>Le nostre marche</h2>
        <div class="box marche">
            @foreach ($marche as $item)
                <h3>{{ $item }}</h3>
            @endforeach
        </div>
        {{--END BOX MARCHE SHOP  --}}

        {{-- BOX PRODOTTI HOME  --}}
        <h2>I nostri prodotti</h2>
        <div class="box prodotti-home">
            @foreach ($prodotti as $item)
                <h3>{{ $item }}</h3>
            @endforeach
        </div>
        {{--END BOX MARCHE SHOP  --}}

    </div>
    {{--END BOX MAIN HOME  --}}

@endsection    