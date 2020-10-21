<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VoteResource extends JsonResource
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
            'choiceId' => $this->choice->id,
            'userId' => $this->user->id,
            'pollId' => $this->poll->id,
            'published' => $this->created_at->format('d F Y'),
        ];
    }
}
