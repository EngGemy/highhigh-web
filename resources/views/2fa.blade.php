<!-- resources/views/2fa.blade.php -->
@extends('layouts.app')

@section('title', '2-Factor Authentication')

@section('content')
    <header class="mb-6 text-center">
        <h1 class="mb-4 text-sm font-bold md:text-base lg:text-xl">
            المصادقة الثنائية
        </h1>
        <p>أدخل رمز المصادقة المرسل إلى هاتفك</p>
    </header>

    <form action="{{ route('verify-2fa') }}" class="form mb-6">
        <div class="form__group">
            <div class="form__field">
                <label class="form__label" for="2fa-code">رمز المصادقة</label>
                <input id="2fa-code" class="form__input" type="text" />
            </div>
        </div>

        <div class="form__group">
            <button class="btn btn--gray btn--md w-full font-bold" type="submit">
                تحقق
            </button>

            <a href="#" class="btn btn--md btn--transparent w-full font-bold" type="submit">
                <svg class="arrow">
                    <use href="{{ asset('assets/images/icons/sprite.svg#arrow-line') }}"></use>
                </svg>
                عودة للخلف
            </a>
        </div>
    </form>
@endsection
