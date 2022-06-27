<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    use HasFactory;

    protected $table = 'lots';
    protected $guarded = false;

    public $START_ACTION_MIN = 1440;

    public $NULL_DAYS = 0;

    public function user()
    {
        return $this->belongsTo(User::class,);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function diffTimer()
    {

        $diff = Carbon::now()->diff($this->dt_end);

        if ($diff->days != $this->NULL_DAYS) {
            return $diff->format('%d дней');
        } else {
            return $diff->format('%H:%i:%s');
        }
    }

    public function diffHours()
    {
        $diff = Carbon::now()->diffInMinutes($this->dt_end);
        return $diff <= $this->START_ACTION_MIN;
    }

    public function bets()
    {

        return $this->HasMany(Bet::class);

    }

}
