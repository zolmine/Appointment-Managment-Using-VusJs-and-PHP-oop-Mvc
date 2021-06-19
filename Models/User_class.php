<?php

class User extends Database
{
    public function Register($data)
    {
        $sql = 'insert into Users (User_fullname, User_cin, User_age, User_profession, User_gender, User_token ) values(:fullname, :cin, :age, :profession, :gender, :token )';
        $stmt = $this->getConnect()->prepare($sql);
        $stmt->execute($data);
    }

    public function Get_users(): array
    {
        $sql = 'select * from users';
        $stmt = $this->getConnect()->query($sql);
        return $stmt->fetchAll();
    }
}