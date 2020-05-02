<?php

use App\Contact;
use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::truncate();


        
            for($i = 1; $i <= 20; $i++){
                Contact::create([
                    'name' => "Juan Luis $i",
                    'surname' => "Calderon $i",
                    'message' => "El Elche Club de Fútbol es un club de fútbol español de la ciudad de Elche, Alicante, que milita en la Segunda División de España. Fue fundado el 28 de agosto de 1922, a partir de la fusión de varios clubes ilicitanos. Su primer equipo disputa sus partidos como local en el Estadio Martínez Valero, con capacidad de 33.732 espectadores.",
                    'email' => "elchecf@ecf.com"
                ]);    
            }
        
    }
}
