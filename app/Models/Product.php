<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ["id"];
    protected $with    = ["user"];


    // public function scopeFilter($query, array $filters )
    // {
    //     $query->when($filters['search'] ?? false, function($query, $search) {
    //         return $query->where('title', 'like', '%' . $search . '%')
    //         ->Orwhere('body', 'like', '%' . $search . '%');
    //     });

         
    //     // if(isset($filters['search']) ? $filters['search'] : false) {
    //     //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
    //     //         ->orwhere('body', 'like', '%' . $filters['search'] . '%');
    //     // }
        
    //     $query->when($filters['umkm'] ?? false, fn($query, $umkm) => $query->whereHas('umkm', fn($query) => $query->where('username', $umkm)
    //     )
    //     );
    // }

    public function user()
    {
        return $this->belongsTo(User ::class);
    }

    public function getRouteKeyname()
    {
        return 'slug';
    }
}
