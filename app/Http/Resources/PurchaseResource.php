<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PurchaseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "supplier_id" => $this->supplier_id,
            "product_id" => $this->product_id,
            "quantity" => $this->quantity,
            "total_price" => $this->total_price,
            "created_at" => $this->created_at,
        ];
    }
}
