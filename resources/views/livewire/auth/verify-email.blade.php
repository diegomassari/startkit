<x-layouts.auth>
    <div class="mt-4 flex flex-col gap-6">
        <p class="text-center">
            {{ __('Please verify your email address by clicking on the link we just emailed to you.') }}
        </p>

        @if (session('status') == 'verification-link-sent')
            <p class="text-center font-medium !dark:text-green-400 !text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </p>
        @endif

        <div class="flex flex-col items-center justify-between space-y-3">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <x-button type="submit" class="w-full btn-primary">
                    {{ __('Resend verification email') }}
                </x-button>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
               <x-button type="submit" class="text-sm cursor-pointer btn btn-ghost" data-test="logout-button">
                    {{ __('Log out') }}
               </x-button>
            </form>
        </div>
    </div>
</x-layouts.auth>
