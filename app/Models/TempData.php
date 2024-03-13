<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TempData extends Model
{
    use HasFactory;
    use Searchable;

    protected $guarded = [];
    protected $table = "temp_datas";

    protected $searchableFields = ['*'];
}
