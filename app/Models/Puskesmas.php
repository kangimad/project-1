<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puskesmas extends Model
{
    use HasFactory;
    protected $table = 'puskesmas';

    protected $guarded = ['id'];

    protected $primaryKey = 'id';

    public function scopeFilter($query, array $filters)
    {
        $query -> when($filters['search'] ?? false, function($query, $search)
        {
            return $query->where('kabupaten_kota', 'like', '%' . $search . '%')
                ->orWhere('jumlah', 'like', '%' . $search . '%');
        });
    }
}
