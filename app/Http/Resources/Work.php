<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class Work extends JsonResource
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
            'business_title' => $this->title,
            'portfolio_img' => url(Storage::url(str_replace('\\', '/', $this->image))),
            // 'excerpt' => $this->excerpt,
            // 'description' => $this->description,
            'business_dev' => $this->created_at,
            'brandcard' => 'Business Card Design',
            'brandcard_url' => 'https://google.com/',
            'barnding' => 'Branding',
            'branding_url' => 'https://google.com/',
            'business_dev' => 'Swapdevelopment, 28th Jan, 2020',
            'business_like' => 'Like',
        ];
    }
}
