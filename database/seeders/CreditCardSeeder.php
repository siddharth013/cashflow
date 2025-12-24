<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CreditCard;

class CreditCardSeeder extends Seeder
{
    public function run(): void
    {
        CreditCard::insert([
            [
                'user_id' => 1,
                'bank_name' => 'SBI',
                'card_name' => 'BPCL Octane',
                'network' => 'Visa',
                'credit_limit' => 190000,
                'annual_fee' => 1499,
                'fee_waiver_threshold' => 200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'bank_name' => 'HDFC',
                'card_name' => 'Tata Neu Plus',
                'network' => 'RuPay',
                'credit_limit' => 169000,
                'annual_fee' => 499,
                'fee_waiver_threshold' => 100000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'bank_name' => 'CSB',
                'card_name' => 'EDGE',
                'network' => 'Visa',
                'credit_limit' => 190000,
                'annual_fee' => null,
                'fee_waiver_threshold' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
