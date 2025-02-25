<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ['name'];

    public function __contrusct($name)
    {
        parent::__construct();
        $this->name = $name;
    }

    public function getRole()
    {
        return 'Admin';
    }
}
