<?php

/**
 * @return int
 */
function GetNextUserId(){
    static $userID = 1;
    return $userID++;
}