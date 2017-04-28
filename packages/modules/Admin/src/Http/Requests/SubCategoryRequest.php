<?php

namespace Modules\Admin\Http\Requests;

use App\Http\Requests\Request;
use Input;

class SubCategoryRequest  extends Request {

    /**
     * The metric validation rules.
     *
     * @return array    
     */
    public function rules() { 
            switch ( $this->method() ) {
                case 'GET':
                case 'DELETE': {
                        return [ ];
                    }
                case 'POST': {
                        return [
                           //  'sub_category_name' => 'required|unique:categories,name', 
                              'sub_category_name' => 'required', 
                        ];
                    }
                case 'PUT':
                case 'PATCH': {
                    if ( $category = $this->category ) {

                        return [
                             'sub_category_name' => 'required', 
                        ];
                    }
                }
                default:break;
            }
        //}
    }

    /**
     * The
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

}
