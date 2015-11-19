<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class ApiRepository
{
    /**
     * Get all the Users Name for the search input given by user.
     *
     * @return Collection
     */
    public function searchUsers($q)
    {
        return DB::table('users')->select('id','name','email')->where('name', 'like', '%'.$q.'%')->get();
    }

    /**
     * Get all the Service Name for the search input given by user.
     *
     * @return Collection
     */
    public function searchService($q)
    {
        return DB::table('services')->select('id','title')->where('title', 'like', '%'.$q.'%')->get();
    }

    /**
     * Get all the Subject Area for the search input given by user.
     *
     * @return Collection
     */
    public function searchSubjectArea($q)
    {
        return DB::table('subjectarea')->select('id','title')->where('title', 'like', '%'.$q.'%')->get();
    }

    /**
     * Get all the Services.
     *
     * @return Collection
     */
    public function getServices()
    {
        return DB::table('services')->select('id','title')->get();
    }
}