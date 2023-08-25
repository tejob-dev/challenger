<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'nom_prenom',
        'email',
        'objet',
        'telephone',
        'message',
    ];

    protected $searchableFields = ['*'];
}
