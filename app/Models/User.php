<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'rol',
        'password',
    ];
    protected $hidden = [
        'password',
    ];
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}