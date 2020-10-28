<?php


namespace App\Models;


trait Fallowable
{
    public function follow(User $user)
    {
        return $this->following()->save($user);
    }

    public function unfollow(User $user)
    {
        return $this->following()->detach($user);
    }

    public function isFollowing(User $user)
    {
        return $this->following()->where('following_id', $user->id)->exists();
    }

    public function toggleFollow(User $user)
    {
        if ($this->isFollowing($user)) {
            return $this->unfollow($user);
        }
        $this->follow($user);
    }

    public function sumFollowings(User $user)
    {

        return $this->following()->get()->count();
    }

    public function sumFollowers(User $user)
    {

        return $this->followers()->get()->count();

    }


}
