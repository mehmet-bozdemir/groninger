<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Builder;

trait Likeable
{

//    public function scopeWithLikes(Builder $query)
//    {
//
//        $query->leftJoinSub('select post_id, sum(liked) likes, sum(!liked) dislikes from likes group by post_id', 'likes', 'likes.post_id', 'posts.id' );
//    }


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

//    public function isLikedBy(User $user)
//    {
//
//        return (bool)$user->likes->where('post_id', $this->id)->where('liked', true)->count();
//    }
//
//    public function isDisLikedBy(User $user)
//    {
//
//        return (bool)$user->likes->where('post_id', $this->id)->where('liked', false)->count();
//    }

    public function totalLikes()
    {
        return $this->likes()->where('liked', 1)->count();
    }

    public function totalDisLikes()
    {
        return $this->likes()->where('liked', 0)->count();
    }
    //    public function dislike(){
//        $this->likes()->updateOrCreate([
//            'user_id'=> auth()->id(),
//        ], [
//            'liked'=>false
//        ]);
//    }


}
