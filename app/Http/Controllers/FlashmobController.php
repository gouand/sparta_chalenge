<?php

namespace App\Http\Controllers;

use App\Http\Resources\FlashmobResource;
use Illuminate\Http\Request;
use App\Flashmob as Flashmob;
class FlashmobController extends Controller
{
    protected $flashmob;

    public function __construct(Flashmob $flashmob)
    {
        $this->flashmob = $flashmob;
    }

    /**
     * Get users for the data table.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getUsersForDataTable(Request $request)
    {
        ini_set('memory_limit', '-1');
        $flashmobs = $this->flashmob
        ->all()->get(1)->paginate(15);
        $flashmob = $flashmobs->chunk(1000);
        return FlashmobResource::collection($flashmobs);
    }
}
