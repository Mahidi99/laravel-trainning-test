<!DOCTYPE html>
<html>
<head>
    <title>Add Customer</title>
    @livewireStyles
</head>
<body>

    <div class="container mx-auto p-4">
        <button class="py-2 px-4 rounded" style="background-color: black; color:white; margin-top: 10px; margin-bottom: 10px; margin-left: 10px;">
        <a
            href="{{ route('car.details') }}"
            >
                Car Details
        </a>
        </button>
    </div>

    {{-- @livewire('car-manager') --}}
    @livewire('customer-manager')

    @livewireScripts
</body>
</html>
