@extends('layouts.app')

@section('title', '2FA QR Code')

@section('content')
    <div class="container flex flex-1 flex-col justify-center">
        <div class="mx-auto w-full max-w-[680px]">
            <div class="mb-10 flex flex-col gap-6 lg:flex-row lg:gap-8">
                <div class="w-full">
                    <img src="{{ asset('assets/images/illustrations/security.png') }}" class="mx-auto max-w-[260px] lg:max-w-[350px]" alt="" />
                </div>
                <div class="bg-black max-lg:h-px lg:w-px"></div>
                <div>
                    <p class="mb-8">قم بمسح الكود من هاتفك</p>
                    <img src="{{ asset('assets/images/illustrations/qr-code.png') }}" class="mx-auto mb-6 w-48 lg:mx-0" alt="" />
                    <form action="{{ route('2fa.verify') }}" method="POST">
                        @csrf
                        <div class="form__field">
                            <label for="code" class="form__label text-blue">او قم بادخال الكود بشكل يدوي</label>
                            <input type="text" class="form__input" id="code" name="code" />
                        </div>
                        @error('code')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <button type="submit" class="btn btn--gray btn--md w-full font-bold">تأكيد الكود</button>
                    </form>
                </div>
            </div>
            <a href="{{ route('home') }}" class="btn btn--md btn--transparent w-full font-bold" type="submit">
                <svg class="arrow">
                    <use href="{{ asset('assets/images/icons/sprite.svg#arrow-line') }}"></use>
                </svg>
                عودة للخلف
            </a>
        </div>
    </div>
@endsection
