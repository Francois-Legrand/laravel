<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = 
    [
    
    ];
    protected $attributes = [
        'status' => '2'
    ];

    public function scopeStatus($query)
    {
        return $query->where('status', 1)->get();
    }

    public function entreprise()
    {
        return $this->belongsTo('App\entreprise');
    }

    public function getStatusAttribute($attributes)
    {
        return $this->getStatusOptions()[$attributes];
    }
    
    public function getStatusOptions()
    {
        return [
            '0' => 'Inactif',
            '1' => 'Actif',
            '2' => 'En attente'
        ];
    }
}
