{{-- SEZIONE MAIN CONTATTI  --}}
@extends('layouts.app')

{{-- SEZIONE CONTATTI TITLE --}}
@section('title','sezione-Contatti')

{{-- SEZIONE CONTATTI STRUCTURE  --}}
@section('content')
    
    {{-- BOX CONTATTI  --}}
    <div class="box-contatti">

        <h2>contatti</h2>

        <div class="box">
            <p> <strong>Email:</strong>  <span>{{ $email }}</span> </p>
            <p> <strong>Num Tel:</strong>  <span>{{ $tel }}</span> </p>
            <p> <strong>Sede:</strong>  <span>{{ $sede }}</span> </p>
        </div>

    </div>
    {{--END BOX CONTATTI  --}}

@endsection    