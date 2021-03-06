<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model {

    protected $fillable = ['title', 'project_id'];

    use SoftDeletes;
}
