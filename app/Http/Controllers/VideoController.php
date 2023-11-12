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
    public function index(): View
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $videos = Video::orderBy('created_at', 'desc')->paginate(8);
        
        return view('accueil.index', [
            'categories' => $categories,
            'videos' => $videos
        ]);
    }
    
    public function store(CreateVideoRequest $request)
    {

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
    // public function store(CreateVideoRequest $request){
    //     $video = Video::create($request->validated());
    //     return redirect()
    //     ->route('index')
    //     ->with('success', "L'article a bien été sauvegarder");
    //  }
}

// ->route('blog.show',['slug' => $post->slug, 'post' => $post->id])