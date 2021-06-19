<?php

class Schedule extends Database
{
    public function Display_schedule(): array
    {
        $sql = 'select * from schedule ';
        $stmt = $this->getConnect()->query($sql);
        return $stmt->fetchAll();
    }

    public function Display_specific_schedule($id): array
    {
        $sql = 'select * from schedule where sche_id = ?';
        $stmt = $this->getConnect()->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchAll();
    }
}