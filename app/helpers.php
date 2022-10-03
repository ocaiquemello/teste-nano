<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Route;

function greeting()
{
    $user = auth()->user();

    $hora = date('H');

    if ($hora >= 6 && $hora <= 12)
        return 'Bom dia, ' . $user->name;
    else if ($hora > 12 && $hora <= 18)
        return 'Boa tarde, ' . $user->name;
    else
        return 'Boa noite, ' . $user->name;
}

function avatar()
{
    $auth = auth()->user();

    return $auth->path ? $auth->path : mix('assets/images/blank.png');
}

function getCurrentRoute($route)
{
   $currentRoute = Route::currentRouteName();

   if($currentRoute === $route)
   {
        return 'active';
   }

   return '';

    // switch ($currentRoute) {
    //     case 'admin.employee.index':
    //         return 'active';
    //         break;
    //     case 'admin.employee.register':
    //         return 'active';
    //         break;
    //     default:
    //         return '';
    //         break;
    // }
}

function listEmployees()
{
    return Employee::paginate(15);
}

function formatCurrentBalance($value)
{
    return str_replace(['','.'], ['.',','], $value);
}

function formatDate($value)
{
    return date('d/m/Y H:i:s', strtotime($value));
}
