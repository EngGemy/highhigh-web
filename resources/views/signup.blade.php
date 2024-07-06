@extends('layouts.app')

@section('title', 'Sign-up')

@section('content')
    <header class="mb-6 text-center">
        <h1 class="mb-4 text-sm font-bold md:text-base lg:text-xl">
            قم بأنشاء حسابك
        </h1>
        <p>قم بادخل معلوماتك الأساسية من اجل انشاء حسابك</p>
    </header>

    <form action="{{ route('signup.submit') }}" method="POST" class="form mb-6">
        @csrf
        <div class="form__group">
            <div class="form__field">
                <label class="form__label" for="first-name">الاسم الاول</label>
                <input id="first-name" name="first_name" class="form__input" type="text" value="{{ old('first_name') }}" />
                @error('first_name')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="form__field">
                <label class="form__label" for="last-name">الاسم الاخير</label>
                <input id="last-name" name="last_name" class="form__input" type="text" value="{{ old('last_name') }}" />
                @error('last_name')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="form__field">
                <label class="form__label" for="email">البريد الالكتروني</label>
                <input id="email" name="email" class="form__input" type="email" value="{{ old('email') }}" />
                @error('email')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

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

            <div class="form__field">
                <label class="form__label" for="company-name">اسم الشركة</label>
                <input id="company-name" name="company_name" class="form__input" type="text" value="{{ old('company_name') }}" />
                @error('company_name')
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

            <div class="form__field">
                <label class="form__label" for="password_confirmation">تأكيد كلمة المرور</label>
                <input id="password_confirmation" name="password_confirmation" class="form__input" type="password" />
            </div>
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
                تسجيل حساب
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
        لديك حساب بالفعل ؟
        <a href="{{ route('login') }}" class="font-semibold text-primary">تسجيل الدخول</a>
    </p>

    <script>
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
