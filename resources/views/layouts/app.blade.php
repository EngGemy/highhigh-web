<!doctype html>
<html lang="ar" dir="rtl">
<head>  
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('assets/styles/main.css') }}" />

    <!-- js -->
    <script
        defer
        src="https://cdn.jsdelivr.net/npm/preline@2.3.0/dist/preline.min.js"
    ></script>
    <script defer src="{{ asset('/assets/scripts/main.js') }}"></script>
</head>

<body>
<div id="app">
    <div class="masterlayout">
        @include('partials.sidebar')

        <main class="main">
            <div class="topbar">
                <button type="button" class="notifications-dropdown">
                    <svg>
                        <use href="{{ asset('assets/images/icons/sprite.svg#notification-line') }}"></use>
                    </svg>
                </button>

                <button type="button" class="lang-dropdown">
                    <svg class="globe">
                        <use href="{{ asset('assets/images/icons/sprite.svg#global-line') }}"></use>
                    </svg>
                    EN
                    <svg class="arrow">
                        <use href="{{ asset('assets/images/icons/sprite.svg#arrow-down') }}"></use>
                    </svg>
                </button>

                <button class="btn btn--gray btn--sm rounded-full" type="button">
                    <svg>
                        <use href="{{ asset('assets/images/icons/sprite.svg#support') }}"></use>
                    </svg>
                    تواصل مع الدعم
                </button>
            </div>

            <div class="main__content">
                @yield('content')
            </div>
        </main>
    </div>
</div>

<!-- js -->
<script>
    const selectElement = document.getElementById("countrySelect");
    const selectedFlagImg = document.getElementById("selectedFlag");

    const countries = [
        {
            name: "Algeria",
            code: "+213",
            flag: "https://flagcdn.com/w320/dz.png",
        },
        {
            name: "Bahrain",
            code: "+973",
            flag: "https://flagcdn.com/w320/bh.png",
        },
        { name: "Iraq", code: "+964", flag: "https://flagcdn.com/w320/iq.png" },
        // Add more countries as needed
    ];

    const countrySelect = document.getElementById("countrySelect");

    countries.forEach((country) => {
        const option = document.createElement("option");
        option.value = country.code;
        option.setAttribute("data-flag", country.flag);
        option.textContent = `(${country.code})`;
        selectElement.appendChild(option);
    });

    // Function to update the flag icon
    function updateFlagIcon() {
        const selectedOption =
            selectElement.options[selectElement.selectedIndex];
        const flagUrl = selectedOption.getAttribute("data-flag");
        selectedFlagImg.src = flagUrl;
    }

    // Event Listener for select element change
    selectElement.addEventListener("change", updateFlagIcon);

    // Initial flag update (in case a default is set)
    updateFlagIcon();
</script>
</body>
</html>
