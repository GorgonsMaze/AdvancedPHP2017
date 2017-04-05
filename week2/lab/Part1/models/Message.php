<?php

/**
 * Description of Message
 *
 * @author 001241129
 */
class Message implements iMessage {

    protected $messages = [];

    public function addMessage($key, $msg) {
        $this->messages[$key] = $msg;
    }

    public function getAllMessages() {
        return $this->messages;
    }

    public function removeMessage($key) {
        if (array_key_exists($key, $this->messages)) {
            unset($this->messages[$key]);
        }
    }

}
