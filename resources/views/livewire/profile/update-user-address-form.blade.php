<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Livewire\Volt\Component;

new class extends Component
{
    public string $address = '';
    public ?string $address_2 = '';
    public string $postal_code = '';
    public string $city = '';
    public string $country = '';

    /**
     * Mount the component.
     */
    public function mount(): void
    {
        $this->address = Auth::user()->address;
        $this->address_2 = Auth::user()->address_2;
        $this->postal_code = Auth::user()->postal_code;
        $this->city = Auth::user()->city;
        $this->country = Auth::user()->country;
    }

    /**
     * Update the profile information for the currently authenticated user.
     */
    public function updateAddressInformation(): void
    {
        $user = Auth::user();

        $validated = $this->validate([
            'address' => ['required', 'string', 'max:255'],
            'address_2' => ['string', 'max:255'],
            'postal_code' => ['required', 'string', 'max:30'],
            'city' => ['required', 'string', 'max:80'],
            'country' => ['required', 'string', 'max:80'],
        ]);

        $user->update([
            'address' => $validated['address'],
            'address_2' => $validated['address_2'],
            'postal_code' => $validated['postal_code'],
            'city' => $validated['city'],
            'country' => $validated['country']
        ]);

        $this->dispatch('address-updated');
    }
}; ?>

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Address Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's address information.") }}
        </p>
    </header>

    <form wire:submit="updateAddressInformation" class="mt-6 space-y-6">
        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input wire:model="address" id="address" name="address" type="text" class="mt-1 block w-full" required autofocus autocomplete="address" />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>

        <div>
            <x-input-label for="address_2" :value="__('Address 2')" />
            <x-text-input wire:model="address_2" id="address_2" name="address_2" type="text" class="mt-1 block w-full" required autofocus autocomplete="address_2" />
            <x-input-error class="mt-2" :messages="$errors->get('address_2')" />
        </div>

        <div>
            <x-input-label for="postal_code" :value="__('Postal Code')" />
            <x-text-input wire:model="postal_code" id="postal_code" name="postal_code" type="text" class="mt-1 block w-full" required autofocus autocomplete="postal_code" />
            <x-input-error class="mt-2" :messages="$errors->get('postal_code')" />
        </div>

        <div>
            <x-input-label for="city" :value="__('City')" />
            <x-text-input wire:model="city" id="city" name="city" type="text" class="mt-1 block w-full" required autofocus autocomplete="city" />
            <x-input-error class="mt-2" :messages="$errors->get('city')" />
        </div>

        <div>
            <x-input-label for="country" :value="__('Country')" />
            <x-text-input wire:model="country" id="country" name="country" type="text" class="mt-1 block w-full" required autofocus autocomplete="country" />
            <x-input-error class="mt-2" :messages="$errors->get('country')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            <x-action-message class="me-3" on="address-updated">
                {{ __('Saved.') }}
            </x-action-message>
        </div>
    </form>
</section>
