<?php

/**
 *
 * Name: PhpStorm
 * Date: 2021-07-12
 * Time: 10:33
 * Author: little thing
 */


namespace App\Controller;


class Goods
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
