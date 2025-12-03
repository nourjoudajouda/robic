<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="input-field">
            <i class="material-icons prefix">badge</i>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
            <label for="name">الاسم الكامل</label>
            @error('name')
                <span class="helper-text red-text text-darken-2">{{ $message }}</span>
            @enderror
        </div>

        <div class="input-field">
            <i class="material-icons prefix">mail_outline</i>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
            <label for="email">البريد الإلكتروني</label>
            @error('email')
                <span class="helper-text red-text text-darken-2">{{ $message }}</span>
            @enderror
        </div>

        <div class="row">
            <div class="col s12 m6">
                <div class="input-field">
                    <i class="material-icons prefix">lock</i>
                    <input id="password" type="password" name="password" required autocomplete="new-password">
                    <label for="password">كلمة المرور</label>
                    @error('password')
                        <span class="helper-text red-text text-darken-2">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col s12 m6">
                <div class="input-field">
                    <i class="material-icons prefix">lock_reset</i>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                    <label for="password_confirmation">تأكيد كلمة المرور</label>
                    @error('password_confirmation')
                        <span class="helper-text red-text text-darken-2">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <label class="waves-effect waves-light" style="display:flex;align-items:center;gap:12px;">
            <input type="checkbox" class="filled-in" name="terms" required>
            <span>أوافق على الشروط والأحكام</span>
        </label>

        <button type="submit" class="btn-large waves-effect waves-light" style="width: 100%; margin-top: 24px; background: linear-gradient(135deg, #ff6f61, #d500f9);">
            إنشاء الحساب
        </button>
    </form>

    <div class="auth-footer">
        لديك حساب بالفعل؟
        <a href="{{ route('login') }}" class="deep-purple-text text-darken-2">تسجيل الدخول</a>
    </div>
</x-guest-layout>
