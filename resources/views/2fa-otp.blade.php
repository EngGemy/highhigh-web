@extends('layouts.app')

@section('title', 'OTP Verification')

@section('content')
    <div class="container flex flex-1 flex-col justify-center">
        <div class="mx-auto mb-10 w-full max-w-[400px] text-center">
            <h1 class="mb-3 text-sm font-bold md:text-base lg:text-xl">
                أدخل رقم التأكيد
            </h1>
            <p class="mb-8">تم ارسال رقم التاكيد الى رقم هاتفك</p>

            <div>
                <p class="mb-3 text-start text-sm">رمز مكون من 4 ارقام</p>

                <form action="{{ route('2fa.verify') }}" method="POST" class="mb-8">
                    @csrf
                    <div id="otpInputs" class="otp mb-8">
                        <input
                            type="text"
                            autofocus
                            class="otp__input"
                            maxlength="1"
                            required
                        />
                        <input
                            type="text"
                            class="otp__input"
                            maxlength="1"
                            required
                            disabled
                        />
                        <input
                            type="text"
                            class="otp__input"
                            maxlength="1"
                            required
                            disabled
                        />
                        <input
                            type="text"
                            class="otp__input"
                            maxlength="1"
                            required
                            disabled
                        />
                    </div>

                    <div class="mb-8 flex items-center justify-center gap-6">
                        <p class="text-xs">
                            إعادة ارسال الرمز بعد<span id="timer"> 00:30</span>
                        </p>
                        <button
                            id="resend-otp"
                            type="reset"
                            class="text-sm font-bold text-primary"
                        >
                            إعادة الارسال
                        </button>
                    </div>

                    <div class="form__group">
                        <button
                            type="submit"
                            id="verify-otp"
                            class="btn btn--black btn--md w-full"
                        >
                            تحقق من الرمز
                        </button>

                        <a
                            href="{{ route('login') }}"
                            class="btn btn--md btn--transparent w-full font-bold"
                        >
                            <svg class="arrow">
                                <use
                                    href="{{ asset('assets/images/icons/sprite.svg#arrow-line') }}"
                                ></use>
                            </svg>
                            عودة للخلف
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div>
        <p class="text-gray mb-8 text-center text-xs">
            لديك حساب بالفعل ؟
            <a href="{{ route('login') }}" class="font-semibold text-primary">
                تسجيل الدخول
            </a>
        </p>



    <script>
        const otpInputs = document.querySelectorAll("#otpInputs input");
        const verifyOtp = document.querySelector("#verify-otp");
        const resendOtp = document.querySelector("#resend-otp");

        otpInputs.forEach((input, index1) => {
            input.addEventListener("keyup", (e) => {
                const currentInput = input,
                    nextInput = input.nextElementSibling,
                    prevInput = input.previousElementSibling;
                if (currentInput.value.length > 1) {
                    currentInput.value = "";
                    return;
                }
                if (
                    nextInput &&
                    nextInput.hasAttribute("disabled") &&
                    currentInput.value !== ""
                ) {
                    nextInput.removeAttribute("disabled");
                    nextInput.focus();
                }

                if (e.key === "Backspace") {
                    otpInputs.forEach((input, index2) => {
                        if (index1 <= index2 && prevInput) {
                            input.setAttribute("disabled", true);
                            input.value = "";
                            prevInput.focus();
                        }
                    });
                }
                if (!otpInputs[3].disabled && otpInputs[3].value !== "") {
                    verifyOtp.disabled = false;
                    return;
                }
                verifyOtp.disabled = true;
            });
        });

        resendOtp.addEventListener("click", () => {
            for (let i = 1; i < otpInputs.length; i++) {
                otpInputs[i].disabled = true;
            }
            otpInputs[0].disabled = false;
            otpInputs[0].focus();
        });
    </script>
@endsection
