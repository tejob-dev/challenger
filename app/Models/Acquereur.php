<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Acquereur extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'nompre',
        'telephone',
        'email',
        'typlog',
        'emplacement',
        'nbrpiece',
        'budget',
        'apporinit',
        'engagannee',
        'peopletype',
        'nbrannee',
        'result1',
        'result2',
        'result3',
    ];

    protected $searchableFields = ['*'];
}
