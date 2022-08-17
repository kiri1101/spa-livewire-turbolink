<?php

namespace App\Http\Livewire;

use App\Models\Review;
use Livewire\Component;
use Livewire\WithFileUploads;

class Reviews extends Component
{
    use WithFileUploads;

    public $rating;
    public $Name;
    public $email;
    public $comment;
    public $photo;
    public $success = false;
    public $flash;

    public function render()
    {
        $data['title'] = 'Modern Automobiles';
        $data['sub_title'] = 'Reviews';
        $data['lists'] = Review::paginate(10);
        return view('livewire.reviews',$data)->layout('layouts.app',$data);
    }

    protected $rules = [
        'Name' => 'required|string',
        'email' => 'required|email',
        'rating' => 'required|in:1,2,3,4,5',
        'comment' => 'required',
        'photo' => 'required|image', // 1MB Max
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validatedData = $this->validate();

        try {
            $validatedData['photo'] = $this->photo->store('photos','public');
            $review = new Review;
            $review->name = $validatedData['Name'];
            $review->email = $validatedData['email'];
            $review->comment = $validatedData['comment'];
            $review->rating = $validatedData['rating'];
            $review->photo = $validatedData['photo'];     
            $review->save();

            $this->flash = 'Review created successfully!!!';
        } catch (\Throwable $th) {
            session()->flash('error', 'Something wnet wrong!!!');
        }

        $this->resetValidation();
        $this->reset();
        $this->success = true;
    }

    public function close()
    {
        $this->success = false;
    }
}
