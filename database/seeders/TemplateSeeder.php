<?php

namespace Database\Seeders;

use App\Models\Template;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $templates = [
           ['name'=>'Binance'],
           ['name'=>'KuCoin'],
           ['name'=>'Bitpay'],
           ['name'=>'Latoken'],
           ['name'=>'Blockchain'],
           ['name'=>'Kraken'],

       ];
       foreach ($templates as  $template) {
          Template::create($template);
       }
    }
}
