<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class CustomerRegistration extends Component
{
    public $nic, $name, $email, $phone;
    public $search = '';

    protected $validations = [
        'nic' => 'required|unique:customers,nic',
        'name' => 'required',
        'email' => 'required|email|unique:customers,email',
        'phone' => 'required',
    ];

    public function register(){

        $this->validate();

        $password = Str::password(8, true, true, false, false);

        Customer :: create ([
            'nic' => $this->nic,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'password' => Hash::make($password),
        ]);

        session()->flash('message', 'Customer registered successfully! Password: ' . $password);

        $this->resetForm();
    }

    public function resetForm()
    {
        $this->nic = '';
        $this->name = '';
        $this->email = '';
        $this->phone = '';
    }

    public function getCustomersProperty()
    {
        return Customer::where('email', 'like', '%' . $this->search . '%')->get();
    }

    public function render()
    {
        return view('livewire.customer-registration', [
            'customers' => $this->customers,
        ]);
    }
}
