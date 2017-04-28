<?php

namespace Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;  

use Illuminate\Foundation\Http\FormRequest;
use Response;

class Coupan extends Eloquent {

   
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'coupans';
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
    protected $fillable = ['coupan_code','product_id','start_date','end_date']; // All field of user table here    


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    

    public function product()
    {
       
        return $this->belongsTo('Modules\Admin\Models\Product','product_id','id');
    }
  
}
