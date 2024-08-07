<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CustomerInfo;

class CustomerManager extends Component
{
    public $nic, $name, $email, $phone;
    public $customers = [];
    public $showModal = false;
    public $searchEmail = '';

    public function mount()
    {
        $this->loadCustomers();
    }

    public function loadCustomers()
    {
        if ($this->searchEmail) {
            $this->customers = CustomerInfo::where('email', 'like', '%' . $this->searchEmail . '%')->get();
        } else {
            $this->customers = CustomerInfo::all();
        }
    }

    public function addCustomer()
    {
        $this->validate([
            'nic' => 'required|string|max:10',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:customer_info,email',
            'phone' => 'required|string|max:10',
        ]);

        CustomerInfo::create([
            'nic' => $this->nic,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);

        $this->reset(['nic', 'name', 'email', 'phone']);
        $this->loadCustomers();
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.customer-manager');
    }
}
