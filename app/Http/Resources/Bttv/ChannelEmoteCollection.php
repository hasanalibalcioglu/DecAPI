<?php

namespace App\Http\Resources\Bttv;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ChannelEmoteCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->collection
                    ->map
                    ->toArray($request)
                    ->all();
    }
}
