<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Task extends Model
{
    use HasFactory;

    public function getStatusAttribute($value) {
        return DB::table('dic_task_statuses')
                ->select('status')
                ->where('id', '=', $value)->value('status');
    }

    public function getVisibilityAttribute($value) {
        return DB::table('dic_task_visibilities')
                ->select('visibility')
                ->where('id', '=', $value)->value('visibility');
    }

    public function getDueDateAttribute($value) {
        return date('M j, Y', strtotime($value));
    }
}
