<?php

/**
 *
 * @author 001241129
 */
interface iMessage {

    public function addMessage($key, $msg);

    public function removeMessage($key);

    public function getAllMessages();
}
