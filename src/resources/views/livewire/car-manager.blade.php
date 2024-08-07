<div>
    <!-- Add Car Button -->
    <button
        wire:click="openCarModal('{{ $customerName }}')"
        class=" text-white py-2 px-4 rounded"
        style="background-color: black; color:white; margin-top: 10px; margin-bottom: 10px; margin-left: 10px;"
    >
        Add Car
    </button>

    <!-- Car Modal -->
    @if($showCarModal)
        <div
            class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50"
            wire:click="$set('showCarModal', false)"
        >
            <div
                class="bg-white p-6 rounded-lg shadow-lg"
                style="background: linear-gradient(112.1deg, rgb(32, 38, 57) 11.4%, rgb(63, 76, 119) 70.2%);"
                wire:click.stop
            >
                <form wire:submit.prevent="addCar">
                    <div class="mb-4">
                        <label for="registrationNumber" class="block text-sm font-medium text-gray-200">Registration Number:</label>
                        <input
                            type="text"
                            id="registrationNumber"
                            wire:model="registrationNumber"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                        />
                        @error('registrationNumber') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label for="model" class="block text-sm font-medium text-gray-200">Model:</label>
                        <input
                            type="text"
                            id="model"
                            wire:model="model"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                        />
                        @error('model') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label for="fuelType" class="block text-sm font-medium text-gray-200">Fuel Type:</label>
                        <input
                            type="text"
                            id="fuelType"
                            wire:model="fuelType"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                        />
                        @error('fuelType') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label for="transmission" class="block text-sm font-medium text-gray-200">Transmission:</label>
                        <input
                            type="text"
                            id="transmission"
                            wire:model="transmission"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                        />
                        @error('transmission') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex justify-end">
                        <button
                            type="submit"
                            class="bg-green-500 text-white py-2 px-4 rounded"
                            style="background-color: green; color:white;"
                        >
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>
