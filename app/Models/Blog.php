<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Blog extends Model
{
    use Resizable;

    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }

}
