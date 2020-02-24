<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class Job extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'opening' => $this->opening,
            // 'testimonial_img' => url(Storage::url(str_replace('\\', '/', $this->image))),
            'experience' => $this->experience,
            'skills' => $this->skills,
            'description' => $this->description,
            'note' => $this->note,
            'timestamp' => $this->created_at,
        ];
    }
}
