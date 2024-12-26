<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Registrasi')]
class RegisterPage extends Component
{

    public $name;
    public $email;
    public $password;

    // registrasi user
    public function save() {
        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6|max:255',
        ]);

    // save data user ke database
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

    // login user
        auth()->login($user);

    // redirect ke home
        return redirect()->intended();
        
    }

    

    public function render()
    {
        return view('livewire.auth.register-page');
    }
}
