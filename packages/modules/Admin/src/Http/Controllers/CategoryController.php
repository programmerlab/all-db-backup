<?php
namespace Modules\Admin\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\CategoryRequest;
use Modules\Admin\Models\User;
use Modules\Admin\Models\Category;
//use App\Category;
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
use DB;
use Route;
use Crypt;
use App\Http\Controllers\Controller;
use Illuminate\Http\Dispatcher; 
use App\Helpers\Helper;

/**
 * Class AdminController
 */
class CategoryController extends Controller {
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
        View::share('viewPage', 'category');
        View::share('helper',new Helper);
        $this->record_per_page = Config::get('app.record_per_page');
    }

    protected $categories;

    /*
     * Dashboard
     * */

    public function index(Category $category, Request $request) 
    { 
        $page_title = 'Category';
        $page_action = 'View Category'; 
        if ($request->ajax()) {
            $id = $request->get('id'); 
            $category = Category::find($id); 
            $category->status = $s;
            $category->save();
            echo $s;
            exit();
        }
        // Search by name ,email and group
        $search = Input::get('search');
        $status = Input::get('status');
        if ((isset($search) && !empty($search))) {

            $search = isset($search) ? Input::get('search') : '';
               
            $categories = Category::where(function($query) use($search,$status) {
                        if (!empty($search)) {
                            $query->Where('category_name', 'LIKE', "%$search%")
                                    ->OrWhere('sub_category_name', 'LIKE', "%$search%");
                        }
                        
                    })->Paginate($this->record_per_page);
        } else {
            $categories = Category::with('subcategory')->Paginate($this->record_per_page);
        }
        // Category sub category list-----
        $html = "";
        $categories2 = Category::with('children')->where('parent_id',0)->get();
        $cname = [];
        $level = 1;
        foreach ($categories2 as $key => $value) {
              //  $cname[$value->name][$value->id][] = ['id'=>$value->id, 'cname'=>$value->name,'level'=>$value->level];
            $cname[$value->name][] = ['id'=>$value->id, 'cname'=>$value->name,'level'=>$value->level];

            $arr[] = ['id'=>$value->id, 'parent_id'=>$value->parent_id, 'cname'=>$value->name,'level'=>$value->level];


            $html .= str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', $value->level).$value->name;
            $r = route('category.edit',$value->id);
            $html  .= '<a href="'.$r.'"><i class="fa fa-fw fa-pencil-square-o" title="edit"></i> &nbsp;&nbsp;</a>'.'<br>';

            $cat = Category::where('parent_id',$value->id)->get();
            foreach ($cat as $key => $result) {
                $parent_id = $result->id; 

                $cname[$value->name][$result->id][] = ['id'=>$result->id, 'parent_id'=>$result->parent_id,'cname'=>$result->name,'level'=>$result->level];
                $html  .= str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', $result->level).$result->name;
                $r = route('sub-category.edit',$result->id);
                $html  .= '<a href="'.$r.'"><i class="fa fa-fw fa-pencil-square-o" title="edit"></i>&nbsp;&nbsp;</a>'.'<br>';
                $arr[] = ['id'=>$result->id, 'parent_id'=>$result->parent_id, 'cname'=>$result->name,'level'=>$result->level];
                while (1) {
                    $data = Category::where('parent_id',$parent_id)->first();
                   
                    if($data)
                    {
                        $level++;
                        $parent_id = $data->id;

                        $cname[$value->name][$result->id][$parent_id][] = ['id'=>$data->id,'parent_id'=>$data->parent_id,'cname'=>$data->name,'level'=>$data->level];

                         $html  .= str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', $data->level).$data->name;
                         $r         = route('sub-category.edit',$data->id);
                         $html  .= '<a href="'.$r.'"><i class="fa fa-fw fa-pencil-square-o" title="edit"></i> &nbsp;&nbsp;</a> '.'<br>';
                         $arr[]  = ['id'=>$data->id, 'parent_id'=>$data->parent_id,'cname'=>$data->name,'level'=>$data->level];
                    }else{
                        break;
                    }
                }
                
            }
            $result_set[$value->id]  = $arr; 
            $arr    = []; 
        }  
        
        return view('packages::category.index', compact('result_set','categories','data', 'page_title', 'page_action','html'));
    }

    /*
     * create Group method
     * */

    public function create(Category $category) 
    {
         
        $page_title = 'Category';
        $page_action = 'Create category';
        $sub_category_name  = Category::all();

        $html =  Category::renderAsHtml(); 

        $categories =  Category::attr(['name' => 'categories'])
                        ->selected([3])
                        ->renderAsDropdown();



        return view('packages::category.create', compact('categories', 'html','category','sub_category_name', 'page_title', 'page_action'));
    }

    /*
     * Save Group method
     * */

    public function store(CategoryRequest $request, Category $category) 
    {  
 

        $name = $request->get('category_name');
        $slug = str_slug($request->get('sub_cat'));
        $parent_id = 0;

        $cat = new Category;
        $cat->name                  =  $request->get('category_name');
        $cat->slug                  = strtolower(str_slug($request->get('category_name')));
        $cat->parent_id             = $parent_id;
        $cat->category_name         =  $request->get('category_name');
        $cat->sub_category_name     =  $request->get('category_name');
        $cat->level                 =  1;
        $cat->save();   

        return Redirect::to(route('category'))
                            ->with('flash_alert_notice', 'New category was successfully created !');
        }

    /*
     * Edit Group method
     * @param 
     * object : $category
     * */

    public function edit(Category $category) {

        $page_title = 'Category';
        $page_action = 'Edit category'; 

        return view('packages::category.edit', compact( 'category', 'page_title', 'page_action'));
    }

    public function update(Request $request, Category $category) {
       
        $name = $request->get('category_name');
        $slug = str_slug($request->get('sub_cat'));
        $parent_id = 0;

        $cat = Category::find($category->id);
        $cat->name =  $request->get('category_name');
        $cat->slug = strtolower(str_slug($request->get('category_name')));
        $cat->parent_id = $parent_id;
        $cat->category_name         =  $request->get('category_name');
        $cat->sub_category_name     =  $request->get('category_name');
        $cat->level                 =  1;
        $cat->save();   

        return Redirect::to(route('category'))
                        ->with('flash_alert_notice', 'Category was  successfully updated !');
    }
    /*
     *Delete User
     * @param ID
     * 
     */
    public function destroy(Category $category) {
        
        $d = Category::where('id',$category->id)->delete(); 
        return Redirect::to(route('category'))
                        ->with('flash_alert_notice', 'Category was successfully deleted!');
    }

    public function show(Category $category) {
        
    }

}
