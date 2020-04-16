<?php

namespace CodeIgniter;

use App\Controllers\BaseController;
use CodeIgniter\Model\PostModel;

class PostController extends BaseController
{
    
    public function create()
    {
        if($this->request->getMethod()!='post'){
            return view('posts/create');
        }
        $model = new PostModel();
        $inset = $model->insert([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'mobile' => $this->request->getPost('mobile'),
            'dob' => $this->request->getPost('dob'),
            'pincode' => $this->request->getPost('pincode')
        ]);

        if($inset){
            return redirect('data')->with('message','Data added Sucessfully');
        }else{
            // throw new \codeigniter\Exceptions\PageNotFoundException();
            return redirect('posts/create')->withInput();
        }
        return view('posts/create');
    }
}
