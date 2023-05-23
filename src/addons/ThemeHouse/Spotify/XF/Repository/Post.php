<?php

namespace ThemeHouse\Spotify\XF\Repository;

class Post extends XFCP_Post
{
    public function findPostsForThreadView(\XF\Entity\Thread $thread, array $limits = [])
    {
        $finder = parent::findPostsForThreadView($thread, $limits); // TODO: Change the autogenerated stub

        $finder->with('User.SpotifyUserPlayback')->with('User.SpotifyUserPlayback.SpotifySong');

        return $finder;
    }
}