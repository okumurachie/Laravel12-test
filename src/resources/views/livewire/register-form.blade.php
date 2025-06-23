<div class="register-form">
    <h2 class="register-form__heading content__heading">Register</h2>
    <div class="register-form__inner">
        <form class="register-form__form" wire:submit.prevent="register">
            @csrf
            <div class="register-form__group">
                <label for="name" class="register-form__label">お名前</label>
                <input type="text" class="register-form__input" id="name" placeholder="例: 山田 太郎" wire:model="name">
                <p class="register-form__error-message">
                    @error('name')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="register-form__group">
                <label for="email" class="register-form__label">メールアドレス</label>
                <input type="mail" class="register-form__input" id="email" placeholder="例: test@example.com" wire:model="email">
                <p class="register-form__error-message">
                    @error('email')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="register-form__group">
                <label for="password" class="register-form__label">パスワード</label>
                <input type="password" class="register-form__input" id="password" placeholder="例: coachtech1106" wire:model="password">
                <p class="register-form__error-message">
                    @error('password')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="register-form__group">
                <label for="password" class="register-form__label">確認用パスワード</label>
                <input type="password" class="register-form__input" id="password_confirmation" wire:model="password_confirmation">
            </div>
            <input type="submit" class="register-form__btn btn" value="登録">
        </form>
    </div>
</div>