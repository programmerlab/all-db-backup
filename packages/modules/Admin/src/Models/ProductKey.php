<?php

namespace Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;  

use Illuminate\Foundation\Http\FormRequest;
use Response;

class ProductKey extends Eloquent {

   
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product_keys';
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
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['product_id','secret_key','user_id','validity_year','dealer_id']; // All field of user table here    


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    

    public function product()
    {
       
        return $this->belongsTo('Modules\Admin\Models\Product','product_id','id');
    }
     public function user()
    {
       
        return $this->belongsTo('Modules\Admin\Models\User','user_id','id');
    }
     public function dealer()
    {
       
        return $this->belongsTo('Modules\Admin\Models\Dealer','dealer_id','id');
    }
  
}
