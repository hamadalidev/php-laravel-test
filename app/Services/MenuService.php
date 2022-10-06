<?php

namespace App\Services;

use App\Repositories\MenuRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class MenuService
{

    /**
     * @var MenuRepository
     */
    private $menuRepository;

    /**
     * @param MenuRepository $menuRepository
     */
    public function __construct(MenuRepository $menuRepository)
    {
        $this->menuRepository = $menuRepository;
    }

    /**
     * @return Builder|Collection
     */
    public function getMenuItems()
    {
        return $this->menuRepository->getMenuItems();
    }
}
