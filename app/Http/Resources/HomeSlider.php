<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class Homeslider extends JsonResource
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
            'banner_heading' => $this->title,
            'banner_subheading' => $this->subtitle,
            'banner_img' => url(Storage::url(str_replace('\\', '/', $this->image))),
            'banner_description' => $this->description,
            'create_button' => $this->btn1_text,
            'create_button_link' => $this->btn1_link,
            'take_a_look' => $this->btn2_text,
            'take_a_look_link' => $this->btn2_link,
            'timestamp' => $this->created_at,
        ];
    }
}
