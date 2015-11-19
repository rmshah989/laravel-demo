<?php

use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service_seeds = [
		['title' =>'Transcription and Media'],
		['title' =>'Other Services'],
		['title' =>'English Editing'],
		['title' =>'Publication Support Packages'],
		['title' =>'Medical Communications'],
		['title' =>'Translation Services'],
		['title' =>'Training Programs']
	];
	DB::table('services')->insert($service_seeds);

    }
}
