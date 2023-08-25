<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poster extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['libel', 'photo', 'project_constuct_id'];

    protected $searchableFields = ['*'];

    public function projectConstuct()
    {
        return $this->belongsTo(ProjectConstuct::class);
    }
}
