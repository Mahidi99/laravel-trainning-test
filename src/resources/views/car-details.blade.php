<!-- resources/views/car-details.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details</title>
    @livewireStyles
    <style>
        .card {
            background: linear-gradient(112.1deg, rgb(32, 38, 57) 11.4%, rgb(63, 76, 119) 70.2%);
            color: white;
            padding: 16px;
            border-radius: 8px;
            margin: 10px;
        }
        .card h3 {
            margin-bottom: 8px;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-bold mb-4">Here are the car infos</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach($cars as $car)
                <div class="card">
                    <h3 class="text-lg font-bold">{{ $car->model }}</h3>
                    <p><strong>Registration Number:</strong> {{ $car->registration_number }}</p>
                    <p><strong>Fuel Type:</strong> {{ $car->fuel_type }}</p>
                    <p><strong>Transmission:</strong> {{ $car->transmission }}</p>
                    <p><strong>Customer:</strong> {{ $car->customer->name ?? '' }}</p>
                </div>
            @endforeach
        </div>
    </div>
    @livewireScripts
</body>
</html>
