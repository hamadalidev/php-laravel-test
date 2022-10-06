<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{


    public function subMenuItem()
    {
        return $this->hasMany(MenuItem::class, 'parent_id');
    }

    public function allChildren()
    {
        return $this->subMenuItem()->with('allChildren');
    }

}
