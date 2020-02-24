<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class Team extends JsonResource
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
            'team_name' => $this->name,
            'team_designation' => $this->designation,
            'image' => url(Storage::url(str_replace('\\', '/', $this->image))),
            'team_about' => $this->description,
            'hire_btn' => 'Hire',
            'hire_url' => 'https://google.com/',
            'resume_btn' => 'Resume',
            'resume_url' => 'https://google.com/',
            'timestamp' => $this->created_at,
        ];
    }
}
