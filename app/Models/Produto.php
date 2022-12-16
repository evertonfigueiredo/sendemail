<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Produto
 *
 * @property $id
 * @property $nome
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Produto extends Model
{
    
    static $rules = [
		'nome' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nome'];



}
