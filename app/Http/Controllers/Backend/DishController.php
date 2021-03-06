<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
Use App\Models\Dish;
Use App\Models\Category;
Use App\Models\Dish_pic;
use Illuminate\Http\File;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $dishes = Dish::all();

       return view('Backend.Dish.index', [
          'dishes' => $dishes
      ]);
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('Backend.Dish.create', [
           'categories' => $categories
        ]);//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validar
        $rules = array(
            'name'       => 'required',
            'description'      => 'required',
            'category_id' => 'required',
            'price' => 'required'
            //'availabe' => 'required' // If exists is True, if not is False
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/dishes/create')
            ->withErrors($validator)
            ->withInput(Input::all());
        } else {
            $dish = new Dish;
            if (is_numeric(Input::get('category_id'))) {        // If given category_id is a number, we use it
                $dish->category_id = Input::get('category_id'); 
            } else {                                            // Else, we use the Default category
                $def = Category::where('name', '=', 'Default')->firstOrFail(); // Find Default category_id
                $dish->category_id = $def->id;
            }   
            // store
            $dish->name       = Input::get('name');
            $dish->description      = Input::get('description');
            $dish->price = Input::get('price');
            $dish->available = $request->has('available'); // If available exists is True, if not is False
            $dish->save();

            //dd(Input::all());
            //dd(Input::has('dishphoto'));
            //dd($data['dishphoto']);
                        
            $data = $request->all();
            if ($data['dishphoto']) {
                foreach($data['dishphoto'] as $photo) {
                    //dd($photo);
                    $path = $photo->store('img/dishphotos');
                    $dp = new Dish_pic;
                    $dp->dish_id = $dish->id;
                    $dp->img_path = $path;
                    $dp->enabled = True;
                    $dp->save();
                    //dd($path);
                }
            }
        }
        
        // redirect
        Session::flash('message', 'Platillo creado con éxito!');
        return Redirect::to('admin/dishes/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return view('Backend.Dish.show'); //
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                // get the nerd
        $dish = Dish::find($id);

        // show the edit form and pass the dish
        return View::make('Backend.Dish.edit')
        ->with('dish', $dish);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'description'      => 'required',
            'category_id' => 'required',
            'price' => 'required'
            //'availabe' => 'required' // If exists is True, if not is False
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/dishes/' . $id . '/edit')
            ->withErrors($validator)
            ->withInput(Input::all());
        } else {
            // store
            $dish = Dish::find($id);
            $dish->name       = Input::get('name');
            $dish->description      = Input::get('description');
            $dish->category_id = Input::get('category_id');
            $dish->price = Input::get('price');
            $dish->available = $request->has('available'); // If available exists is True, if not is False
        }
        $dish->save();

        // redirect
        Session::flash('message', 'Platillo modificado con éxito!');
        return Redirect::to('admin/dishes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $dish = Dish::find($id);
        $dish->delete();

        // redirect
        Session::flash('message', 'Platillo eliminado con éxito!');
        return Redirect::to('admin/dishes');    }
    }
