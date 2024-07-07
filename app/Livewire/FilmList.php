<?php

namespace App\Livewire;

use App\Models\Film;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class FilmList extends Component
{
    use WithPagination;

    #[Url()]
    public string $sort = 'desc';

    #[Computed()]
    public function films()
    {
        return Film::orderBy('title', $this->sort)->paginate(10);
    }

    public function render()
    {
        return view('livewire.film-list');
    }
}
