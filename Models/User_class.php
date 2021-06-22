<?php

use JetBrains\PhpStorm\ArrayShape;

class User extends Database
{
    public function Register($data)
    {
        $sql = 'insert into Users (User_fullname, User_cin, User_age, User_profession, User_token ) values(:fullname, :cin, :age, :profession, :token )';
        $stmt = $this->getConnect()->prepare($sql);
        $stmt->execute($data);
    }

    public function Get_users(): array
    {
        $sql = 'select * from users';
        $stmt = $this->getConnect()->query($sql);
        return $stmt->fetchAll();
    }

    #[ArrayShape(['nbr' => "int", 'token' => "array"])] public function Login($token, $cin): array
    {
        $sql = 'select * from users where User_token = ? and User_cin = ?';
        $stmt = $this->getConnect()->prepare($sql);
        $stmt->execute([$token,$cin]);
        return array(
            'nbr' => $stmt->rowCount(),
            'token' => $stmt->fetchAll()
        );
    }

}