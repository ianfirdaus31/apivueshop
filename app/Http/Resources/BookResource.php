<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $parent = parent::toArray($request);
        $data['categories'] = $this->categories;
        $data = array_merge($parent, $data);
        return [
            'status' => 'success',
            'message' => 'book data',
            'data' => $data,
        ];
    }
}
