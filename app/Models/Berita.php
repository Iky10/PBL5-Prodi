<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $fillable = [
        'image',
        'description',
        'date'
    ];

    public function getFormattedDateAttribute()
    {
        return Carbon::parse($this->date)->format('d M Y');
    }
}
