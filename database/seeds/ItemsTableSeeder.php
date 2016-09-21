<?php
	
use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              //
     $Items = [
        	[
        		'title' => 'My Fake item One ',
        		'description' => 'First Item '
        	],
        	[
        		'title' => 'Second Fake item',
        		'description' => 'My Second Fake item'
        	],
        	 
        ];

          foreach ($Items as $key => $value) {
        	Item::create($value);
        }

    }
}
