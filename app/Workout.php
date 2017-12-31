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
        'workout_description',
        'results',
        'workout_type',
        'count_for_work',
        'prescribed',
        'athlete'
    ];

    protected $log_name;

    protected $log_guarded = [
        'created',
        'updated',
    ];

    public $complex = [];

    public function addExercise(Exercise $exercise)
    {
        $this->exercises()->attach($exercise->id);
    }

    public function addExerciseToComplex(Exercise $exercise)
    {
        $this->complex = $exercise;
    }

    public function athlete()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class);
    }

    public function path()
    {
        return '/workout/' . $this->id;
    }
}
