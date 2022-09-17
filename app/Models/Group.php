<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder;

/**
 * @property string $title
 * @property integer $sort
 * @method static Builder|Group query()
 */
class Group extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        "title",
        "sort"
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cards(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Card::class)->orderBy('sort');
    }
}
