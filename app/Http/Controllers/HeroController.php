<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;

class HeroController extends Controller
{
    public function index(){

        $heroes = Hero::all(); //me traigo todos los heroes de la base de datos
        return view('admin.heroes.index',['heroes'=>$heroes]); // los muestro en la vista
    }

    public function create(){
        return view('admin.heroes.create');
    }

    //guarda los elementos del formulario
    public function store(Request $request){

     return $this->saveHero($request,null);

    }

    public function edit($id){
        $hero= Hero::find($id);

        return view('admin.heroes.edit',['hero'=>$hero]);
    }

    public function update($id,Request $request){

        return $this->saveHero($request,$id);
    }

    public function destroy($id){
        $hero= Hero::find($id);

        $filePath=public_path() . '/images/heroes/' . $hero->img_path;
        \Illuminate\Support\Facades\File::delete($filePath);

        $hero->delete();
        return redirect()->route('heroes.index');
    }

    public function saveHero(Request $request,$id){
        if ($id){
            $hero= Hero::find($id);
        }else {
            $hero= new Hero();
            $hero->xp = 0;
            $hero->level_id=1;
        }
       
        $hero->name=$request->input('name');
        $hero->hp=$request->input('hp');
        $hero->atq=$request->input('atq');
        $hero->def=$request->input('def');
        $hero->luck=$request->input('luck');
        $hero->coins=$request->input('coins');
        if ($request->hasFile('img_path')){
            $file=$request->file('img_path');
            $name= time()."_". $file->getClientOriginalName();
            $file->move(public_path().'/images/heroes',$name);
            $hero->img_path=$name;

        }

        $hero->save();

        return redirect()->route('heroes.index');
    }


}
