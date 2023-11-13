<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVideoRequest;
use App\Models\Category;
use App\Models\User;
use App\Models\Video;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LecteurController extends Controller
{
    
    
    public function index(string $slug):RedirectResponse | View
    {    
        $video = Video::where('slug', $slug)->firstOrFail();
        $categories = Category::all();
    
        if($video->slug !== $slug){
            return to_route('lecteur',['slug' => $video->slug, 'id' => $video->id]);
        }
    
        return view('lecteur.index', [
            'video' => $video,
            'categories' => $categories
        ]);


        
    }
    
    
    public function store(CreateVideoRequest $request) {
        
        $data = $request->validated(); 
    
        $user_id = $request->input('user_id');
        $user = User::find($user_id);
    
        if (!$user) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', "ID d'utilisateur invalide.");
        }
    
        $video = Video::create($data); 
    
        return redirect()
            ->route('index')
            ->with('success', "La vidéo a bien été sauvegardée");
    }

    
    public function updatea(Video $video, CreateVideoRequest $request){
        
        dd('toto');
        $data = $request->validated();
        dd($data);
        
        $video->update($data);
        
        return redirect()
        ->route('lecteur',['slug' => $video->slug])
        ->with('success', "La vidéo a bien été modifié");
    }
    
}
