<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Szakdoga;

class SzakdogaController extends Controller
{
    public function index(){
       
        $szakdoga = Szakdoga::all();

        return response()->json($szakdoga);
    }

    public function post(Request $request){
        $szakdoga=new Szakdoga();
        $szakdoga->szakdoga_nev=$request->szakdoga_nev;
        $szakdoga->github_link=$request->github_link;
        $szakdoga->oldallink=$request->oldallink;
        $szakdoga->tagokneve=$request->tagokneve;
    

        $szakdoga->save();
        
    }

    public function update(Request $request, $id){
        $szakdoga=Szakdoga::find($id);
        $szakdoga->szakdoga_nev=$request->szakdoga_nev;
        $szakdoga->github_link=$request->github_link;
        $szakdoga->oldallink=$request->oldallink;
        $szakdoga->tagokneve=$request->tagokneve;
        $szakdoga->update();
       
       
    }

    public function delete($id){
       
        $szakdoga=Szakdoga::find($id);
        $szakdoga->delete();
    }
}
