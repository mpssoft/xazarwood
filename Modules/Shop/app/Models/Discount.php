<?php

namespace Modules\Shop\Models;


use App\Models\Course;
use App\Models\Lesson;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Modules\Blog\Models\Category;
use Modules\File\Models\File;
use Modules\LessonPlan\Models\LessonPlan;
use Modules\Product\Models\Product;

class Discount extends Model
{
    protected $fillable = [
        'code',          // discount code (nullable if auto)
        'type',          // 'percent' or 'fixed'
        'value',         // discount value
        'start_at',
        'end_at',
        'is_active'
    ];

    protected $casts = [
        'start_at' => 'datetime',
        'end_at' => 'datetime',
        'is_active' => 'boolean',
    ];

    public function courses()
    {
        return $this->morphedByMany(Course::class, 'discountable');
    }

    public function lessons()
    {
        return $this->morphedByMany(Lesson::class, 'discountable');
    }
    public function files()
    {
        return $this->morphedByMany(File::class, 'discountable');
    }
    public function products()
    {
        return $this->morphedByMany(Product::class, 'discountable');
    }
    public function categories()
    {
        return $this->morphedByMany(Category::class, 'discountable');
    }
    public function users()
    {
        return $this->morphedByMany(User::class,'discountable');
    }
    public function lesson_plans()
    {
        return $this->morphedByMany(LessonPlan::class,'discountable');
    }


    /**
     * Get all related items (any type)
     */
    public function allItems()
    {
        return collect()
            ->merge($this->courses)
            ->merge($this->lessons)
            ->merge($this->lessonplans)
            ->merge($this->categories)
            ->merge($this->files);

    }

    /**
     * Static helper to find a discount for a given item
     */
    public static function findForItem(string $type, int $id)
    {
        if (!class_exists($type)) {
            return null;
        }

        return self::whereHasMorph(
            'courses', // we can pick any relation here, it just needs same morph table
            [$type],
            function ($query) use ($id) {
                $query->where('discountable_id', $id);
            }
        )->first();
    }


}
