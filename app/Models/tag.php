<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\job;


class tag extends Model
{
    use HasFactory;

    public function jobs(){
        return $this->belongsToMany(job::class, relatedPivotKey: 'job_listing_id');
    }
}
