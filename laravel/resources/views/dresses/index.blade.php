{{-- SEZIONE MAIN INDEX PRODOTTI  --}}
@extends('layouts.app')

{{-- SEZIONE INDEX PRODOTTI TITLE --}}
@section('title','sezione-index-prodotto')

{{-- SEZIONE INDEX PRODOTTI STRUCTURE  --}}
@section('content')

    <h2>Prodotti</h2>
    <h4><a href="{{ route('dresses.create') }}">Aggiungi un nuovo Prodotto</a></h4>
    
    @if (session('status'))
        <div class="alert alert-primary">
            {{ session('status') }}
        </div>
    @endif

    {{-- BOX GENERAL PRODOTTI  --}}
    <div class="box-prodotti">

        {{-- PRIMO CICLO PER TUTTI PRODOTTI  --}}
        @foreach ($marca as $k => $item)

        {{-- STAMPO LA CHIAVE 'MARCA' --}}
        <h2>{{ $k }}</h2>

        {{-- BOX CONTAINER PRODOTTI  --}}
        <div class="box-container">

            {{--SECONDO CICLO PER OGNI PRODOTTO  --}}
            @foreach ($item as $k => $i)
            
            {{-- BOX PRODOTTO  --}}
            <div class="box-prodotto">
                <p><strong>Prodotto:</strong> <span>{{ $i -> nome }}</span> </p>
                <p><strong>Marca:</strong> <span>{{ $i -> marca }}</span> </p>
                <p><strong>Taglia:</strong> <span>{{ $i -> taglia }}</span> </p>
                <p><a class="btn btn-info" href="{{ route('dresses.show', $i->id) }}">Dettagli</a></p>
                <p><a class="btn btn-warning" href="{{ route('dresses.edit', $i->id) }}">modifica</a></p>
                
                {{-- FORM DELETE DRESS  --}}
                <form action="{{ route('dresses.destroy', $i->id)}}"  method="post">
                    
                    {{-- TOKEN  --}}
                    @csrf

                    {{-- METHODO DELETE  --}}
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Cancella</button>

                </form>
                {{--END FORM DELETE DRESS  --}}

            </div>
            {{--END BOX PRODOTTO  --}}
            
            @endforeach
            {{--END SECONDO CICLO PER OGNI PRODOTTO  --}}
            
        </div>
        {{--END BOX CONTAINER PRODOTTI  --}}
        
        @endforeach
        {{--END PRIMO CICLO PER TUTTI PRODOTTI  --}}

    </div>
    {{--END BOX GENERAL PRODOTTI  --}}

@endsection    