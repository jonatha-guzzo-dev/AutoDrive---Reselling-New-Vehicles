<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'marca',
        'tipo',
        'valor'
    ];

    public $rules = [
        'marca' => 'required|min:3|max:100',
        'tipo'  => 'required|min:3|max:100',
        'valor' => 'required|numeric'
    ];

    public $messages = [
        'marca.required' => 'O campo marca é obrigatório.',
        'tipo.required'  => 'O campo tipo é obrigatório.',
        'valor.required' => 'O valor é obrigatório.',
        'valor.numeric'  => 'O valor deve ser numérico.'
    ];
}
