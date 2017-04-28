<?php

namespace App\Http\Requests;

 
use Input; 

class UserRequest extends Request {

    /** 
     * The user validation rules.
     *
     * @return array
     */
    public function rules() {
        //if ( $metrics = $this->metrics ) {
            switch ( $this->method() ) {
                case 'GET':
                case 'DELETE': {
                        return [ ];
                    }
                case 'POST': {
                        return [
                            
                            'email'     =>  'required|email|unique:users'
                            'password' => 'required|min:6',
                            'confirm_password' => 'required|same:password'

                        ];
                    }
                case 'PUT':
                case 'PATCH': { 
                    

                        return [
                             
                        ];
                    
                }
                default:break;
            }
         
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
