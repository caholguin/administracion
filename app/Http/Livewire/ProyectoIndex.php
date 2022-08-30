<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ProyectoPP;
use Livewire\WithPagination;

class ProyectoIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    } 

    public function render()
    {
        $proyectos = ProyectoPP::orderBy('id','desc')->where('nombre', 'LIKE' , '%' . $this->search . '%')
        ->orwhere('comuna', 'LIKE' , '%' . $this->search . '%')->orwhere('lineaTematica', 'LIKE' , '%' . $this->search . '%')
        ->orwhere('dependencia', 'LIKE' , '%' . $this->search . '%')
        ->orwhere('valorTotal', 'LIKE' , '%' . $this->search . '%')
        ->orwhere('posicion', 'LIKE' , '%' . $this->search . '%')
        ->paginate('8');
        
        return view('livewire.proyecto-index',compact('proyectos'));

       
    }
}
