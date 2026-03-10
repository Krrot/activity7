<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cover',
        'content',
        'robotics_kit_id'
    ];

    public function roboticsKit()
    {
        return $this->belongsTo(RoboticsKit::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }
}