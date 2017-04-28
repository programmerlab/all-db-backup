<?php

namespace Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;  

use Illuminate\Foundation\Http\FormRequest;
use Response;

class Banner extends Eloquent {

   
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'banners';
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
    protected $fillable = ['title','photo','price','category_id']; // All field of user table here    


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    

    public function category()
    {
       
        return $this->belongsTo('Modules\Admin\Models\Category','category_id','id');
    }
  
}
