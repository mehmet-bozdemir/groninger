<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Builder;

trait Likeable
{

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id(),
        ], [
            'liked' => $liked
        ]);
    }

    public function dislike($user = null)
    {

        return $this->like($user, false);
    }

    public function totalLikes()
    {
        return $this->likes()->where('liked', 1)->count();
    }

    public function totalDisLikes()
    {
        return $this->likes()->where('liked', 0)->count();
    }

}
