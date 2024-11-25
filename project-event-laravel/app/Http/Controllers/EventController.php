<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    //rota principal da aplicação
    public function index(){

        $events = Event::all();

        return view('welcome', ['events' => $events]);
    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){

        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        // UPLOAD DE IMG
        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now') .".". $extension ); //gerar um nome único para a imagem

            $requestImage->move(public_path('img/events'), $imageName); //mover a imagem para a pasta img/events

            $event->image = $imageName;
        }


        $event->save(); //salvar os dados no banco

        return redirect('/')->with('msg', 'Evento criado com sucesso!'); //redirecionar para página após salvar
    }
}
