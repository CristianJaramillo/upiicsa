<?php namespace UPIICSA\Repositories;

use UPIICSA\Entities\User;

/**
 *
 */
class UserRepo extends BaseRepo
{
	/**
	 * @return UPIICSA\Entities\User
	 */
	public function getEntitie()
	{
		return new User();
	}

	/**
	 * @return
	 */
	public function lastsUsers($take)
	{
		return $this->entitie->with('category')
					->take($take)
					->orderBy('created_at', 'desc')
					->get();
	}

	/**
	 * @return 
	 */
	public function team($team_id)
	{
		return $this->entitie->where('team_id', $team_id)->withAll();
	}
}