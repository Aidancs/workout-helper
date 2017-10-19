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
        'times',
        'workout_id',
    ];

    protected $log_name = 'name';

    protected $log_guarded = [
        'created',
        'updated',
    ];

    public function setExerciseName($value) {
        $this->attribute['exercise_name'] = $value;
    }

    public function setDescription($value) {
        $this->attribute['description'] = $value;
    }

    public function setWeights($value) {
        $this->attribute['weights'] = $value;
    }

    public function setTimes($value) {
        $this->attribute['time'] = $value;
    }

    public function path()
    {
        return '/exercises/' . $this->id;
    }

    public function workout() {
        return $this->belongsTo(Workout::class);
    }
}
