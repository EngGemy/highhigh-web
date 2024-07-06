<aside id="aside" class="aside lg:hs-overlay-backdrop-open:hidden hs-overlay-backdrop-open:bg-black/15">
    <div class="aside__header">
        <div class="aside__logo">
            <img src="{{ asset('assets/images/logo.svg') }}" class="lg" alt="" />
            <img src="{{ asset('assets/images/logo-sm.svg') }}" class="sm" alt="" />
        </div>
        <button type="button" aria-label="Toggle navigation" aria-controls="aside" data-hs-overlay="#aside" data-hs-overlay-options='{ "hiddenClass": "open--full" }'>
            <svg class="size-6 text-black">
                <use href="{{ asset('assets/images/icons/sprite.svg#menu-line') }}"></use>
            </svg>
        </button>
    </div>

    <div class="aside__body">
        <div>
            <p class="aside__title">لوحة الاجراءات</p>

            <div class="aside__list">
                <a href="{{ route('profile') }}" class="aside__link">
                    <svg class="aside__link-icon">
                        <use href="{{ asset('assets/images/icons/sprite.svg#house') }}"></use>
                    </svg>
                    <span class="aside__link-text">الحساب الشخصي</span>
                </a>

                <a href="#" class="aside__link">
                    <svg class="aside__link-icon">
                        <use href="{{ asset('assets/images/icons/sprite.svg#ads') }}"></use>
                    </svg>
                    <span class="aside__link-text">حملات اعلانية</span>
                </a>

                <a href="#" class="aside__link">
                    <svg class="aside__link-icon">
                        <use href="{{ asset('assets/images/icons/sprite.svg#terms') }}"></use>
                    </svg>
                    <span class="aside__link-text">الفواتير والمدفوعات</span>
                </a>

                <a href="#" class="aside__link">
                    <svg class="aside__link-icon">
                        <use href="{{ asset('assets/images/icons/sprite.svg#analytics') }}"></use>
                    </svg>
                    <span class="aside__link-text">احصائيات مفصلة</span>
                </a>

                <a href="#" class="aside__link">
                    <svg class="aside__link-icon">
                        <use href="{{ asset('assets/images/icons/sprite.svg#discount') }}"></use>
                    </svg>
                    <span class="aside__link-text">المنتجات</span>
                </a>

                <a href="#" class="aside__link">
                    <svg class="aside__link-icon">
                        <use href="{{ asset('assets/images/icons/sprite.svg#add-line') }}"></use>
                    </svg>
                    <span class="aside__link-text">انشاء المحتوى</span>
                </a>
            </div>
        </div>

        <div>
            <p class="aside__title">الاعدادات</p>

            <div class="aside__list">
                <a href="#" class="aside__link">
                    <svg class="aside__link-icon">
                        <use href="{{ asset('assets/images/icons/sprite.svg#user') }}"></use>
                    </svg>
                    <span class="aside__link-text">التحدث مع العملاء</span>
                </a>

                <a href="#" class="aside__link">
                    <svg class="aside__link-icon">
                        <use href="{{ asset('assets/images/icons/sprite.svg#support') }}"></use>
                    </svg>
                    <span class="aside__link-text">التواصل مع الدعم</span>
                </a>

                <a href="#" class="aside__link">
                    <svg class="aside__link-icon">
                        <use href="{{ asset('assets/images/icons/sprite.svg#terms') }}"></use>
                    </svg>
                    <span class="aside__link-text">الشروط والاحكام</span>
                </a>
            </div>
        </div>
    </div>

    <div class="aside__footer">
        <div class="hs-dropdown relative [--strategy:absolute]">
            <button type="button" class="hs-overlay-toggle aside__link aside__btn">
                <span class="aside__link-icon-wrapper">
                    <svg class="aside__link-icon">
                        <use href="{{ asset('assets/images/icons/sprite.svg#user') }}"></use>
                    </svg>
                </span>
{{--                <span class="aside__link-text">{{ auth()->user()->email }}</span>--}}
            </button>

            <div class="hs-dropdown-menu settings-drowdown hidden">
                <p class="aside__title mb-2 mt-1">حساب المعلن</p>

                <div class="aside__list">
                    <a href="{{ route('profile') }}" class="aside__link">
                        <svg class="aside__link-icon">
                            <use href="{{ asset('assets/images/icons/sprite.svg#settings') }}"></use>
                        </svg>
                        <span class="aside__link-text">الاعدادات العامة</span>
                    </a>

                    <a href="{{ route('logout') }}" class="aside__link">
                        <svg class="aside__link-icon">
                            <use href="{{ asset('assets/images/icons/sprite.svg#logout') }}"></use>
                        </svg>
                        <span class="aside__link-text">انهاء الجلسة</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</aside>
