<?php

use Faker\Factory as Faker;
use UPIICSA\Entities\Category;
use UPIICSA\Entities\User;
use UPIICSA\Manager\RegisterManager;
use UPIICSA\Repositories\UserRepo;

/**
 * 
 */
class HomeController extends BaseController
{

	/**
	 * GET /
	 *
	 * @return \View
	 */
	public function index()
	{
		$userRepo = new UserRepo();

		$this->addParam([
				"categories"  => Category::lists('name', 'id'),
				"lasts_users" => $userRepo->lastsUsers(10),
				"faker"       => Faker::create(),
				"colors"      => ["success", "secondary", "info", "warning", "danger"],
			]);

		unset($userRepo);

		$this->setupPage();
		
		return parent::index();
	}

	/**
	 * POST /
	 *
	 * @return \Response
	 */
	public function register()
	{
		$manager = new RegisterManager(new User, Input::all());
        
	    $manager->save();

	    return Redirect::to('/#ultimos-registros');
	}

	/**
	 * GET  /team/{id}
	 *
	 * @param int $id
	 * @return \View
	 */
	public function team($id)
	{
		$userRepo = new UserRepo();

		$this->addParam([
				"users_team" => $userRepo->team($id),
				"id"         => $id
			]);

		$this->setupPage();

		return parent::index();
	}

}