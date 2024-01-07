<?php

namespace App\Http\Resources;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VoteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'uuid'       => $this->uuid,
            'user'       => UserResource::make($this->user),
            'product'    => ProductResource::make($this->product),
            'rate'       => $this->rate,
            'confirmed'  => $this->confirmed,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
