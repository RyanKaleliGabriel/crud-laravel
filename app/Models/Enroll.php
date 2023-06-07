<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Enroll extends Model
{
    use HasFactory;
            /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'blog_user_id',
        'course_id'
    ];

          /**
     * project
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(BlogUser::class);
    }
              /**
     * project
     * @return BelongsTo
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
