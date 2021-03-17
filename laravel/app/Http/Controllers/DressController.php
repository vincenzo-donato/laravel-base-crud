<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;


class DressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ASSEGNO A PRODOTTI TUTTI I DATI PRESI DAL SERVER 
        $prodotti = Dress::all();
        
        // FILTRO I RISULTATI PER MARCA 
        $nike = $prodotti->where('marca','Nike');
        $adidas = $prodotti->where('marca','Adidas');
        $diadora = $prodotti->where('marca','Diadora');
        $asos = $prodotti->where('marca','Asos');

        // ARRAY ASSOCIATIVO 
        $marca = [
            'marca' =>[
                'nike' => $nike,
                'adidas' => $adidas,
                'diadora' => $diadora,
                'asos' => $asos
            ]
        ];

        return view('dresses.index',$marca);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dresses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // USIAMO IL METODO ALL PER OTTENERE GLI ELEMENTI DEL NUOVO OGGETTO IN UN ARRAY 
        $data = $request->all();

        // VALIDIFICAZIONE DELLE REQUEST 
        $request->validate([
            'nome' => 'required|max:50',
            'marca' => 'required|max:50',
            'taglia' => 'required|max:5',
            'prezzo' => 'required|max:6',
            'descrizione' => 'required',
        ]);

        // MAPPO LA MIA TABELLA 
        $new = new Dress;
        
        // SEMPLIFICATO IL PASSAGGIO DI INSERIMENTO CON FILL 
        $new->fill($data);

        // SALVIAMO IL NUOVO CAPO D'ABBIGLIAMENTO 
        $new->save();

        // RETURN QUESTA VOLTA VERRA' REINDIRIZZATA ALLA PAGINA DEI PRODOTTI PER EVITARE CHE IL NUOVO CAPO ESSENDO ANCORA SALVATO VENGA IMPORTATO NELLA TABELLA PIU DI UNA VOLTA  
        return redirect()->route('dresses.index')->with('status','Nuovo Elemento Aggiunto Correttamente');;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dress $dress)
    {

        if($dress){
            $data = [
                'abbigliamento' => $dress
            ];
            return view('dresses.show',$data);
        }

        abort('404');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dress $dress)
    {

        if($dress){
            $data = [
                'new' => $dress
            ];
            return view('dresses.edit',$data);
        }

        abort(404);
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dress $dress)
    {

        // RECUPERO TUTTI I DATI DA EDIT 
        $data = $request->all();

        // VALIDIFICAZIONE DELLE REQUEST 
        $request->validate([
            'nome' => 'required|max:50',
            'marca' => 'required|max:50',
            'taglia' => 'required|max:5',
            'prezzo' => 'required|max:6',
            'descrizione' => 'required',
        ]);

        // SOVRASCRIVO LE EVENTUALI MODIFICHE 
        $dress->update($data);

        // REINDIRIZZO LA PAGE A DRESSES INDEX 
        return redirect()->route('dresses.index')->with('status','Elemento Modificato Correttamente');;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dress $dress)
    {
        // RECUPERO L'ELEMENTO TRAMITE ID E LO CANCELLO CON IL COMANDO DELETE
        $dress->delete();

        // REINDIRIZZO LA PAGE A DRESSES INDEX 
        return redirect()->route('dresses.index')->with('status','Elemento Cancellato Correttamente');
        
    }
}
