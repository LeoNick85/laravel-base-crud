<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dati_studenti = config("students_data");

        foreach ($dati_studenti as $dati_studente) {
            $nuovo_studente = new Student();
            $nuovo_studente->first_name = $dati_studente["nome"];
            $nuovo_studente->last_name = $dati_studente["cognome"];
            $nuovo_studente->student_id = $dati_studente["matricola"];
            $nuovo_studente->email = $dati_studente["email"];
            $nuovo_studente->save();
        }
    }
}
