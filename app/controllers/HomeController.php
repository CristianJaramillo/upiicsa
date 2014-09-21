<?php

use Component\Manager\RegisterManager;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	/**
	 * GET /
	 *
	 * @return \View
	 */
	public function home(){
	
		$this->addParam('last_users', 
				User::with('category')
					->take(10)
					->orderBy('created_at', 'desc')
					->get()
		);

		return $this->show();

	}

	/**
	 * GET /equipo/{id}
	 *
	 * @return \View
	 */
	public function team($id){
	
		$team = User::where('team', $id)->get();
	
		$this->notFoundUnless($team);

		$page = $this->getPage('equipo');

		return View::make($this->layout, compact('team', 'page', 'id'));
	}

	/**
	 * GET /carrera/{name}/{id}
	 *
	 * @return \View
	 */
	public function category($name, $id){
	
		$category = Category::find($id);

		$this->notFoundUnless($category);

		$page = $this->getPage('carrera');
		
		return View::make($this->layout, compact('category', 'page'));

	}

	/**
	 * GET /candidato/{name}/{id}
	 *
	 * @return \View
	 */
	public function user($name, $id){
	
		$user = User::find($id);

		$this->notFoundUnless($user);

		$page = $this->getPage('candidato');
		
		return View::make($this->layout, compact('user', 'page'));

	}

	/**
	 * GET /sing-up
	 *
	 * @return \View
	 */
	public function singUp(){
		
		$this->addParam('categories', Category::lists('name', 'id'));

		return $this->show();
	}

	/**
	 * GET /users
	 *
	 * @return \View
	 */
	public function users(){

		$this->addParam(['users' => User::with('category')->get()]);

		return $this->show();
	}

	public function register(){
		$manager = new RegisterManager(new User, Input::all());
        
        $manager->save();

        Session::flash('message', 'register-sucess');

        return Redirect::route('sing-up');
	}

}
