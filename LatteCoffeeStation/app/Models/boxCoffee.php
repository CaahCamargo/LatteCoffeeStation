<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class boxCoffee extends Model
{
    use HasFactory;
    protected $fillable = [
        'torra',
        'graos',
        'capsula',
        'espresso',
        'irish',
        'latte',
        'macchiato',
        'mocha',
        'cappuccino',
        'cGelado',
        'observacoes',
    ];
}
