<?php

namespace App;

use App\Workout;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $table = 'exercises';

    protected $guarded = [];

    protected $fillable = [
        'exercise_name',
        'description',
        'weights',
    ];

    protected $log_name = 'name';

    protected $log_guarded = [
        'created',
        'updated',
    ];

    public function path()
    {
        return '/exercises/' . $this->id;
    }

    public function workout()
    {
        return $this->belongsToMany(Workout::class);
    }
}
