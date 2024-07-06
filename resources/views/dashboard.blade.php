@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="main__header">
        <h1 class="main__title">الحساب الشخصي - المعلن</h1>

        <ol class="breadcrump">
            <li class="breadcrump__item">
                <a class="breadcrump__link" href="#"> الرئيسية </a>
                <svg>
                    <use href="{{ asset('assets/images/icons/sprite.svg#arrow-left-line') }}"></use>
                </svg>
            </li>
            <li class="breadcrump__item">
                <a class="breadcrump__link" href="#"> اعدادات الحساب </a>
                <svg>
                    <use href="{{ asset('assets/images/icons/sprite.svg#arrow-left-line') }}"></use>
                </svg>
            </li>
            <li class="breadcrump__item">
                <a class="breadcrump__link" href="#" aria-current="page">
                    الحساب الشخصي
                </a>
                <svg>
                    <use href="{{ asset('assets/images/icons/sprite.svg#arrow-left-line') }}"></use>
                </svg>
            </li>
        </ol>
    </div>

    <div class="main__body flex flex-col justify-between gap-14">
        <div class="space-y-7">
            <section>
                <header class="mb-4">
                    <h2 class="mb-1 font-extrabold">صورة الحساب</h2>
                    <p class="text-sm text-gray">هذه الصورة التي يتم عرضها على الحساب</p>
                </header>

                <div class="flex items-end gap-5">
                    <img src="{{ asset('assets/images/illustrations/avatar.svg') }}" class="right-full w-16 object-cover object-center" alt=""/>

                    <label type="button" class="btn btn--gray btn--sm border border-gray-200">
                        <input type="file" class="sr-only" />
                        رفع صورة الحساب
                    </label>
                </div>
            </section>

            <section>
                <header class="mb-4">
                    <h2 class="mb-1 font-extrabold">معلومات عامة</h2>
                    <p class="text-sm text-gray">هذه الصورة التي يتم عرضها على الحساب</p>
                </header>

                <div class="w-full max-w-2xl">
                    <div class="form__group">
                        <div class="form__row">
                            <div class="form__field">
                                <label class="form__label" for="first-name">الاسم الاول</label>
                                <input id="first-name" class="form__input" type="text" />
                            </div>

                            <div class="form__field">
                                <label class="form__label" for="last-name">الاسم الاخير</label>
                                <input id="last-name" class="form__input" type="text" />
                            </div>
                        </div>

                        <div class="form__row">
                            <div class="form__field">
                                <label class="form__label" for="date">تاريخ الميلاد</label>
                                <input id="date" class="form__input" type="date" />
                            </div>

                            <div class="form__field">
                                <label class="form__label" for="email">البريد الالكتروني</label>
                                <input id="email" class="form__input" type="email" />
                            </div>
                        </div>

                        <div class="form__row">
                            <div class="form__field">
                                <label class="form__label" for="company-name">اسم الشركة</label>
                                <input id="company-name" class="form__input" type="text" />
                            </div>

                            <div class="form__field">
                                <label class="form__label" for="tel">رقم الهاتف <span>*</span></label>
                                <div class="flex items-center gap-2">
                                    <input id="tel" class="form__input flex-1" type="tel" />
                                    <div class="country-select max-w-28">
                                        <select class="" id="countrySelect" name="code"></select>
                                        <img src="https://flagcdn.com/w320/ng.png" id="selectedFlag" alt="Selected Flag" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form__row">
                            <div class="form__field">
                                <label class="form__label" for="location">حدد مكان الاقامة</label>
                                <input id="location" class="form__input" type="text" />
                            </div>

                            <div class="form__field">
                                <label class="form__label" for="password">كلمة المرور</label>
                                <input id="password" class="form__input" type="password" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="flex flex-col-reverse gap-3 lg:flex-row lg:justify-between">
            <button type="button" class="btn btn--gray btn--lg">حفظ وخروج</button>
            <button type="button" class="btn btn--primary btn--lg">حفظ التغييرات</button>
        </div>
    </div>
@endsection
