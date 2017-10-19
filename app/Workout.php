<?php

namespace App;

use App\Exercise;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    protected $table = 'workouts';

    protected $guarded = [];

    protected $fillable = [
        'workout_name',
        'description',
        'user_id'
        // 'workout_date',
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

    public function setWorkoutName($value) {
        $this->attribute['workout_name'] = $value;
    }

    public function setDescription($value) {
        $this->attribute['description'] = $value;
    }

    // public function setWorkoutDate($value) {
    //     $this->attribute['workout_date'] = $value;
    // }

    public function athlete()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function exercises() {
        return $this->hasMany(Exercise::class);
    }

    public function path()
    {
        return '/workouts/' . $this->id;
    }
}
