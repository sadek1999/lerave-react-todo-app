<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class projectResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public static $wrap=false;
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'created_at' => (new Carbon($this->created_at))->format('d-m-y'),
            'due_date' => (new Carbon($this->due_date))->format('d-m-y'),
            'status' => $this->status,
            'image_path' => $this->image_path,
            'createdBy' => new userResource($this->createdBy),
            'updatedBy' => new userResource($this->updatedBy)
        ];
    }
}
