<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Employer;

class job extends Model
{
    use HasFactory;
    protected $table = 'job_listings';
    protected $fillable = ['title', 'salary'];

    public function employer(){
        return $this->belongsTo(Employer::class);
    }
}





