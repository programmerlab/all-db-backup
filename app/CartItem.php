<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    

	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cart_items';
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

    public function cart()
    {
        return $this->belongsTo('App\Cart');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}