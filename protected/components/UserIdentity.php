<?php

class UserIdentity extends CUserIdentity
{
    public function authenticate()
    {

        if (strlen($this->password) < 5) {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else {
            $this->errorCode = self::ERROR_NONE;
        }

        return !$this->errorCode;
    }
}