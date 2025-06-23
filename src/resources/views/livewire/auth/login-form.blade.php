<div class="login__form">
    <h2 class="login-form__heading content__heading">Login</h2>
    <div class="login-form__inner">
        <form class=login-form__form wire:submit.prevent="login">
            @csrf
            <div class="login-form__group">
                <label for="email" class="login-form__label">メールアドレス</label>
                <input type="mail" class="login-form__input" id="email" placeholder="例: test@example.com" wire:model="email">
                <p class="login-form__error-message">
                    @error('email')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="login-form__group">
                <label for="password" class="login-form__label">パスワード</label>
                <input type="password" class="login-form__input" id="password" placeholder="例: coachtech1106" wire:model="password">
                <p class="login-form__error-message">
                    @error('password')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <input type="submit" class="login-form__btn btn" value="ログイン">
        </form>
    </div>
</div>