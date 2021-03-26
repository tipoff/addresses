<div>
    <div>
        <x-jet-authentication-card>
            <x-slot name="logo">
                <a href="https://thegreatescaperoom.com/">
{{--                    <img src="{{ asset('/images/tger.png') }}" style="border-radius: 6px" alt="">--}}
                </a>
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            <form onsubmit="process(event)">
{{--            <form wire:submit="submit">--}}
                @csrf
                <div>
                    <x-jet-label for="phone_number" value="{{ __('Phone Number') }}" />
                    <div class="flex">
                        <x-jet-input id="phone" class="inline-flex mt-1 w-full" type="tel" required autofocus wire:model="phone" />
                    </div>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-jet-button class="ml-4">
                        {{ __('Submit') }}
                    </x-jet-button>
                </div>
            </form>
            <div class="alert alert-info" style="display: none;"></div>
        </x-jet-authentication-card>
    </div>
{{--    <script src="{{ asset('js/intlTelInput.js') }}"></script>--}}
    <script>
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
            initialCountry: "us",
            utilsScript:
                "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });

        const info = document.querySelector(".alert-info");

        function process(event) {
            event.preventDefault();

            const phoneNumber = phoneInput.getNumber();
            phoneInputField.value=phoneNumber;  // set value of #phone input to full phone with intl code

            info.style.display = "";
            info.innerHTML = `Phone number in E.164 format: <strong>${phoneNumber}</strong>`;
            Livewire.emit('submit')
        }

    </script>
</div>
