<?php

class ProgramTableSeeder extends Seeder {

	public function run()
	{
		DB::table('programs')->delete();

		Program::create(array(
			'schools_id' => '1',
			'name' => 'Webbutveckling',
			'description' => 'Webbutveckling där du lär dig göra dina egna applikationer',
			'link' => 'www.wu.se',
		));

		Program::create(array(
			'schools_id' => '2',
			'name' => 'bild',
			'description' => 'Bild där du lär dig rita',
			'link' => 'www.bild.se',
		));

		Program::create(array(
			'schools_id' => '3',
			'name' => 'Film',
			'description' => 'Här lär du dig göra film',
			'link' => 'www.film.se',
		));

		Program::create(array(
			'schools_id' => '4',
			'name' => 'spel',
			'description' => 'här lär du dig göra spel',
			'link' => 'www.spel.se',
		));

		Program::create(array(
			'schools_id' => '5',
			'name' => 'esport',
			'description' => 'här lär du dig spela',
			'link' => 'www.esport.se',
		));

	}
}