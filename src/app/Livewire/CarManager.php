<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CarInfo;

class CarManager extends Component
{
    public $showCarModal = false;
    public $registrationNumber;
    public $model;
    public $fuelType;
    public $transmission;
    public $customerName;
    public $selectedCustomer;

    protected $rules = [
        'registrationNumber' => 'required|string',
        'model' => 'required|string',
        'fuelType' => 'required|string',
        'transmission' => 'required|string',
        'customerName' => 'required|string',
    ];

    public function render()
    {
        return view('livewire.car-manager');
    }

    public function addCar()
    {
        $this->validate();

        CarInfo::create([
            'registration_number' => $this->registrationNumber,
            'model' => $this->model,
            'fuel_type' => $this->fuelType,
            'transmission' => $this->transmission,
            'customer_name' => $this->selectedCustomer,
        ]);

        $this->reset();
        $this->showCarModal = false;
    }

    public function openCarModal($customerName)
    {
        $this->selectedCustomer = $customerName;
        $this->showCarModal = true;
    }
}

