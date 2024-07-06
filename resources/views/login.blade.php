@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <header class="mb-6 text-center">
        <h1 class="mb-4 text-sm font-bold md:text-base lg:text-xl">
            تسجيل الدخول
        </h1>
    </header>

    <form action="{{ route('login.submit') }}" method="POST" class="form mb-6">
        @csrf
        <div class="mb-6 flex items-center gap-6">
            <label class="form__radio">
                <input type="radio" name="loginWith" id="loginWithPhoneInput" value="phone" autocomplete="off" />
                رقم الهاتف
            </label>
            <label class="form__radio">
                <input type="radio" name="loginWith" id="loginWithEmailInput" value="email" autocomplete="off" checked />
                الايميل
            </label>
        </div>

        <div id="loginWithEmail" class="form__group">
            <div class="form__field">
                <label class="form__label" for="email">البريد الالكتروني</label>
                <input id="email" name="email" class="form__input" type="email" value="{{ old('email') }}" />
                @error('email')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="form__field">
                <label class="form__label" for="password">كلمة المرور</label>
                <input id="password" name="password" class="form__input" type="password" />
                @error('password')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div id="loginWithPhone" class="form__group hidden">
            <div class="form__field">
                <label class="form__label" for="tel">رقم الهاتف <span>*</span></label>
                <div class="flex items-center gap-2">
                    <input id="tel" name="phone" class="form__input flex-1" type="tel" value="{{ old('phone') }}" />
                    <div class="country-select max-w-28">
                        <select class="form__input" id="countrySelect" name="country_code">
                            @foreach($countries as $country)
                                <option value="{{ $country['code'] }}" data-flag="{{ $country['flag'] }}">
                                    {{ $country['name'] }} ({{ $country['code'] }})
                                </option>
                            @endforeach
                        </select>
                        <img src="{{ $countries[0]['flag'] }}" id="selectedFlag" alt="Selected Flag" />
                    </div>
                </div>
                @error('phone')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form__field">
            <div class="g-recaptcha" data-sitekey="your_site_key"></div>
            @error('g-recaptcha-response')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <label class="form__checkbox" for="terms-checkbox">
            <input type="checkbox" id="terms-checkbox" name="terms" />
            <span></span>
            الموافقة على اتفاقية الاستخدام
        </label>
        @error('terms')
        <span class="text-red-500">{{ $message }}</span>
        @enderror

        <div class="form__group">
            <button class="btn btn--gray btn--md w-full font-bold" type="submit">
                تسجيل الدخول
            </button>

            <a href="#" class="btn btn--md btn--transparent w-full font-bold">
                <svg class="arrow">
                    <use href="{{ asset('assets/images/icons/sprite.svg#arrow-line') }}"></use>
                </svg>
                عودة للخلف
            </a>
        </div>
    </form>

    <p class="text-gray text-center text-xs">
        ليس لديك حساب ؟
        <a href="{{ route('signup') }}" class="font-semibold text-primary">انشاء حساب</a>
    </p>

    <script src="https://www.google.com/recaptcha/api.js"></script>

    <script>
        const loginWithPhoneRadio = document.getElementById("loginWithPhoneInput");
        const loginWithEmailRadio = document.getElementById("loginWithEmailInput");

        const loginWithEmailSection = document.getElementById("loginWithEmail");
        const loginWithPhoneSection = document.getElementById("loginWithPhone");

        loginWithPhoneRadio.addEventListener("change", toggleLoginSection);
        loginWithEmailRadio.addEventListener("change", toggleLoginSection);

        function toggleLoginSection(e) {
            const { value } = e.target;
            loginWithEmailSection.classList.add("hidden");
            loginWithPhoneSection.classList.add("hidden");

            if (value === "phone") {
                loginWithPhoneSection.classList.remove("hidden");
            } else if (value === "email") {
                loginWithEmailSection.classList.remove("hidden");
            }
        }

        const selectElement = document.getElementById("countrySelect");
        const selectedFlagImg = document.getElementById("selectedFlag");

        function updateFlagIcon() {
            const selectedOption = selectElement.options[selectElement.selectedIndex];
            const flagUrl = selectedOption.getAttribute("data-flag");
            selectedFlagImg.src = flagUrl;
        }

        selectElement.addEventListener("change", updateFlagIcon);
        updateFlagIcon();
    </script>
@endsection
