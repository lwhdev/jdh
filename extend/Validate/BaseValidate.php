<?php

/**
 *
 * Name: PhpStorm
 * Date: 2021-07-12
 * Time: 10:49
 * Author: little thing
 */


namespace application\Validate;


class BaseValidate
{
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }


}
