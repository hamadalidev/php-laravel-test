<?php

namespace App\Repositories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class EventRepository
{

    /**
     * @return Builder|Collection
     */
    public function getEventsWithWorkshops()
    {
       $query = Event::query();
       return $query->with('workShops')->get();
    }

    /**
     * @return Builder|Collection
     */
    public function getFutureEventsWithWorkshops()
    {
        $query = Event::query();

        return $query->whereHas('workShops', function($q) {
            $q->where('start', '>', now());
        })
            ->with('workShops')
            ->get();
    }
}
