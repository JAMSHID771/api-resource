<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\AuthorResource;
use Illuminate\Http\Resources\Json\JsonResource;


class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
public function toArray($request)
{
    return [
        'title' => $this->title,
        'description' => $this->description,
        'price' => $this->price,
        'author' => AuthorResource::make($this->whenLoaded('author')),
    ];
}
}