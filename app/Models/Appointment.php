<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the product primary key (id)
     * $this->attributes['duration'] - int - contains appointment duration
     * $this->attributes['reason'] - string - contains appointment reason
     * $this->attributes['status'] - Enum - contains appointment status
     * $this->attributes['modality'] -  - contains appointment modality
     * $this->attributes['price'] - int - contains the product price
     */
    protected $fillable = ['duration', 'reason', 'status', 'modality', 'price'];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId($id): void
    {
        $this->attributes['id'] = $id;
    }

    public function getDuration(): int
    {
        return $this->attributes['duration'];
    }

    public function setDuration($duration): void
    {
        $this->attributes['duration'] = $duration;
    }

    public function getReason(): string
    {
        return $this->attributes['reason'];
    }

    public function setReason($reason): void
    {
        $this->attributes['reason'] = $reason;
    }

    public function getStatus(): string
    {
        return $this->attributes['status'];
    }

    public function setStatus($status): void
    {
        $this->attributes['status'] = $status;
    }

    public function getModality(): string
    {
        return $this->attributes['modality'];
    }

    public function setModality($modality): void
    {
        $this->attributes['modality'] = $modality;
    }

    public function getPrice(): int
    {
        return $this->attributes['price'];
    }

    public function setPrice($price): void
    {
        $this->attributes['price'] = $price;
    }
}
