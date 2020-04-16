<?php

namespace App\Controllers;

use CodeIgniter\Model\PostModel;

// // use App\Models;
// use App\Models\PostModel;

class Home extends BaseController
{
	public function index()
	{
		return view('pages/home.php');
	}

	//--------------------------------------------------------------------

	public function create()
	{
		if ($this->request->getMethod() != 'post') {
			return view('/');
		}
		$model = new PostModel();
		$inset = $model->insert([
			'name' => $this->request->getPost('name'),
			'email' => $this->request->getPost('email'),
			'mobile' => $this->request->getPost('mobile'),
			'dob' => $this->request->getPost('dob'),
			'pincode' => $this->request->getPost('pincode')
		]);

		if ($inset) {
			return redirect('data')->with('message', 'Data added Sucessfully');
		} else {
			// throw new \codeigniter\Exceptions\PageNotFoundException();
			return redirect('/')->withInput();
		}
		// return view('posts/create');
	}
}
