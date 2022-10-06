<?php

namespace App\Services;

use App\Repositories\EventRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class EventsService
{
    /**
     * @var EventRepository
     */
    private $eventRepository;

    /**
     * @param EventRepository $eventRepository
     */
    public function __construct(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    /**
     * @return Builder|Collection
     */
    public function getEventsWithWorkshops()
    {
        return $this->eventRepository->getEventsWithWorkshops();

    }
}
