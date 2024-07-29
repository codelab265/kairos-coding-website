<?php

namespace App\Livewire;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Title;
use Livewire\Component;

class Contact extends Component
{
    #[Title('Contact Us')]


    public string $name = '';
    public string $email = '';
    public string $phone = '';
    public string $message = '';

    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'min:10', 'max:11'],
            'message' => ['required', 'string'],
        ];
    }

    public function sendEmail(): void
    {
        $this->validate();

        $data['name'] = $this->name;
        $data['email'] = $this->email;
        $data['phone'] = $this->phone;
        $data['message'] = $this->message;
        Mail::to('example@example.com')->send(new ContactMail($data));
    }
    public function render()
    {
        return view('livewire.contact');
    }
}
