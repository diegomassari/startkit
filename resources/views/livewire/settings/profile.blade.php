<section class="w-full">
    <x-header :title="__('Settings')" :subtitle="__('Manage your profile and account settings')" separator  />

        <form wire:submit="updateProfileInformation" class="w-120">

            <x-input :label="__('Name')" wire:model="name" :hint="__('Your full name')" required />
 
            <div>
                <x-input :label="__('Email')" wire:model="email" :hint="__('Your best e-mail')" required autocomplete="email" />

                @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail &&! auth()->user()->hasVerifiedEmail())
                    <div>
                        <x-icon name="o-envelope" :label="__('Your email address is unverified.')" />
                        <x-button :label="__('Click here to re-send the verification email.')" wire:click.prevent="resendVerificationNotification" class="btn-ghost" />
                    </div>
                @endif
            </div>

            <div class="flex items-center gap-4 mt-5">
                <div class="flex items-center justify-end">
                    <x-button :label="__('Save')" type="submit" class="btn-primary" />
                    <livewire:settings.delete-user-form class="flex align-right gap-4" />    
                </div>
                
            </div>
        </form>

        
    
</section>
