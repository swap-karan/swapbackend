<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class Service extends JsonResource
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
            'services_number' => $this->id,
            'service_head' => $this->name,
            'services_subheading' => $this->tag_line,
          'service_img' => url(Storage::url(str_replace('\\', '/', $this->image))),
          'service_desc' => $this->description,
          'service_url_text' => 'Read More',
          'service_url' => 'https://google.com/',
        ];
    }
}
