<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['name'];

    public function projects() 
    {
        return $this->morphedByMany(Project::class, 'imageables');
    }

    public function categories() 
    {
        return $this->morphedByMany(Category::class, 'imageables');
    }
}
