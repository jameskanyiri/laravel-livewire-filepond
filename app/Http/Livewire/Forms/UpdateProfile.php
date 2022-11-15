<?php

namespace App\Http\Livewire\Forms;

use App\Models\Files;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateProfile extends Component
{
    use WithFileUploads;

    public $image;
    public $images;
    public function updateProfile(): void
    {
        $files = new Files();
        $files->image = $this->image;
        $files->images = $this->images;
        $files->save();
        session()->flash('message', 'File has been uploaded');
    }
    public function render()
    {
        return view('livewire.forms.update-profile');
    }
}
