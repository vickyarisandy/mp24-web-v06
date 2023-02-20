<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Obat;
class SearchPagination extends Component
{
    use WithPagination;
    public $searchTerm;

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
 
        return view('livewire.search-pagination',[
            'obats' => Obat::where('nama_obat','like', $searchTerm)->paginate(8)
        ]);
        return view('livewire.search-pagination');
    }
}
