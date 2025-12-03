<!doctype html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="layout-wide customizer-hide"
    dir="ltr"
    data-skin="default"
    data-bs-theme="light"
    data-assets-path="{{ asset('admin-dashboard/assets/') }}/"
    data-template="vertical-menu-template"
>
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no,
                 minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="robots" content="noindex, nofollow" />
    <title>{{ config('app.name', 'Laravel') }} - Login</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"
          href="{{ asset('admin-dashboard/assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet"
          href="{{ asset('admin-dashboard/assets/vendor/fonts/iconify-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet"
          href="{{ asset('admin-dashboard/assets/vendor/libs/node-waves/node-waves.css') }}" />
    <script src="{{ asset('admin-dashboard/assets/vendor/libs/@algolia/autocomplete-js.js') }}"></script>
    <link rel="stylesheet"
          href="{{ asset('admin-dashboard/assets/vendor/libs/pickr/pickr-themes.css') }}" />
    <link rel="stylesheet"
          href="{{ asset('admin-dashboard/assets/vendor/css/core.css') }}" />
    <link rel="stylesheet"
          href="{{ asset('admin-dashboard/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet"
          href="{{ asset('admin-dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <!-- Vendor (form validation) -->
    <link rel="stylesheet"
          href="{{ asset('admin-dashboard/assets/vendor/libs/@form-validation/form-validation.css') }}" />

    <!-- Page CSS -->
    <link rel="stylesheet"
          href="{{ asset('admin-dashboard/assets/vendor/css/pages/page-auth.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('admin-dashboard/assets/vendor/js/helpers.js') }}"></script>

    <!-- Template customizer -->
    <script src="{{ asset('admin-dashboard/assets/vendor/js/template-customizer.js') }}"></script>

    <!-- Config -->
    <script src="{{ asset('admin-dashboard/assets/js/config.js') }}"></script>

    @stack('head')
</head>
<body>
    {{ $slot }}

    <!-- Core JS -->
    <script src="{{ asset('admin-dashboard/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('admin-dashboard/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('admin-dashboard/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin-dashboard/assets/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('admin-dashboard/assets/vendor/libs/@algolia/autocomplete-js.js') }}"></script>
    <script src="{{ asset('admin-dashboard/assets/vendor/libs/pickr/pickr.js') }}"></script>
    <script src="{{ asset('admin-dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('admin-dashboard/assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('admin-dashboard/assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('admin-dashboard/assets/vendor/js/menu.js') }}"></script>

    <!-- Vendors JS (form validation) -->
    <script src="{{ asset('admin-dashboard/assets/vendor/libs/@form-validation/popular.js') }}"></script>
    <script src="{{ asset('admin-dashboard/assets/vendor/libs/@form-validation/bootstrap5.js') }}"></script>
    <script src="{{ asset('admin-dashboard/assets/vendor/libs/@form-validation/auto-focus.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('admin-dashboard/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('admin-dashboard/assets/js/pages-auth.js') }}"></script>

    @stack('scripts')
</body>
</html>