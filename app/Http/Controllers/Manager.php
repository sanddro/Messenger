<?php
/**
 * Created by PhpStorm.
 * User: atsulukidze
 * Date: 11.08.2017
 * Time: 15:49
 */

namespace App\Http\Controllers;


interface Manager
{

    /**
     * Returns chats of user ordered by time with pagination 20 per page
     *
     * @param $userId
     * @return [
     * {
     *  id,
     *  name,
     *  pictureUrl,
     *  lastMessage: {
     *      id,
     *      author: {
     *          id,
     *          pictureUrl,
     *          name
     *      },
     *      text,
     *  }
     * }
     * ]
     */
    function getChats($userId);

    /**
     * Returns messages of chat ordered by time with pagination 20 per page
     *
     * @param $chatId
     * @return [
     * {
     *  id,
     *  authorId,
     *
     * }
     * ]
     */
    function getMessages($chatId);

}