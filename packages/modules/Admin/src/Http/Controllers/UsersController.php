<?php
namespace Modules\Admin\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\UserRequest;
use Modules\Admin\Models\User;
use Modules\Admin\Models\Position;
use Input;
use Validator;
use Auth;
use Paginate;
use Grids;
use HTML;
use Form;
use Hash;
use View;
use URL;
use Lang;
use Session; 
use Crypt;
use App\Http\Controllers\Controller;
use Illuminate\Http\Dispatcher; 
use App\Helpers\Helper;

/**
 * Class AdminController
 */
class UsersController extends Controller {
    /**
     * @var  Repository
     */

    /**
     * Displays all admin.
     *
     * @return \Illuminate\View\View
     */
    public function __construct() {
        $this->middleware('admin');
        View::share('viewPage', 'user');
        View::share('helper',new Helper);
        $this->record_per_page = Config::get('app.record_per_page');
    }

    protected $users;

    /*
     * Dashboard
     * */

    public function index(User $user, Request $request) 
    { 
        if ($request->ajax()) {
            $id = $request->get('id');
            $status = $request->get('status');
            $user = User::find($id);
            $s = ($status == 1) ? $status = 0 : $status = 1;
            $user->status = $s;
            $user->save();
            echo $s;
            exit();
        }
        
        $page_title = 'User';
        $page_action = 'View User'; 
        $users = $user->orderBy('id','desc')->Paginate($this->record_per_page);
        
        return view('packages::users.user.index', compact('users', 'page_title', 'page_action'));
    }

    /*
     * create Group method
     * */

    public function create(User $user) 
    {
        $page_title = 'User';
        $page_action = 'Create User';

        return view('packages::users.user.create', compact('user', 'page_title', 'page_action'));
    }

    /*
     * Save Group method
     * */

    public function store(UserRequest $request, User $user) {
        $user->fill(Input::all()); 
        $user->password = Hash::make($request->get('password'));  
        $user->save(); 
       
        return Redirect::to(route('user'))
                            ->with('flash_alert_notice', 'New user was successfully created !');
        }

    /*
     * Edit Group method
     * @param 
     * object : $user
     * */

    public function edit(User $user) {

        $page_title = 'User';
        $page_action = 'Show Users'; 
        
        return view('packages::users.user.edit', compact('user', 'page_title', 'page_action'));
    }

    public function update(Request $request, User $user) {
        
        $user->fill(Input::all());
        $user->password = Hash::make($request->get('password')); 
        $user->save();
        return Redirect::to(route('user'))
                        ->with('flash_alert_notice', 'User was  successfully updated !');
    }
    /*
     *Delete User
     * @param ID
     * 
     */
    public function destroy(User $user) {
        
        User::where('id',$user->id)->delete();

        return Redirect::to(route('user'))
                        ->with('flash_alert_notice', 'User was successfully deleted!');
    }

    public function show(User $user) {
        
    }

}
