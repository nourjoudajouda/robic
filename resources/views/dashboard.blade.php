@push('styles')
<style>
    .kpi-card {
        border-radius: 18px;
        padding: 24px;
        color: #fff;
        min-height: 150px;
    }

    .kpi-card h4 {
        margin: 12px 0 0;
        font-weight: 700;
    }

    .users-grid .card {
        border-radius: 18px;
    }

    .users-grid .avatar-circle {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: #eef2ff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        color: #3949ab;
    }

    .section-title {
        font-weight: 700;
        margin-bottom: 16px;
        color: #263238;
    }
</style>
@endpush

@php($pageTitle = 'لوحة التحكم')

<x-app-layout>
    <x-slot name="header">
        <div class="page-heading">
            <div>
                <h2>لوحة التحكم</h2>
                <p>أهلاً {{ auth()->user()->name }}, هذا ملخص سريع لنشاط النظام.</p>
            </div>
            <a href="{{ route('register') }}" class="btn waves-effect waves-light deep-purple accent-3">
                <i class="material-icons left">person_add</i>
                إضافة مستخدم
            </a>
        </div>
    </x-slot>

    @php
        $stats = $stats ?? [
            'total_users' => 0,
            'active_users' => 0,
            'new_users_today' => 0,
        ];
    @endphp

    <section class="section">
        <div class="row">
            <div class="col s12 m4">
                <div class="kpi-card z-depth-2" style="background: linear-gradient(135deg, #5c6bc0, #3f51b5);">
                    <span>إجمالي المستخدمين</span>
                    <h4>{{ number_format($stats['total_users']) }}</h4>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="kpi-card z-depth-2" style="background: linear-gradient(135deg, #26a69a, #2bbbad);">
                    <span>مستخدمون مفعّلون</span>
                    <h4>{{ number_format($stats['active_users']) }}</h4>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="kpi-card z-depth-2" style="background: linear-gradient(135deg, #ff6f61, #ff8a65);">
                    <span>مسجّلون اليوم</span>
                    <h4>{{ number_format($stats['new_users_today']) }}</h4>
                </div>
            </div>
        </div>
    </section>

    <section class="section users-grid">
        <h5 class="section-title">أحدث المستخدمين</h5>
        <div class="row">
            @forelse($users ?? [] as $user)
                <div class="col s12 m6 l3">
                    <div class="card hoverable">
                        <div class="card-content">
                            <div class="avatar-circle">
                                {{ mb_substr($user->name, 0, 1) }}
                            </div>
                            <span class="card-title" style="margin-top: 16px;">{{ $user->name }}</span>
                            <p class="grey-text text-darken-1" style="margin-top: 8px;">{{ $user->email }}</p>
                        </div>
                        <div class="card-action" style="display: flex; justify-content: space-between; align-items: center;">
                            <span class="chip blue lighten-5 blue-text text-darken-2" style="margin:0;">
                                {{ $user->created_at->diffForHumans() }}
                            </span>
                            <a href="mailto:{{ $user->email }}" class="waves-effect waves-light btn-flat">
                                تواصل
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col s12">
                    <div class="card-panel grey lighten-4 center-align">
                        لا يوجد مستخدمون بعد، قم بإضافة أول مستخدم الآن.
                    </div>
                </div>
            @endforelse
        </div>
    </section>
</x-app-layout>
