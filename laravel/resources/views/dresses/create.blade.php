{{-- SEZIONE MAIN ABBIGLIAMENTO CREATE --}}
@extends('layouts.app')

{{-- SEZIONE ABBIGLLIAMENTO CREATE TITLE --}}
@section('title','sezione-create-abbigliamento')

{{-- SEZIONE ABBIGLLIAMENTO CREATE STRUCTURE  --}}
@section('content')
    
    {{-- CONTAINER PER FORM  --}}
    <div class="container">
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- FORM NEW DRESS  --}}
        <form action="{{ route('dresses.store') }}"  method="post">
            
            {{-- TOKEN  --}}
            @csrf

            {{-- METHODO POST  --}}
            @method('POST')

            {{-- BOX INPUT  --}}
            <div class="box-input">

                <div class="form-group">
                    <label for="exampleInputNome1">Nome capo</label>
                    <input name="nome" type="text" class="form-control" id="exampleInputNome1">
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Marca</label>
                    <select class="form-control" name="marca" id="exampleFormControlSelect1">
                        <option >--Seleziona--</option>
                        <option value="Nike">Nike</option>
                        <option value="Adidas">Adidas</option>
                        <option value="Diadora">Diadora</option>
                        <option value="Asos">Asos</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Marca</label>
                    <select class="form-control" name="taglia" id="exampleFormControlSelect1">
                        <option >--Seleziona--</option>
                        <option value="XS">XS</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                        <option value="XXXL">XXXL</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPrezzo1">Prezzo</label>
                    <input name="prezzo" type="text" class="form-control" id="exampleInputPrezzo1">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descrizione</label>
                    <textarea name="descrizione" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

            </div>
            {{--END BOX INPUT  --}}
            
            <button type="submit" class="btn btn-primary">Aggiungi</button>

        </form>
        {{--END FORM NEW DRESS  --}}

    </div>
    {{--END CONTAINER PER FORM  --}}

@endsection    