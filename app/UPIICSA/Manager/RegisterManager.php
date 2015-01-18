<?php namespace UPIICSA\Manager;

class RegisterManager extends BaseManager
{
	/**
	 * @return array
	 */
	public function getRules(){
		return [
			'full_name'   => 'min:3|max:50|required',
			'email'       => 'email|required|unique:users,email',
			'sex'         => 'required',
			'team_id'     => 'required',
			'category_id' => 'exists:categories,id|required',
			'question_1'  => 'min:50|max:250|required',
			'question_2'  => 'required',
			'question_3'  => 'required',
			'question_4'  => 'required',
			'question_5'  => 'min:50|max:250|required',
			'question_6'  => 'required',
			'question_7'  => 'required',
			'question_8'  => 'required',
			'question_9'  => 'required',
			'question_10' => 'required',
		];
	}

	/**
	 * @param array $data
	 * @return array $data
	 */
	public function preparateData(array $data)
	{
		$data['full_name'] = strip_tags($data['full_name']);

		return $data;

	}

}