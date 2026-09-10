<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
        [
            'full_name' => 'Randy Durias',
            'email' => 'RandyD@gmail.com',
            'phone' => '09123456789'
        ],
        [
            'full_name' => 'Krizza Santos',
            'email' => 'Ksantos@gmail.com',
            'phone' => '09234567890'
        ],
        [
            'full_name' => 'Michelle Marfil',
            'email' => 'MichelleMarfil@gmail.com',
            'phone' => '09345678901'
        ],
        [
            'full_name' => 'Ashley Sarmiento',
            'email' => 'AshSar@gmail.com',
            'phone' => '09456789012'
        ],
        [
            'full_name' => 'Carlo Domis',
            'email' => 'carloDoms@gmail.com',
            'phone' => '09567890123'
    ]
    ];
    return view('customers', ['customers' => $customers]);
    }
}