<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Arr;

class JobListing extends Model{
    USE HasFactory;

    protected $fillable = ['title','salary'];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}