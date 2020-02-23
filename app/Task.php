<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = [
        'title', 'text', 'level_id', 'image', 'answer'
    ];

    protected $table = 'tasks';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
