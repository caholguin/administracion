<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Persona;
use Livewire\WithPagination;

class PersonaIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    } 

    public function render()
    {  
        $personas = Persona::orderBy('id','desc')->where('tipoDocumento', 'LIKE' , '%' . $this->search . '%')
        ->orwhere('documento', 'LIKE' , '%' . $this->search . '%')
        ->orwhere('nombres', 'LIKE' , '%' . $this->search . '%')
        ->orwhere('apellidos', 'LIKE' , '%' . $this->search . '%')       
        ->paginate('8');

        return view('livewire.persona-index',compact('personas'));
    }
}
