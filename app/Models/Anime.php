<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $table = 'animes';

    public function title()
    {
        return Attribute::make(get: fn(string $title) => $title);
    }

    public function getTitle()
    {
        return $this->anm_title;
    }

    public function setTitleAttribute($title): void
    {
        $this->attributes['anm_title'] = $title;
    }

    public function setDescriptionAttribute($description): void
    {
        $this->attributes['anm_description'] = $description;
    }

    public function setEpisodesNumberAttribute($episodesNumber): void
    {
        $this->attributes['anm_episodes_number'] = $episodesNumber;
    }

    public function setLaunchDateAttribute($launchDate): void
    {
        $this->attributes['anm_launch_date'] = $launchDate;
    }
}
