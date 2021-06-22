<?php

class Appointment extends Database
{
    //inserting new appointment into the database by the user
    public function Reserve($data)
    {
        $sql = 'insert into appointment(app_date, app_start_time, app_end_time, app_user_token, app_schedule_id) values(:date, :start, :end, :token, :schedule_id) ';
        $stmt = $this->getConnect()->prepare($sql);
        $stmt->execute($data);
    }

    //displaying all appointment that has reserved by a specific user "selecting by token"
    public function Appointment_fo_user($token): array
    {
        $sql = 'select * from appointment where app_user_token = ? order by app_date';
        $stmt = $this->getConnect()->prepare($sql);
        $stmt->execute([$token]);
        return $stmt->fetchAll();
    }

    //displaying all reserved appointment to the admin #per date
    public function Display_for_admin($date): array
    {
        $sql = 'select * from appointment where app_date = ?';
        $stmt = $this->getConnect()->prepare($sql);
        $stmt->execute([$date]);
        return $stmt->fetchAll();
    }

    //check if a schedule is already taken with schedule id and the date
    public function Check_appointment_schedule($date): array
    {
        $sql = 'select app_schedule_id from appointment where  appointment.app_date = ?';
        $stmt = $this->getConnect()->prepare($sql);
        $stmt->execute([$date]);
        return $stmt->fetchAll();
    }

    //delete an appointment from appointment table by the id of the appointment
    public function Delete_appointment($id)
    {
        $sql = 'delete  from appointment where  app_id = ?';
        $stmt = $this->getConnect()->prepare($sql);
        $stmt->execute([$id]);

    }

}

