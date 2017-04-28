<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

use Nestable\NestableTrait;

class Category extends Eloquent {

    use NestableTrait;

    protected $parent = 'parent_id';

     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';
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


}