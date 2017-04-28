<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    
	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'carts';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     /**
     * The primary key used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function cartItems()
    {
        return $this->hasMany('App\CartItem');
    }

}