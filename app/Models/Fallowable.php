<?php


namespace App\Models;


trait Fallowable
{
    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

//    public function sumFollowings(User $user)
//    {
//        return count($this->follows()->where('user_id', $user->id)->get());
//    }
//
//    public function sumFollowers(User $user)
//    {
//        return count($this->follows()->where('following_id', $user->id)->get());
//    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function following(User $user)
    {
        return $this->follows()->where('following_id', $user->id)->exists();
    }

    public function toggleFollow(User $user)
    {
        if ($this->following($user)) {
            return $this->unfollow($user);
        }
        $this->follow($user);

    }

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_id');
    }

}
