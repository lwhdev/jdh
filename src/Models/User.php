<?php

/**
 *
 * Name: PhpStorm
 * Date: 2021-07-12
 * Time: 10:13
 * Author: little thing
 */
namespace App\Models;

class User {
    private   $id;
    private  $name;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

}
