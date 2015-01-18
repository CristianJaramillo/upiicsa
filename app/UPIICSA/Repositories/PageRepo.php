<?php

namespace UPIICSA\Repositories;

use UPIICSA\Entities\Page;

class PageRepo extends BaseRepo
{
	
	/**
	 * The filter page not authorized
	 * 
	 * @return Eloquent
	 */
	public function current($name, $type = 'public')
    {
        return $this->entitie->current($name)->where('type', $type)->first();
    }

	/**
	 * @return UPIICSA\Entities\Page
	 */
	public function getEntitie()
	{
		return new Page;
	}

}