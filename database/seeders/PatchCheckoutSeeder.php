<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Checkout;

class PatchCheckoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $checkouts = Checkout::whereTotal(0)->get();
        foreach($checkouts as $checkout)
        {
            $checkout->update([
                'total' => $checkout->Camp->price
            ]);
        }
    }
}
