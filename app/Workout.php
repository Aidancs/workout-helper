<?php

namespace App;

use App\Exercise;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    protected $table = 'workout';

    protected $guarded = [];

    protected $fillable = [
        'workout_date',
        'type_of_class',
        'rounds',
        'sets',
        'notes',
        'count_for_work',
        'color',
        'prescribed',
        'time_to_complete_round',
        'user_id',
    ];

    protected $log_name;

    protected $log_guarded = [
        'created',
        'updated',
    ];

    public function addExercise($exercise)
    {
        $this->exercises()->create($exercise);
    }

    public function athlete()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function exercises() {
        return $this->hasMany(Exercise::class);
    }

    public function path()
    {
        return '/workout/' . $this->id;
    }
}
