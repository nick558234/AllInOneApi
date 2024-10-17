<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asset;
use App\Models\Category;

class AssetSeeder extends Seeder
{
    public function run()
    {
        // Retrieve category IDs
        $cryptoCategoryId = Category::where('name', 'crypto')->first()->id;
        $edelenCategoryId = Category::where('name', 'edelen')->first()->id;
        $aandelenCategoryId = Category::where('name', 'aandelen')->first()->id;
        $nftCategoryId = Category::where('name', 'nft')->first()->id;
        $vastgoedCategoryId = Category::where('name', 'vastgoed')->first()->id;

        $assets = [
            ['name' => 'bitcoin', 'type' => 'crypto', 'amount' => 0.5, 'purchase_price' => 45000, 'category_id' => $cryptoCategoryId],
            ['name' => 'dogecoin', 'type' => 'crypto', 'amount' => 800, 'purchase_price' => 0.5, 'category_id' => $cryptoCategoryId],
            ['name' => 'solana', 'type' => 'crypto', 'amount' => 3.2, 'purchase_price' => 100, 'category_id' => $cryptoCategoryId],
            ['name' => 'tether', 'type' => 'crypto', 'amount' => 900, 'purchase_price' => 1, 'category_id' => $cryptoCategoryId],
            ['name' => 'Ethereum', 'type' => 'crypto', 'amount' => 2.5, 'purchase_price' => 500, 'category_id' => $cryptoCategoryId],
            ['name' => 'near', 'type' => 'crypto', 'amount' => 223.5, 'purchase_price' => 232, 'category_id' => $cryptoCategoryId],
            ['name' => 'uni', 'type' => 'crypto', 'amount' => 10.5, 'purchase_price' => 232, 'category_id' => $cryptoCategoryId],


            // ['name' => 'brons', 'type' => 'edelen', 'amount' => 3, 'purchase_price' => 100, 'category_id' => $edelenCategoryId],
            ['name' => 'zilver', 'type' => 'edelen', 'amount' => 6, 'purchase_price' => 100, 'category_id' => $edelenCategoryId],
            ['name' => 'goud (XUA)', 'type' => 'edelen', 'amount' => 5, 'purchase_price' => 5000, 'category_id' => $edelenCategoryId],
            ['name' => 'platina', 'type' => 'edelen', 'amount' => 2, 'purchase_price' => 2000, 'category_id' => $edelenCategoryId],
            ['name' => 'palladium (XPD)', 'type' => 'edelen', 'amount' => 1, 'purchase_price' => 1000, 'category_id' => $edelenCategoryId],
            ['name' => 'rhodium', 'type' => 'edelen', 'amount' => 0.5, 'purchase_price' => 500, 'category_id' => $edelenCategoryId],

            ['name' => 'apple', 'type' => 'aandelen', 'amount' => 5, 'purchase_price' => 150, 'category_id' => $aandelenCategoryId],
            ['name' => 'tesla', 'type' => 'aandelen', 'amount' => 2, 'purchase_price' => 500, 'category_id' => $aandelenCategoryId],
            ['name' => 'facebook', 'type' => 'aandelen', 'amount' => 3, 'purchase_price' => 300, 'category_id' => $aandelenCategoryId],
            ['name' => 'amazon', 'type' => 'aandelen', 'amount' => 1, 'purchase_price' => 2000, 'category_id' => $aandelenCategoryId],
            ['name' => 'google', 'type' => 'aandelen', 'amount' => 2, 'purchase_price' => 1500, 'category_id' => $aandelenCategoryId],
            ['name' => 'microsoft', 'type' => 'aandelen', 'amount' => 4, 'purchase_price' => 250, 'category_id' => $aandelenCategoryId],

            ['name' => 'cryptokitties', 'type' => 'nft', 'amount' => 1, 'purchase_price' => 100, 'category_id' => $nftCategoryId],
            ['name' => 'axie infinity', 'type' => 'nft', 'amount' => 1, 'purchase_price' => 200, 'category_id' => $nftCategoryId],
            ['name' => 'decentraland', 'type' => 'nft', 'amount' => 1, 'purchase_price' => 300, 'category_id' => $nftCategoryId],
            ['name' => 'sorare', 'type' => 'nft', 'amount' => 1, 'purchase_price' => 400, 'category_id' => $nftCategoryId],
            ['name' => 'nba top shot', 'type' => 'nft', 'amount' => 1, 'purchase_price' => 500, 'category_id' => $nftCategoryId],
            ['name' => 'binance', 'type' => 'nft', 'amount' => 1, 'purchase_price' => 600, 'category_id' => $nftCategoryId],
// vastgoed
            ['name' => 'VNQ', 'type' => 'vastgoed', 'amount' => 1, 'purchase_price' => 100, 'category_id' => $vastgoedCategoryId],
            ['name' => 'IYR', 'type' => 'vastgoed', 'amount' => 1, 'purchase_price' => 200, 'category_id' => $vastgoedCategoryId],
            ['name' => 'SCHH', 'type' => 'vastgoed', 'amount' => 1, 'purchase_price' => 300, 'category_id' => $vastgoedCategoryId],
            ['name' => 'XLRE', 'type' => 'vastgoed', 'amount' => 1, 'purchase_price' => 400, 'category_id' => $vastgoedCategoryId],
            ['name' => 'PLD ', 'type' => 'vastgoed', 'amount' => 1, 'purchase_price' => 500, 'category_id' => $vastgoedCategoryId],
            ['name' => 'RWR', 'type' => 'vastgoed', 'amount' => 1, 'purchase_price' => 600, 'category_id' => $vastgoedCategoryId],
        ];

        foreach ($assets as $asset) {
            Asset::create($asset);
        }
    }
}