<?php

namespace Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model as Eloquent; 
use Modules\Admin\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Response;

class ShippingBillingAddress extends Eloquent {

   
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'shipping_billing_addresses';
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
    protected $fillable = [
                            'user_id',
                            'product_id',
                            'reference_number',
                            'name',
                            'status',
                            'email',
                            'mobile',
                            'phone',
                            'address1',
                            'address1',
                            'zip_code',
                            'city',
                            'state',
                            'country',
                            'address_type'
                        ]; 
 

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    

    public function user()
    {
       
        return $this->belongsTo('Modules\Admin\Models\User','user_id','id');
    }
    /*---product---*/
    public function product()
    {
       
        return $this->belongsTo('Modules\Admin\Models\Product','product_id','id');
    }
    
  
}
