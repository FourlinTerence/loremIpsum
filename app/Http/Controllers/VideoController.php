<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVideoRequest;
use App\Models\Category;
use App\Models\User;
use App\Models\Video;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index (): View { 
        $video = new Video();
        $categories = Category::all();
        return view('accueil.index', [
            'categories' => $categories,
            'video' => $video    
    ]);
    }
    
    public function store(CreateVideoRequest $request) {
        $data = $request->validated(); // Récupérez les données validées du formulaire
    
        // Validation de l'ID de l'utilisateur
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
    
    

    // public function store(CreateVideoRequest $request){
    //     $video = Video::create($request->validated());
    //     return redirect()
    //     ->route('index')
    //     ->with('success', "L'article a bien été sauvegarder");
    //  }
}

// ->route('blog.show',['slug' => $post->slug, 'post' => $post->id])