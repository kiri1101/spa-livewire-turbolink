<?php

namespace App\Http\Livewire;

use App\Models\Review;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;
use Stevebauman\Location\Facades\Location;

class Reviews extends Component
{
    use WithFileUploads;

    public $rating;
    public $Name;
    public $email;
    public $comment;
    public $photo;
    public $success = false;

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

    public function save(Request $request)
    {
        $validatedData = $this->validate();
        if(config('app.debug')) {
            $locationData = Location::get('66.102.0.0');
        } else {
            $locationData = Location::get($request->ip());
        }

        try {
            $validatedData['photo'] = $this->photo->store('photos','public');
            $review = new Review;
            $review->name = $validatedData['Name'];
            $review->email = $validatedData['email'];
            $review->comment = $validatedData['comment'];
            $review->rating = $validatedData['rating'];
            $review->photo = $validatedData['photo'];
            $review->location = $locationData->cityName .', '. $locationData->countryName;
            $review->ip_address = $request->ip(); 
            $review->save();

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
