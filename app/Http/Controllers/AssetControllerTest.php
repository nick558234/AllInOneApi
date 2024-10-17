use Illuminate\Database\Seeder;
use App\Models\Asset;

<?php

namespace Database\Seeders;


class AssetSeeder extends Seeder
{
    public function run()
    {
        $assets = [
            ['name' => 'bitcoin', 'type' => 'crypto', 'current_value' => 50000, 'category_id' => 1],
            ['name' => 'ethereum', 'type' => 'crypto', 'current_value' => 4000, 'category_id' => 1],
            ['name' => 'xrp', 'type' => 'crypto', 'current_value' => 1, 'category_id' => 1],
            ['name' => 'solana', 'type' => 'crypto', 'current_value' => 150, 'category_id' => 1],
            ['name' => 'tether', 'type' => 'crypto', 'current_value' => 1, 'category_id' => 1],
            ['name' => 'bnb', 'type' => 'crypto', 'current_value' => 600, 'category_id' => 1],
        ];

        foreach ($assets as $asset) {
            Asset::create($asset);
        }
    }
}