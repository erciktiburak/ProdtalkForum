<?php

namespace App\Core;

enum NotificationConstants: string
{

    case MY_DISCUSSION_EDITED = "My discussion has been edited by someone";
    case POST_IN_DISCUSSION = "Someone has posted in a discussion I'm following";
    case MY_REPLY_BEST_ANSWER = "Someone has selected my reply as the best answer";
    case MY_POSTS_COMMENTED = "Someone has commented on one of my posts";
    case MY_POSTS_LIKED = "Someone has liked one of my posts";
    case POINTS_UPDATED = "My account points have been updated after an action";
    case DISCUSSION_LOCKED = "A moderator/administrator has locked my discussion";
    case DISCUSSION_UNLOCKED = "A moderator/administrator has unlocked my discussion";
  
}
