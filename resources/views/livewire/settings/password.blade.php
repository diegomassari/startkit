<section class="w-full">
    <x-header :title="__('Update password')" :subtitle="__('Ensure your account is using a long, random password to stay secure')" separator  />
    <form wire:submit="updatePassword" class="w-120">
        <x-input :label="__('Current Password')" wire:model="current_password" type="password"  required autocomplete="current-password"/>
        <x-input :label="__('New Password')" wire:model="password" type="password" required autocomplete="new-password" />
        <x-input :label="__('Confirm Password')" wire:model="password_confirmation" type="password"  required autocomplete="new-password" />


        <div class="flex items-center gap-4 mt-5">
            <div class="flex items-center justify-end">
                <x-button :label="__('Save')" type="submit" class="btn-primary" />
            </div>
        </div>
    </form>
</section>
