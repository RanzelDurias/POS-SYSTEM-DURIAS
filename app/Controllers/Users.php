<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
      $users = [
    [
        'username' => 'RanzelDurias',
        'full_name' => 'Ranzel Durias',
        'role' => 'Administrator'
    ],
    [
        'username' => 'RaychelDurias',
        'full_name' => 'Raychel Durias',
        'role' => 'Manager'
    ],
    [
        'username' => 'KingJames',
        'full_name' => 'Lebron James',
        'role' => 'Cashier'
    ],
    [
        'username' => 'ChefCurry',
        'full_name' => 'Stephen Curry',
        'role' => 'Sales Staff'
    ],
    [
        'username' => 'Booj',
        'full_name' => 'Benedict Perez',
        'role' => 'Inventory Staff'
    ]
];
    return view('users', ['users' => $users]);
    }
}   