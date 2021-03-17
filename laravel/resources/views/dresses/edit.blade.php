{{-- SEZIONE MAIN ABBIGLIAMENTO EDIT MODIFICA --}}
@extends('layouts.app')

{{-- SEZIONE ABBIGLLIAMENTO EDIT MODIFICA TITLE --}}
@section('title','sezione-create-abbigliamento')

{{-- SEZIONE ABBIGLLIAMENTO EDIT MODIFICA STRUCTURE  --}}
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
        <form action="{{ route('dresses.update', $new->id) }}"  method="post">
            
            {{-- TOKEN  --}}
            @csrf

            {{-- METHODO PUT  --}}
            @method('PUT')

            {{-- BOX INPUT  --}}
            <div class="box-input">

                <div class="form-group">
                    <label for="exampleInputNome1">Nome capo</label>
                    <input name="nome" type="text" class="form-control" id="exampleInputNome1" value="{{ $new->nome }}">
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Marca</label>
                    <select class="form-control" name="marca" id="exampleFormControlSelect1">
                        <option {{ $new->marca == 'Nike' ? 'selected=selected' : '' }} value="Nike">Nike</option>
                        <option {{ $new->marca == 'Adidas' ? 'selected=selected' : '' }} value="Adidas">Adidas</option>
                        <option {{ $new->marca == 'Diadora' ? 'selected=selected' : '' }} value="Diadora">Diadora</option>
                        <option {{ $new->marca == 'Asos' ? 'selected=selected' : '' }} value="Asos">Asos</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Marca</label>
                    <select class="form-control" name="taglia" id="exampleFormControlSelect1">
                        <option {{ $new->taglia == 'XS' ? 'selected=selected' : '' }} value="XS">XS</option>
                        <option {{ $new->taglia == 'S' ? 'selected=selected' : '' }} value="S">S</option>
                        <option {{ $new->taglia == 'M' ? 'selected=selected' : '' }} value="M">M</option>
                        <option {{ $new->taglia == 'L' ? 'selected=selected' : '' }} value="L">L</option>
                        <option {{ $new->taglia == 'XL' ? 'selected=selected' : '' }} value="XL">XL</option>
                        <option {{ $new->taglia == 'XXL' ? 'selected=selected' : '' }} value="XXL">XXL</option>
                        <option {{ $new->taglia == 'XXXL' ? 'selected=selected' : '' }} value="XXXL">XXXL</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPrezzo1">Prezzo</label>
                    <input name="prezzo" type="text" class="form-control" id="exampleInputPrezzo1" value="{{ $new->prezzo }}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descrizione</label>
                    <textarea name="descrizione" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $new->descrizione }}</textarea>
                </div>

            </div>
            {{--END BOX INPUT  --}}
            
            <button type="submit" class="btn btn-primary">Modifica</button>

        </form>
        {{--END FORM NEW DRESS  --}}

    </div>
    {{--END CONTAINER PER FORM  --}}

@endsection    