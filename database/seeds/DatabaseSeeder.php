<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Appointment::class, 10)->create();
        factory(App\BedAllotment::class, 10)->create();
        factory(App\Bed::class, 10)->create();
        factory(App\CaseHistory::class, 10)->create();
        factory(App\DayoffSchedule::class, 10)->create();
        factory(App\Document::class, 10)->create();
        factory(App\Expense::class, 10)->create();
        factory(App\LapReport::class, 10)->create();
        factory(App\LapTemplate::class, 10)->create();
        factory(App\MedicineCategory::class, 10)->create();
        factory(App\Medicine::class, 10)->create();
        factory(App\Finance::class, 1)->create();
        factory(App\TimeSchedule::class, 10)->create();
        factory(App\Department::class, 10)->create();
        factory(App\PaymentItem::class, 10)->create();
        factory(App\Payment::class, 10)->create()->each(function($a) {
            $a->paymentitems()->attach(App\PaymentItem::all()->random(3),['payment_item_quantity'=>50]);
        });
        factory(App\Prescription::class, 10)->create()->each(function($a) {
            $a->medicines()->attach(App\Medicine::all()->random(3),['instructions'=>'test']);
        });

        factory(App\User::class, 50)->create()->each(function($a) {
            $a->departments()->attach(App\Department::all()->random(1));
        });

    }
}
