<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        $albums=Album::all()->sortByDesc('created_at')->take(3);
        //Tutto ci che ritto prima della get ora un query builder e non posso utilizzarlo. Dopo get diventa una vera e propria collection
        //$albums=Album::where('user_id','2')->orderBy('created_at', 'DESC')->get();
        return view('welcome', compact('albums'));
    }
}
