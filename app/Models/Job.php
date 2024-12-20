<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Psy\CodeCleaner\ReturnTypePass;

class Job extends Model{
    use HasFactory;

    protected $table = 'job_listings';

    protected $fillable = ['title','salary','employer_id'];

    public function employer(){
        return $this->belongsTo(Employer::class, 'employer_id');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listings_id");
    }
}