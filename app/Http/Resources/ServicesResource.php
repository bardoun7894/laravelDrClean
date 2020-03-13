<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServicesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return  [
            'service_id'=>$this->id,
            'service_type'=>$this->service_type,
         //   'clothes'=>  clothesResource::collection($this->clothes),
            ]; 
    }
}
