<?php

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

function getCurrentRoute()
{
   $currentRoute = Route::currentRouteName();

    switch ($currentRoute) {
        case 'admin.index':
            return 'active';
            break;
        case 'admin.user.create':
            return 'active';
            break;
        case 'admin.user.edit':
            return 'active';
                break;
        default:
            return '';
            break;
    }
}
