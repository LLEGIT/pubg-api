<?php

namespace App\Type;

enum UserRole: string
{
    case Waiter = 'waiter';
    case Manager = 'manager';
}
