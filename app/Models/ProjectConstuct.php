<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectConstuct extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['libel', 'descript', 'date_fin'];

    protected $searchableFields = ['*'];

    protected $table = 'project_constucts';

    protected $casts = [
        'date_fin' => 'date',
    ];

    public function posters()
    {
        return $this->hasMany(Poster::class);
    }
}
