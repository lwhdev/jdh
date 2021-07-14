<?php

/**
 *
 * Name: PhpStorm
 * Date: 2021-07-12
 * Time: 10:29
 * Author: little thing
 */


namespace App\Models;


class Article
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
