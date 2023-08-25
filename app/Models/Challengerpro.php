<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Challengerpro extends Model
{
    use HasFactory, Notifiable;
    use Searchable;

    protected $fillable = [
        'nomentr',
        'typeentr',
        'telephone',
        'creation',
        'nompredirig',
        'email',
        'typeprog',
        'objectif',
        'messagacquis',
        'rdventre',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'creation' => 'date',
        'rdventre' => 'date',
    ];
}
