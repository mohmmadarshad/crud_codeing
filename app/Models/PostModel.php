<?php

namespace CodeIgniter\Model;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'data';
    protected $allowedFields = [
        'name', 'email', 'mobile', 'dob', 'pincode', 'slug'
    ];
    public function getPosts($slug = null)
    {
        if ($slug === null) {
            return $this->findAll();
        }
    }
}
