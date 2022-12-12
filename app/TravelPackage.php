<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'title', 'slug', 'location', 'about', 'featured_event', 'language',
        'foods', 'departure_date', 'duration', 'type', 'price'
    ];

    protected $dates = ['departure_date'];

    protected $hidden = [];

    public function scopeWithGalleries($query)
    {
        return $query->with(['galleries']);
    }

    public function scopeSlug($query, $slug)
    {
        return $query->where('slug', $slug);
    }

    public function getThumbnailAttribute()
    {
        return $this->galleries->first()->image;
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'travel_packages_id', 'id');
    }
}
