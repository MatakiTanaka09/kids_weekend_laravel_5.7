<?php

namespace App\Http\Controllers;

use App\Models\ActivityEventSchool;
use App\Http\Resources\Search\Top\Main as TopMainResource;
use App\Http\Resources\Search\EventList\Main as EventListMainResource;
use App\Http\Resources\Search\EventDetail\Main as EventDetailMainResource;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchTop()
    {
        return TopMainResource::collection(
            ActivityEventSchool::with(['Event.CategoryEvent', 'Activity'])->get()
        );
    }

    public function searchEventList()
    {
        return EventListMainResource::collection(
            ActivityEventSchool::with(['Event.CategoryEvent', 'Activity'])->get()
        );
    }

    public function searchEventDetail()
    {
        return EventDetailMainResource::collection(
            ActivityEventSchool::with(['Event.CategoryEvent', 'Activity', 'School'])->get()
        );
    }
}
