<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class WorkoutResource extends Resource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'workout_date' => $this->workout_date,
            'notes' => $this->notes,
            'type_of_class' => $this->type_of_class,
            'count_for_work' => $this->count_for_work,
            'prescribed' => $this->prescribed,

            // 'user' => new UserResource($this->whenLoaded('user')),
        ];
    }
}
