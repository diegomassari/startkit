<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen font-sans antialiased bg-base-200">
 
    {{-- NAVBAR mobile only --}}
    <x-nav sticky class="lg:hidden">
        <x-slot:brand>
            <x-app-logo/>
        </x-slot:brand>
        <x-slot:actions>
            <label for="main-drawer" class="lg:hidden mr-3">
                <x-icon name="o-bars-3" class="cursor-pointer" />
            </label>
        </x-slot:actions>
    </x-nav>
 
    {{-- MAIN --}}
    <x-main full-width>
        {{-- SIDEBAR --}}
        <x-slot:sidebar drawer="main-drawer" collapsible collapseText="Esconder" class="bg-secondary text-base-100 shadow-xl ">

            <div class="flex h-full flex-col">
                {{-- BRAND --}}
                <div class="ml-5 pt-5">
                    <x-app-logo/>
                </div>
 
                {{-- MENU --}}
                <x-menu activate-by-route active-bg-color="bg-primary/20 " class="flex h-full flex-col mt-3">
 
                    <div class="flex-1">
                        <x-menu-item title="Home" icon="o-home" link="{{ route('dashboard') }}" />
                        <x-menu-item title="Agentes" icon="o-sparkles" link="/" />
                        <x-menu-sub title="Settings" icon="o-cog-6-tooth">
                            <x-menu-item title="Wifi" icon="o-wifi" link="####" />
                            <x-menu-item title="Archives" icon="o-archive-box" link="####" />
                        </x-menu-sub>
                    </div>

                    {{-- User --}}
                    @if($user = auth()->user())
                        <div class="sticky bottom-0 backdrop-blur">
                            <x-menu-sub :title="auth()->user()->name" icon="o-user">
                                <x-menu-item title="Meu Perfil" icon="o-user" link="{{ route('profile.edit') }}" />
                                <x-menu-item title="Password" icon="o-key" link="{{ route('user-password.edit') }}" />
                                <x-menu-item title="Logout" icon="o-power" link="{{ route('logout') }}" /> 
                            </x-menu-sub>
                        </div>
                    @endif
                </x-menu>
            </div>
        </x-slot:sidebar>
 
        {{-- The `$slot` goes here --}}
        <x-slot:content>
            {{ $slot }}
        </x-slot:content>
    </x-main>
 
    {{-- Toast --}}
    <x-toast />
</body>
</html>
