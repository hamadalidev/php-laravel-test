<?php

namespace App\Repositories;

use App\Models\MenuItem;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class MenuRepository
{
    /**
     * @return Builder|Collection
     */
    public function getMenuItems()
    {
       $query = MenuItem::query();
       return $query->with('allChildren')
           ->where('parent_id', null)
           ->get();
    }

}
