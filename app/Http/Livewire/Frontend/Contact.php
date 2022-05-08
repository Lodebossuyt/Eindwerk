<?php

namespace App\Http\Livewire\Frontend;

use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    public function submitForm(){

        $contact = $this->validate([
           'name'=>'required',
           'email'=>'required',
           'subject'=>'required',
           'message'=>'required',
        ]);

        $contact['name'] = $this->name;
        $contact['email'] = $this->email;
        $contact['subject'] = $this->subject;
        $contact['message'] = $this->message;

        Mail::to('bossuytlode@gmail.com')->send(new ContactMailable($contact));

        $this->name='';
        $this->email='';
        $this->subject='';
        $this->message='';

        session()->flash('success_message', 'we received your message successfully and will get back to you soon');
    }

    public function render()
    {
        return view('livewire.frontend.contact')->extends('layouts.frontend')->section('content');
    }
}
