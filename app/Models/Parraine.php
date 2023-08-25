<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Parraine extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'nomprep',
        'eamilp',
        'telephonp',
        'nomprepp',
        'emailpp',
        'telephonpp',
    ];

    protected $searchableFields = ['*'];
}
