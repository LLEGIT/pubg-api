<?php

namespace App\Type;

enum BeverageType: string
{
    case Beer = 'beer';
    case Wine = 'wine';
    case Spirit = 'spirit';
    case NonAlcoholic = 'non_alcoholic';
}
