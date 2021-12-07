<?php
namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder{

    public function run(){
        DB::table("products")->insert([
            [
                "name"=>"nome1",
                "descrizione"=>"vino1",
                "prezzo"=>50.0,
                "created_at"=>Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at"=>Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                "name"=>"nome2",
                "descrizione"=>"vino2",
                "prezzo"=>75.0,
                "created_at"=>Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at"=>Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                "name"=>"nome3",
                "descrizione"=>"vino3",
                "prezzo"=>100.0,
                "created_at"=>Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at"=>Carbon::now()->format("Y-m-d H:i:s"),
            ]
        ]);
    }
}