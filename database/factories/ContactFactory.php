<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address'=>'Unzaniniz',
            'email'=>'Email unvzniniz',
            'tel1'=>'Telefon nomresi 1',
            'tel2'=>'Telefon nomresi 2',
            'tel3'=>'Telefon nomresi 3',
            'facebook'=>'facebook unvaniniz',
            'insta'=>'Instagram unvaniniz',
            'twitter'=>'unvaniniz',
            'linkedin'=>'linkedin unvaniniz',
            'maplink'=>'Google map unvaniniz'
        ];
    }
}
