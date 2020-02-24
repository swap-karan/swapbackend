<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class Testimonial extends JsonResource
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
            'testimonial_user' => $this->name,
            'testimonial_designation' => $this->tag_line,
            'testimonial_img' => url(Storage::url(str_replace('\\', '/', $this->image))),
            'testimonial_text' => $this->description,
            'timestamp' => $this->created_at,
        ];
    }
}
