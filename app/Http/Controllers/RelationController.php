<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Relation;
use App\Http\Resources\RelationResource;

class RelationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relations = Relation::getAllRelations();
        return RelationResource::collection($relations);
    }
}
