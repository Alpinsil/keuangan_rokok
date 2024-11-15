<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ["user_id", "shift", "date", "absen"];

    #################################################################
    #####                      Relations                        #####
    #################################################################
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function shift()
    {
        return $this->belongsTo(Shift::class);
    }

    #################################################################
    #####                   Model Scopes                        #####
    #################################################################
    public function scopeSearch($query, $search)
    {
        return $query->orWhere("shift", "like", "%{$search}%")->orWhere("absen", "like", "%{$search}%");
    }

    public static function getScheduleDateNowCollection()
    {

        return Schedule::where("date", "=", getDateNow())->get();
    }

    public static function getScheduleDateNowUser()
    {
        foreach (self::getScheduleDateNowCollection() as $scheduleNow) {

            if ($scheduleNow->user->id == auth()->id()) return $scheduleNow;
        }
    }
}
