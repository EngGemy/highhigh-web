@extends('layouts.app')

@section('title', '2FA Home')

@section('content')
    <div class="container flex flex-1 flex-col justify-center">
        <div class="mx-auto w-full max-w-[360px] text-center">
            <p class="mb-8 text-lg">تفعيل المصادقة الثنائية</p>

            <div class="space-y-4">
                <a href="{{ route('2fa.otp') }}" class="twofa-box">
                    <img src="{{ asset('assets/images/icons/conversation.svg') }}" class="twofa-box__icon" alt="" />
                    <div class="twofa-box__content">
                        <p>رسالة نصية</p>
                        <p>+213 559228881</p>
                    </div>
                    <svg class="twofa-box__arrow">
                        <use href="{{ asset('assets/images/icons/sprite.svg#arrow-nonline') }}"></use>
                    </svg>
                </a>
                <a href="{{ route('2fa.qr') }}" class="twofa-box">
                    <img src="{{ asset('assets/images/icons/google2fa.svg') }}" class="twofa-box__icon" alt="" />
                    <div class="twofa-box__content">
                        <p>تطبيق المصادقة الثنائية</p>
                        <p>ستجد الكود داخل التطبيق</p>
                    </div>
                    <svg class="twofa-box__arrow">
                        <use href="{{ asset('assets/images/icons/sprite.svg#arrow-nonline') }}"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
@endsection
