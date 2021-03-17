{{-- SEZIONE MAIN ABBIGLIAMENTO SHOW  --}}
@extends('layouts.app')

{{-- SEZIONE ABBIGLLIAMENTO SHOW TITLE --}}
@section('title','sezione-show-abbigliamento')

{{-- SEZIONE ABBIGLLIAMENTO SHOW STRUCTURE  --}}
@section('content')

    {{-- BOX GENERAL PRODOTTI  --}}
    <div class="box-prodotti">
        <p><strong>Prodotto ID:</strong> <span>{{ $abbigliamento['id'] }}</span> </p>
        <p><strong>Prodotto:</strong> <span>{{ $abbigliamento['nome'] }}</span> </p>
        <p><strong>Marca:</strong> <span>{{ $abbigliamento['marca'] }}</span> </p>
        <p><strong>Taglia:</strong> <span>{{ $abbigliamento['taglia'] }}</span> </p>
        <p><strong>Prezzo: € </strong> <span>{{ $abbigliamento['prezzo'] }}</span> </p>
        <p><strong>Descrizione:</strong> <span>{{ $abbigliamento['descrizione'] }}</span> </p>
    </div>
    {{--END BOX GENERAL PRODOTTI  --}}

@endsection    