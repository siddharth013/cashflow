<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExpenseCategory;

class ExpenseCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Food & Dining', 'type' => 'expense'],
            ['name' => 'Fuel', 'type' => 'expense'],
            ['name' => 'Groceries', 'type' => 'expense'],
            ['name' => 'Medical', 'type' => 'expense'],
            ['name' => 'Loan EMI', 'type' => 'expense'],
            ['name' => 'Furniture', 'type' => 'expense'],
            ['name' => 'Shopping', 'type' => 'expense'],
            ['name' => 'Travel', 'type' => 'expense'],
            ['name' => 'Salary', 'type' => 'income'],
        ];

        foreach ($categories as $category) {
            ExpenseCategory::create([
                'user_id' => 1,
                'name' => $category['name'],
                'type' => $category['type'],
            ]);
        }
    }
}
