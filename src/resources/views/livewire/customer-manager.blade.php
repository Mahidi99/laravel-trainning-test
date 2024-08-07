<div style="background: linear-gradient(112.1deg, rgb(32, 38, 57) 11.4%, rgb(63, 76, 119) 70.2%);">

    <div class="flex justify-between items-center p-4">
        <button
            wire:click="$set('showModal', true)"
            class="bg-green-500 text-white py-2 px-4 rounded"
            style="background-color: green; color:white; margin-top: 10px; margin-left: 10px;"
        >
            Add Customers
        </button>


        <div class="ml-10">
            <input
                type="text"
                wire:model="searchEmail"
                placeholder="Search by email"
                class="border-gray-300 rounded-md shadow-sm px-3 py-2"
            />
            <button
                wire:click="loadCustomers"
                class="bg-blue-500 text-white py-2 px-4 rounded ml-2"
            >
                Search
            </button>
        </div>
    </div>


    @if($showModal)
        <div
            class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50"
            wire:click="$set('showModal', false)"
        >
            <div
                class="bg-white p-6 rounded-lg shadow-lg"
                style="background: linear-gradient(112.1deg, rgb(32, 38, 57) 11.4%, rgb(63, 76, 119) 70.2%);"
                wire:click.stop
            >
                <form wire:submit.prevent="addCustomer">
                    <div class="mb-4">
                        <label for="nic" class="block text-sm font-medium text-gray-200">NIC:</label>
                        <input
                            type="text"
                            id="nic"
                            wire:model="nic"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                        />
                        @error('nic') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-200">Name:</label>
                        <input
                            type="text"
                            id="name"
                            wire:model="name"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                        />
                        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-200">Email:</label>
                        <input
                            type="email"
                            id="email"
                            wire:model="email"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                        />
                        @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-200">Phone:</label>
                        <input
                            type="text"
                            id="phone"
                            wire:model="phone"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                        />
                        @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror
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

    <div class="py-4 px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach($customers as $customer)
                <div class="bg-white p-4 rounded-lg shadow-lg flex flex-col items-center">
                    <h3 class="text-lg font-bold mb-2">{{ $customer->name }}</h3>
                    <p class="text-gray-700 mb-1"><strong>NIC:</strong> {{ $customer->nic }}</p>
                    <p class="text-gray-700 mb-1"><strong>Email:</strong> {{ $customer->email }}</p>
                    <p class="text-gray-700 mb-1"><strong>Phone:</strong> {{ $customer->phone }}</p>

                    {{-- <button
                        wire:click="$set('showCarModal', true)"
                        class="py-2 px-4 rounded"
                        style="background-color: black; color:white; margin-bottom: 10px; margin-top: 10px;"
                    >
                        Add Car
                    </button> --}}

                    <livewire:car-manager :customerName="$customer->name" />
                </div>
            @endforeach
        </div>
    </div>
</div>
