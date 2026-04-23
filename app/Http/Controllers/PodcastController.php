<?php

namespace App\Http\Controllers;
use App\Service\AppleMusic;
use Illuminate\View\View;

class PodcastController extends Controller {
    public function __construct(protected AppleMusic $apple)
    {

    }

    public function show(string $id) : View {
        return view('appMusic.show', [
            'podcast' => $this->apple->findPodcast($id)
        ]);
    }
}