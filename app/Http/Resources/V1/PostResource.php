<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //clase para dar mejor apariencia a las peticiones
        return [
            'title'=>$this->title,
            'slug'=>$this->slug,
            //campo virtual dentro del modelo tambien puede mostrarce
            'excerpt'=>$this->excerpt,
            'content'=>$this->content,
        ];
    }
}
