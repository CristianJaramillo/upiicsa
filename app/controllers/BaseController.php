<?php

use UPIICSA\Repositories\PageRepo;

class BaseController extends Controller {

	/**
	 * Default Layout
	 *
	 * @var string
	 */
	protected $layout = 'start';

	/**
	 * Desing params
	 * 
	 * @var array
	 */
	protected $params = array();

	/**
	 * @param array|string $var
	 * @param mixed $param
	 * @return void 
	 */
	protected function addParam($var, $param = NULL)
	{
		if (is_array($var) && is_null($param)) {
		
			foreach ($var as $key => $value) {
			
				extract([$key => $value]);
			
				$this->params += compact($key);

				unset($$key);			
			}

			unset($key);
			unset($value);

		} elseif(is_string($var)) {
			
			extract([$var => $param]);	
			
			$this->params += compact($var);
			
			unset($$var);
		}
	}

	/**
	 * @return
	 */
	public function notFoundUnless($value)
    {
        if ( ! $value) return "Not Found Unless";
    }

	/**
	 * @return void
	 */
	protected function setupPage()
	{
		$page = new PageRepo();
		$type = Auth::check() ? 'private' : 'public';
		$page = $page->current(Route::currentRouteName(), $type);
		if(is_object($page)) $this->addParam('page', $page);
		unset($page);
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			if (empty($this->params) && !Request::is('logout') && !Request::ajax()) {
				// $this->addParam('page', $this->getPage());
			}
		}
	}

	/**
	 * @return \View
	 */
	protected function index()
	{
		return View::make($this->layout, $this->params);
	}

}
