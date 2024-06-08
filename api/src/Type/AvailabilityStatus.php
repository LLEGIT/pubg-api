<?php

namespace App\Type;

enum AvailabilityStatus: string
{
    case Available = 'available';
    case Unavailable = 'unavailable';
}
