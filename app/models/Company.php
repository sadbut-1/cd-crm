<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'logo', 'website'
    ];

    public function employers()
    {
        return $this->hasMany(Employer::class,'company_id');
    }
}
