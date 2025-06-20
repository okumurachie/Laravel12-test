<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LoginForm extends Component
{
    public string $email = '';
    public string $password = '';
    public bool $remember = false;

    public function login()
    {
        $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
        ], $this->remember)) {
            session()->regenerate(); // セッション固定攻撃対策
            return redirect('/'); // ログイン成功後のリダイレクト先
        }

        $this->addError('email', 'メールアドレスまたはパスワードが正しくありません。');
    }
    public function render()
    {
        return view('livewire.auth.login-form');
    }
}
