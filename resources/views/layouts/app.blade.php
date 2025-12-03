<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Robic Dashboard') }}</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" integrity="sha512-cViiB2GzSu3k+j9T0S1XCMVvjJAnYXhYzu3/n6PvJEa3TBUnIFVWMGryuVKy7jH9MuNoMylkzJUO2cQDIr1m0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body.materialize-app {
            font-family: 'Cairo', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: #f3f5f7;
        }

        .sidenav.sidenav-fixed {
            width: 250px;
        }

        .sidenav .logo-wrapper {
            padding: 32px 24px 16px;
            text-align: center;
        }

        .sidenav .logo-wrapper .brand-logo {
            font-size: 1.4rem;
            font-weight: 700;
        }

        .sidenav li > a {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 600;
            color: #37474f;
        }

        .sidenav li.active,
        .sidenav li > a:hover {
            background-color: rgba(83, 109, 254, 0.1);
        }

        .dashboard-shell {
            margin-right: 250px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .dashboard-shell .nav-wrapper {
            padding: 0 24px;
        }

        .dashboard-shell main {
            flex: 1;
            padding: 24px;
        }

        .page-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .page-heading h2 {
            margin: 0;
            font-weight: 700;
            color: #263238;
        }

        .page-heading p {
            margin: 4px 0 0;
            color: #78909c;
        }

        .user-chip {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            border-radius: 999px;
            background: #f0f3ff;
            color: #3f51b5;
        }

        @media (max-width: 992px) {
            .sidenav.sidenav-fixed {
                transform: translateX(260px);
            }

            .dashboard-shell {
                margin-right: 0;
            }
        }
    </style>

    @stack('styles')
</head>
<body class="materialize-app grey lighten-4">
    @php
        $pageTitle = $pageTitle ?? 'لوحة التحكم';
    @endphp
    <ul id="materialize-sidenav" class="sidenav sidenav-fixed">
        <li class="logo-wrapper">
            <a href="{{ route('dashboard') }}" class="brand-logo text-darken-4">{{ config('app.name', 'Robic') }}</a>
            <p class="grey-text text-darken-1">{{ auth()->user()->email ?? '' }}</p>
        </li>
        <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}"><i class="material-icons">space_dashboard</i>لوحة التحكم</a>
        </li>
        <li class="{{ request()->routeIs('profile.*') ? 'active' : '' }}">
            <a href="{{ route('profile.edit') }}"><i class="material-icons">person</i>الملف الشخصي</a>
        </li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn-flat waves-effect waves-dark" style="width:100%; text-align:right; padding-right:16px;">
                    <i class="material-icons">logout</i>تسجيل الخروج
                </button>
            </form>
        </li>
    </ul>

    <div class="dashboard-shell">
        <nav class="white z-depth-0">
            <div class="nav-wrapper">
                <a href="#"
                   data-target="materialize-sidenav"
                   class="sidenav-trigger show-on-medium-and-down right">
                    <i class="material-icons grey-text text-darken-3">menu</i>
                </a>
                <span class="page-title">{{ $pageTitle }}</span>
                <ul class="left">
                    <li>
                        <div class="user-chip">
                            <i class="material-icons">verified_user</i>
                            {{ auth()->user()->name }}
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <main>
            @isset($header)
                <div class="container" style="margin: 24px auto;">
                    {!! $header !!}
                </div>
            @endisset

            <div class="container">
                {{ $slot }}
            </div>
        </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" integrity="sha512-CZsPHlm0RijX9Gv0Mt2rtI8BGG99nmCaTKty+O+kO5OVwOB1p5MNDoAuCEi0aKBslZx2drXr/7Lr1KnpPvN1dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sidenavs = document.querySelectorAll('.sidenav');
            M.Sidenav.init(sidenavs);
        });
    </script>
    @stack('scripts')
</body>
</html>
