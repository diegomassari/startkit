<div>
    <x-button :label="__('Delete account')" @click="$wire.deleteConfirmationModal = true" x-data="" class="btn btn-error btn-sm btn-ghost" />    

    <x-modal wire:model="deleteConfirmationModal" title="Are you sure?" class="backdrop-blur">
        <form method="POST" wire:submit="deleteUser" class="space-y-6">
        <p class="text-md text-base-900">{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}</p>
        
        <x-input :label="__('Password')" wire:model="password" type="password" required />
        <x-slot:actions>
            <x-button :label="__('Cancel')" @click="$wire.myModal1 = false" />
            <x-button :label="__('Delete my Account')" class="btn-error" type="submit" icon='o-trash' />
        </x-slot:actions>
        </form>
    </x-modal>
</div>
