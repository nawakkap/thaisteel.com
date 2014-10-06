<?php

class ProductTableSeeder extends Seeder {
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('products')->delete();
		
		Product::create(array(
		   'id' => 1,
		   'name' => "RB6x10m-SR24",
		   'type' => 'RB',
		   'thickness' => null,
		   'weight_per_m' => '0.222',
		   'weight_tolerance' => '0.1',
		   'grade' => 'SR24',
		   'standard_length' => '10',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 2,
		   'name' => "RB9x10m-SR24",
		   'type' => 'RB',
		   'thickness' => null,
		   'weight_per_m' => '0.499',
		   'weight_tolerance' => '0.06',
		   'grade' => 'SR24',
		   'standard_length' => '10',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 3,
		   'name' => "RB12x10m-SR24",
		   'type' => 'RB',
		   'thickness' => null,
		   'weight_per_m' => '0.888',
		   'weight_tolerance' => '0.06',
		   'grade' => 'SR24',
		   'standard_length' => '10',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 4,
		   'name' => "RB15x10m-SR24",
		   'type' => 'RB',
		   'thickness' => null,
		   'weight_per_m' => '1.387',
		   'weight_tolerance' => '0.06',
		   'grade' => 'SR24',
		   'standard_length' => '10',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 5,
		   'name' => "RB19x10m-SR24",
		   'type' => 'RB',
		   'thickness' => null,
		   'weight_per_m' => '2.226',
		   'weight_tolerance' => '0.06',
		   'grade' => 'SR24',
		   'standard_length' => '10',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 6,
		   'name' => "RB25x10m-SR24",
		   'type' => 'RB',
		   'thickness' => null,
		   'weight_per_m' => '3.853',
		   'weight_tolerance' => '0.06',
		   'grade' => 'SR24',
		   'standard_length' => '10',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 7,
		   'name' => "DB12x10m-SD40",
		   'type' => 'DB',
		   'thickness' => null,
		   'weight_per_m' => '0.888',
		   'weight_tolerance' => '0.06',
		   'grade' => 'SD40',
		   'standard_length' => '10',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 8,
		   'name' => "DB16x10m-SD40",
		   'type' => 'DB',
		   'thickness' => null,
		   'weight_per_m' => '1.578',
		   'weight_tolerance' => '0.06',
		   'grade' => 'SD40',
		   'standard_length' => '10',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 9,
		   'name' => "DB20x10m-SD40",
		   'type' => 'DB',
		   'thickness' => null,
		   'weight_per_m' => '2.466',
		   'weight_tolerance' => '0.05',
		   'grade' => 'SD40',
		   'standard_length' => '10',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 10,
		   'name' => "DB25x10m-SD40",
		   'type' => 'DB',
		   'thickness' => null,
		   'weight_per_m' => '3.853',
		   'weight_tolerance' => '0.05',
		   'grade' => 'SD40',
		   'standard_length' => '10',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 11,
		   'name' => "DB12x10m-SD30",
		   'type' => 'DB',
		   'thickness' => null,
		   'weight_per_m' => '0.888',
		   'weight_tolerance' => '0.06',
		   'grade' => 'SD30',
		   'standard_length' => '10',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 12,
		   'name' => "DB16x10m-SD30",
		   'type' => 'DB',
		   'thickness' => null,
		   'weight_per_m' => '1.578',
		   'weight_tolerance' => '0.06',
		   'grade' => 'SD30',
		   'standard_length' => '10',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 13,
		   'name' => "DB20x10m-SD30",
		   'type' => 'DB',
		   'thickness' => null,
		   'weight_per_m' => '2.466',
		   'weight_tolerance' => '0.05',
		   'grade' => 'SD30',
		   'standard_length' => '10',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 14,
		   'name' => "DB25x10m-SD30",
		   'type' => 'DB',
		   'thickness' => null,
		   'weight_per_m' => '3.853',
		   'weight_tolerance' => '0.05',
		   'grade' => 'SD30',
		   'standard_length' => '10',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 15,
		   'name' => "DB12x12m-SD40",
		   'type' => 'DB',
		   'thickness' => null,
		   'weight_per_m' => '0.888',
		   'weight_tolerance' => '0.06',
		   'grade' => 'SD40',
		   'standard_length' => '12',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 16,
		   'name' => "DB16x12m-SD40",
		   'type' => 'DB',
		   'thickness' => null,
		   'weight_per_m' => '1.578',
		   'weight_tolerance' => '0.06',
		   'grade' => 'SD40',
		   'standard_length' => '12',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 17,
		   'name' => "DB20x12m-SD40",
		   'type' => 'DB',
		   'thickness' => null,
		   'weight_per_m' => '2.466',
		   'weight_tolerance' => '0.05',
		   'grade' => 'SD40',
		   'standard_length' => '12',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 18,
		   'name' => "DB25x12m-SD40",
		   'type' => 'DB',
		   'thickness' => null,
		   'weight_per_m' => '3.853',
		   'weight_tolerance' => '0.05',
		   'grade' => 'SD40',
		   'standard_length' => '12',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 19,
		   'name' => "DB12x12m-SD30",
		   'type' => 'DB',
		   'thickness' => null,
		   'weight_per_m' => '0.888',
		   'weight_tolerance' => '0.06',
		   'grade' => 'SD30',
		   'standard_length' => '12',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 20,
		   'name' => "DB16x12m-SD30",
		   'type' => 'DB',
		   'thickness' => null,
		   'weight_per_m' => '1.578',
		   'weight_tolerance' => '0.06',
		   'grade' => 'SD30',
		   'standard_length' => '12',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 21,
		   'name' => "DB20x12m-SD30",
		   'type' => 'DB',
		   'thickness' => null,
		   'weight_per_m' => '2.466',
		   'weight_tolerance' => '0.05',
		   'grade' => 'SD30',
		   'standard_length' => '12',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 22,
		   'name' => "DB25x12m-SD30",
		   'type' => 'DB',
		   'thickness' => null,
		   'weight_per_m' => '3.853',
		   'weight_tolerance' => '0.05',
		   'grade' => 'SD30',
		   'standard_length' => '12',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 23,
		   'name' => "LLC60x30x10x1.6mm",
		   'type' => 'LLC',
		   'thickness' => '1.6',
		   'weight_per_m' => '1.63',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '50'
		));
		Product::create(array(
		   'id' => 24,
		   'name' => "LLC60x30x10x2mm",
		   'type' => 'LLC',
		   'thickness' => '2',
		   'weight_per_m' => '1.99',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '50'
		));
		Product::create(array(
		   'id' => 25,
		   'name' => "LLC60x30x10x2.3mm",
		   'type' => 'LLC',
		   'thickness' => '2.3',
		   'weight_per_m' => '2.25',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '50'
		));
		Product::create(array(
		   'id' => 26,
		   'name' => "LLC75x45x15x1.6mm",
		   'type' => 'LLC',
		   'thickness' => '1.6',
		   'weight_per_m' => '2.32',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '50'
		));
		Product::create(array(
		   'id' => 27,
		   'name' => "LLC75x45x15x2mm",
		   'type' => 'LLC',
		   'thickness' => '2',
		   'weight_per_m' => '2.86',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '50'
		));
		Product::create(array(
		   'id' => 28,
		   'name' => "LLC75x45x15x2.3mm",
		   'type' => 'LLC',
		   'thickness' => '2.3',
		   'weight_per_m' => '3.25',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '50'
		));
		Product::create(array(
		   'id' => 29,
		   'name' => "LLC95x45x20x1.6mm",
		   'type' => 'LLC',
		   'thickness' => '1.6',
		   'weight_per_m' => '2.63',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '30'
		));
		Product::create(array(
		   'id' => 30,
		   'name' => "LLC95x45x20x2.3mm",
		   'type' => 'LLC',
		   'thickness' => '2.3',
		   'weight_per_m' => '3.7',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '30'
		));
		Product::create(array(
		   'id' => 31,
		   'name' => "LLC95x45x20x3.2mm",
		   'type' => 'LLC',
		   'thickness' => '3.2',
		   'weight_per_m' => '5',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '30'
		));
		Product::create(array(
		   'id' => 32,
		   'name' => "LLC100x50x20x1.6mm",
		   'type' => 'LLC',
		   'thickness' => '1.6',
		   'weight_per_m' => '2.88',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '30'
		));
		Product::create(array(
		   'id' => 33,
		   'name' => "LLC100x50x20x2mm",
		   'type' => 'LLC',
		   'thickness' => '2',
		   'weight_per_m' => '3.56',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '30'
		));
		Product::create(array(
		   'id' => 34,
		   'name' => "LLC100x50x20x2.3mm",
		   'type' => 'LLC',
		   'thickness' => '2.3',
		   'weight_per_m' => '4.06',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '30'
		));
		Product::create(array(
		   'id' => 35,
		   'name' => "LLC100x50x20x2.8mm",
		   'type' => 'LLC',
		   'thickness' => '2.8',
		   'weight_per_m' => '4.87',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '30'
		));
		Product::create(array(
		   'id' => 36,
		   'name' => "LLC100x50x20x3.2mm",
		   'type' => 'LLC',
		   'thickness' => '3.2',
		   'weight_per_m' => '5.5',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '30'
		));
		Product::create(array(
		   'id' => 37,
		   'name' => "LLC125x50x20x2.3mm",
		   'type' => 'LLC',
		   'thickness' => '2.3',
		   'weight_per_m' => '4.51',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '30'
		));
		Product::create(array(
		   'id' => 38,
		   'name' => "LLC125x50x20x3.2mm",
		   'type' => 'LLC',
		   'thickness' => '3.2',
		   'weight_per_m' => '6.13',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '30'
		));
		Product::create(array(
		   'id' => 39,
		   'name' => "LLC150x50x20x2.3mm",
		   'type' => 'LLC',
		   'thickness' => '2.3',
		   'weight_per_m' => '4.96',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '30'
		));
		Product::create(array(
		   'id' => 40,
		   'name' => "LLC150x50x20x3.2mm",
		   'type' => 'LLC',
		   'thickness' => '3.2',
		   'weight_per_m' => '6.76',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '30'
		));
		Product::create(array(
		   'id' => 41,
		   'name' => "LLC150x65x20x2.3mm",
		   'type' => 'LLC',
		   'thickness' => '2.3',
		   'weight_per_m' => '5.5',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '30'
		));
		Product::create(array(
		   'id' => 42,
		   'name' => "LLC150x65x20x3.2mm",
		   'type' => 'LLC',
		   'thickness' => '3.2',
		   'weight_per_m' => '7.51',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '30'
		));
		Product::create(array(
		   'id' => 43,
		   'name' => "LLC150x65x20x4mm",
		   'type' => 'LLC',
		   'thickness' => '4',
		   'weight_per_m' => '9.22',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '30'
		));
		Product::create(array(
		   'id' => 44,
		   'name' => "LLC150x75x20x3.2mm",
		   'type' => 'LLC',
		   'thickness' => '3.2',
		   'weight_per_m' => '8.01',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '30'
		));
		Product::create(array(
		   'id' => 45,
		   'name' => "LLC150x75x20x4mm",
		   'type' => 'LLC',
		   'thickness' => '4',
		   'weight_per_m' => '9.85',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '30'
		));
		Product::create(array(
		   'id' => 46,
		   'name' => "LLC150x75x20x4.5mm",
		   'type' => 'LLC',
		   'thickness' => '4.5',
		   'weight_per_m' => '11',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '30'
		));
		Product::create(array(
		   'id' => 47,
		   'name' => "LLC150x75x25x3.2mm",
		   'type' => 'LLC',
		   'thickness' => '3.2',
		   'weight_per_m' => '8.27',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '30'
		));
		Product::create(array(
		   'id' => 48,
		   'name' => "LLC150x75x25x4mm",
		   'type' => 'LLC',
		   'thickness' => '4',
		   'weight_per_m' => '10.2',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '30'
		));
		Product::create(array(
		   'id' => 49,
		   'name' => "LLC150x75x25x4.5mm",
		   'type' => 'LLC',
		   'thickness' => '4.5',
		   'weight_per_m' => '11.3',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '30'
		));
		Product::create(array(
		   'id' => 50,
		   'name' => "HB100x100x6x8",
		   'type' => 'HB',
		   'thickness' => null,
		   'weight_per_m' => '17.2',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 51,
		   'name' => "HB125x125x6.5x9",
		   'type' => 'HB',
		   'thickness' => null,
		   'weight_per_m' => '23.8',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 52,
		   'name' => "HB150x150x7x10",
		   'type' => 'HB',
		   'thickness' => null,
		   'weight_per_m' => '31.5',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 53,
		   'name' => "HB175x175x7.5x11",
		   'type' => 'HB',
		   'thickness' => null,
		   'weight_per_m' => '40.2',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 54,
		   'name' => "HB200x200x8x12",
		   'type' => 'HB',
		   'thickness' => null,
		   'weight_per_m' => '49.9',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 55,
		   'name' => "HB250x250x9x14",
		   'type' => 'HB',
		   'thickness' => null,
		   'weight_per_m' => '72.4',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 56,
		   'name' => "HB300x300x10x15",
		   'type' => 'HB',
		   'thickness' => null,
		   'weight_per_m' => '94',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 57,
		   'name' => "HB350x350x12x19",
		   'type' => 'HB',
		   'thickness' => null,
		   'weight_per_m' => '137',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 58,
		   'name' => "HB350x350x19x19",
		   'type' => 'HB',
		   'thickness' => null,
		   'weight_per_m' => '156',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 59,
		   'name' => "HB400x400x13x21",
		   'type' => 'HB',
		   'thickness' => null,
		   'weight_per_m' => '172',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 60,
		   'name' => "IB150x75x5.5x9.5",
		   'type' => 'IB',
		   'thickness' => null,
		   'weight_per_m' => '17.1',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 61,
		   'name' => "IB200x100x7x10",
		   'type' => 'IB',
		   'thickness' => null,
		   'weight_per_m' => '26',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 62,
		   'name' => "IB200x150x9x16 ",
		   'type' => 'IB',
		   'thickness' => null,
		   'weight_per_m' => '50.4',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 63,
		   'name' => "IB250x 125x7.5x12.5",
		   'type' => 'IB',
		   'thickness' => null,
		   'weight_per_m' => '38.3',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 64,
		   'name' => "IB250x 125x10x19",
		   'type' => 'IB',
		   'thickness' => null,
		   'weight_per_m' => '55.5',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 65,
		   'name' => "IB300x150x8x13",
		   'type' => 'IB',
		   'thickness' => null,
		   'weight_per_m' => '48.3',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 66,
		   'name' => "IB300x150x10x18.5",
		   'type' => 'IB',
		   'thickness' => null,
		   'weight_per_m' => '65.6',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 67,
		   'name' => "IB350x150x9x15",
		   'type' => 'IB',
		   'thickness' => null,
		   'weight_per_m' => '58.5',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 68,
		   'name' => "IB350x150x12x24",
		   'type' => 'IB',
		   'thickness' => null,
		   'weight_per_m' => '87.2',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 69,
		   'name' => "IB400x150x10x18",
		   'type' => 'IB',
		   'thickness' => null,
		   'weight_per_m' => '72',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 70,
		   'name' => "IB400x150x12.5x25",
		   'type' => 'IB',
		   'thickness' => null,
		   'weight_per_m' => '95.8',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 71,
		   'name' => "WF100x50x5x7",
		   'type' => 'WF',
		   'thickness' => null,
		   'weight_per_m' => '9.3',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 72,
		   'name' => "WF150x75x5x7",
		   'type' => 'WF',
		   'thickness' => null,
		   'weight_per_m' => '14',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 73,
		   'name' => "WF148x100x6x9",
		   'type' => 'WF',
		   'thickness' => null,
		   'weight_per_m' => '21.1',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 74,
		   'name' => "WF200x100x5.5x8",
		   'type' => 'WF',
		   'thickness' => null,
		   'weight_per_m' => '21.3',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 75,
		   'name' => "WF194x150x6x9",
		   'type' => 'WF',
		   'thickness' => null,
		   'weight_per_m' => '30.6',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 76,
		   'name' => "WF250x125x6x9",
		   'type' => 'WF',
		   'thickness' => null,
		   'weight_per_m' => '29.6',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 77,
		   'name' => "WF244x175x7x11",
		   'type' => 'WF',
		   'thickness' => null,
		   'weight_per_m' => '44.1',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 78,
		   'name' => "WF300x150x6.5x9",
		   'type' => 'WF',
		   'thickness' => null,
		   'weight_per_m' => '36.7',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 79,
		   'name' => "WF294x200x8x12",
		   'type' => 'WF',
		   'thickness' => null,
		   'weight_per_m' => '56.8',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 80,
		   'name' => "WF350x175x7x11",
		   'type' => 'WF',
		   'thickness' => null,
		   'weight_per_m' => '49.6',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 81,
		   'name' => "WF340x250x9x14",
		   'type' => 'WF',
		   'thickness' => null,
		   'weight_per_m' => '79.7',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 82,
		   'name' => "WF400x200x8x13",
		   'type' => 'WF',
		   'thickness' => null,
		   'weight_per_m' => '66',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 83,
		   'name' => "WF390x300x10x16",
		   'type' => 'WF',
		   'thickness' => null,
		   'weight_per_m' => '107',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 84,
		   'name' => "WF450x200x9x14",
		   'type' => 'WF',
		   'thickness' => null,
		   'weight_per_m' => '76',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 85,
		   'name' => "WF440x300x11x18",
		   'type' => 'WF',
		   'thickness' => null,
		   'weight_per_m' => '124',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 86,
		   'name' => "WF500x200x10x16",
		   'type' => 'WF',
		   'thickness' => null,
		   'weight_per_m' => '89.6',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 87,
		   'name' => "WF488x300x11x18",
		   'type' => 'WF',
		   'thickness' => null,
		   'weight_per_m' => '128',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 88,
		   'name' => "WF600x200x11x17",
		   'type' => 'WF',
		   'thickness' => null,
		   'weight_per_m' => '106',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 89,
		   'name' => "WF700x300x13x24",
		   'type' => 'WF',
		   'thickness' => null,
		   'weight_per_m' => '185',
		   'weight_tolerance' => '',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 90,
		   'name' => "Rpipe-TISI15x2mm",
		   'type' => 'Rpipe-TISI',
		   'thickness' => '2',
		   'weight_per_m' => '0.97',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 91,
		   'name' => "Rpipe-TISI20x2.3mm",
		   'type' => 'Rpipe-TISI',
		   'thickness' => '2.3',
		   'weight_per_m' => '1.41',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 92,
		   'name' => "Rpipe-TISI25x2.3mm",
		   'type' => 'Rpipe-TISI',
		   'thickness' => '2.3',
		   'weight_per_m' => '1.8',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 93,
		   'name' => "Rpipe-TISI32x2.3mm",
		   'type' => 'Rpipe-TISI',
		   'thickness' => '2.3',
		   'weight_per_m' => '2.63',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 94,
		   'name' => "Rpipe-TISI40x2.3mm",
		   'type' => 'Rpipe-TISI',
		   'thickness' => '2.3',
		   'weight_per_m' => '2.63',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 95,
		   'name' => "Rpipe-TISI40x3.2mm",
		   'type' => 'Rpipe-TISI',
		   'thickness' => '3.2',
		   'weight_per_m' => '3.58',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 96,
		   'name' => "Rpipe-TISI50x3.2mm",
		   'type' => 'Rpipe-TISI',
		   'thickness' => '3.2',
		   'weight_per_m' => '4.52',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 97,
		   'name' => "Rpipe-TISI50x4mm",
		   'type' => 'Rpipe-TISI',
		   'thickness' => '4',
		   'weight_per_m' => '5.57',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 98,
		   'name' => "Rpipe-TISI65x3.2mm",
		   'type' => 'Rpipe-TISI',
		   'thickness' => '3.2',
		   'weight_per_m' => '5.77',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 99,
		   'name' => "Rpipe-TISI65x4mm",
		   'type' => 'Rpipe-TISI',
		   'thickness' => '4',
		   'weight_per_m' => '7.13',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 100,
		   'name' => "Rpipe-TISI80x3.2mm",
		   'type' => 'Rpipe-TISI',
		   'thickness' => '3.2',
		   'weight_per_m' => '6.76',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 101,
		   'name' => "Rpipe-TISI80x4mm",
		   'type' => 'Rpipe-TISI',
		   'thickness' => '4',
		   'weight_per_m' => '8.38',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 102,
		   'name' => "Rpipe-TISI90x3.2mm",
		   'type' => 'Rpipe-TISI',
		   'thickness' => '3.2',
		   'weight_per_m' => '7.77',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 103,
		   'name' => "Rpipe-TISI90x4mm",
		   'type' => 'Rpipe-TISI',
		   'thickness' => '4',
		   'weight_per_m' => '9.63',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 104,
		   'name' => "Rpipe-TISI100x3.2mm",
		   'type' => 'Rpipe-TISI',
		   'thickness' => '3.2',
		   'weight_per_m' => '8.77',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 105,
		   'name' => "Rpipe-TISI100x4.5mm",
		   'type' => 'Rpipe-TISI',
		   'thickness' => '4.5',
		   'weight_per_m' => '10.88',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 106,
		   'name' => "Rpipe-TISI100x5.6mm",
		   'type' => 'Rpipe-TISI',
		   'thickness' => '5.6',
		   'weight_per_m' => '12.19',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 107,
		   'name' => "Rpipe-TISI125x4.5mm",
		   'type' => 'Rpipe-TISI',
		   'thickness' => '4.5',
		   'weight_per_m' => '15.02',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 108,
		   'name' => "Rpipe-TISI125x6mm",
		   'type' => 'Rpipe-TISI',
		   'thickness' => '6',
		   'weight_per_m' => '19.8',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 109,
		   'name' => "Rpipe-TISI150x4.5mm",
		   'type' => 'Rpipe-TISI',
		   'thickness' => '4.5',
		   'weight_per_m' => '17.83',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 110,
		   'name' => "Rpipe-TISI150x6mm",
		   'type' => 'Rpipe-TISI',
		   'thickness' => '6',
		   'weight_per_m' => '23.56',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 111,
		   'name' => "SQpipe-TISI25x25x2mm",
		   'type' => 'SQpipe-TISI',
		   'thickness' => '2',
		   'weight_per_m' => '1.36',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 112,
		   'name' => "SQpipe-TISI25x25x2.3mm",
		   'type' => 'SQpipe-TISI',
		   'thickness' => '2.3',
		   'weight_per_m' => '1.53',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 113,
		   'name' => "SQpipe-TISI32x32x2.3mm",
		   'type' => 'SQpipe-TISI',
		   'thickness' => '2.3',
		   'weight_per_m' => '2.04',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 114,
		   'name' => "SQpipe-TISI32x32x3.2mm",
		   'type' => 'SQpipe-TISI',
		   'thickness' => '3.2',
		   'weight_per_m' => '2.69',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 115,
		   'name' => "SQpipe-TISI38x38x2.3mm",
		   'type' => 'SQpipe-TISI',
		   'thickness' => '2.3',
		   'weight_per_m' => '2.47',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 116,
		   'name' => "SQpipe-TISI38x38x3.2mm",
		   'type' => 'SQpipe-TISI',
		   'thickness' => '3.2',
		   'weight_per_m' => '3.29',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 117,
		   'name' => "SQpipe-TISI50x50x1.6mm",
		   'type' => 'SQpipe-JIS',
		   'thickness' => '1.6',
		   'weight_per_m' => '2.38',
		   'weight_tolerance' => '0.1',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 118,
		   'name' => "SQpipe-TISI50x50x2.3mm",
		   'type' => 'SQpipe-TISI',
		   'thickness' => '2.3',
		   'weight_per_m' => '3.34',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 119,
		   'name' => "SQpipe-TISI50x50x3.2mm",
		   'type' => 'SQpipe-TISI',
		   'thickness' => '3.2',
		   'weight_per_m' => '4.5',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 120,
		   'name' => "SQpipe-TISI60x60x2.3mm",
		   'type' => 'SQpipe-TISI',
		   'thickness' => '2.3',
		   'weight_per_m' => '4.06',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 121,
		   'name' => "SQpipe-TISI60x60x3.2mm",
		   'type' => 'SQpipe-TISI',
		   'thickness' => '3.2',
		   'weight_per_m' => '5.5',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 122,
		   'name' => "SQpipe-TISI60x60x4mm",
		   'type' => 'SQpipe-TISI',
		   'thickness' => '4',
		   'weight_per_m' => '6.71',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 123,
		   'name' => "SQpipe-TISI75x75x3.2mm",
		   'type' => 'SQpipe-TISI',
		   'thickness' => '3.2',
		   'weight_per_m' => '7.01',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 124,
		   'name' => "SQpipe-TISI75x75x4mm",
		   'type' => 'SQpipe-TISI',
		   'thickness' => '4',
		   'weight_per_m' => '8.59',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 125,
		   'name' => "SQpipe-TISI90x90x3.2mm",
		   'type' => 'SQpipe-TISI',
		   'thickness' => '3.2',
		   'weight_per_m' => '8.51',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 126,
		   'name' => "SQpipe-TISI90x90x4mm",
		   'type' => 'SQpipe-TISI',
		   'thickness' => '4',
		   'weight_per_m' => '10.48',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 127,
		   'name' => "SQpipe-TISI90x90x4.5mm",
		   'type' => 'SQpipe-TISI',
		   'thickness' => '4.5',
		   'weight_per_m' => '11.67',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 128,
		   'name' => "SQpipe-TISI100x100x3.2mm",
		   'type' => 'SQpipe-TISI',
		   'thickness' => '3.2',
		   'weight_per_m' => '9.52',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 129,
		   'name' => "SQpipe-TISI100x100x4mm",
		   'type' => 'SQpipe-TISI',
		   'thickness' => '4',
		   'weight_per_m' => '11.73',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 130,
		   'name' => "SQpipe-TISI100x100x4.5mm",
		   'type' => 'SQpipe-TISI',
		   'thickness' => '4.5',
		   'weight_per_m' => '13.08',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 131,
		   'name' => "RTPipe-TISI50x25x2.3mm",
		   'type' => 'RTPipe-TISI',
		   'thickness' => '2.3',
		   'weight_per_m' => '2.44',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 132,
		   'name' => "RTPipe-TISI50x25x3.2mm",
		   'type' => 'RTPipe-TISI',
		   'thickness' => '3.2',
		   'weight_per_m' => '3.24',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 133,
		   'name' => "RTPipe-TISI60x30x2.3mm",
		   'type' => 'RTPipe-TISI',
		   'thickness' => '2.3',
		   'weight_per_m' => '2.98',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 134,
		   'name' => "RTPipe-TISI60x30x3.2mm",
		   'type' => 'RTPipe-TISI',
		   'thickness' => '3.2',
		   'weight_per_m' => '3.99',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 135,
		   'name' => "RTPipe-TISI75x38x2.3mm",
		   'type' => 'RTPipe-TISI',
		   'thickness' => '2.3',
		   'weight_per_m' => '3.81',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 136,
		   'name' => "RTPipe-TISI75x38x3.2mm",
		   'type' => 'RTPipe-TISI',
		   'thickness' => '3.2',
		   'weight_per_m' => '5.15',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 137,
		   'name' => "RTPipe-TISI75x45x2.3mm",
		   'type' => 'RTPipe-TISI',
		   'thickness' => '2.3',
		   'weight_per_m' => '4.06',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 138,
		   'name' => "RTPipe-TISI75x45x3.2mm",
		   'type' => 'RTPipe-TISI',
		   'thickness' => '3.2',
		   'weight_per_m' => '5.5',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 139,
		   'name' => "RTPipe-TISI90x45x2.3mm",
		   'type' => 'RTPipe-TISI',
		   'thickness' => '2.3',
		   'weight_per_m' => '4.6',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 140,
		   'name' => "RTPipe-TISI90x45x3.2mm",
		   'type' => 'RTPipe-TISI',
		   'thickness' => '3.2',
		   'weight_per_m' => '6.25',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 141,
		   'name' => "RTPipe-TISI100x50x3.2mm",
		   'type' => 'RTPipe-TISI',
		   'thickness' => '3.2',
		   'weight_per_m' => '7.01',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 142,
		   'name' => "RTPipe-TISI100x50x4mm",
		   'type' => 'RTPipe-TISI',
		   'thickness' => '4',
		   'weight_per_m' => '8.59',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 143,
		   'name' => "RTPipe-TISI100x50x4.5mm",
		   'type' => 'RTPipe-TISI',
		   'thickness' => '4.5',
		   'weight_per_m' => '9.55',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 144,
		   'name' => "RTPipe-TISI125x50x3.2mm",
		   'type' => 'RTPipe-TISI',
		   'thickness' => '3.2',
		   'weight_per_m' => '8.26',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 145,
		   'name' => "RTPipe-TISI125x50x4mm",
		   'type' => 'RTPipe-TISI',
		   'thickness' => '4',
		   'weight_per_m' => '10.2',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 146,
		   'name' => "RTPipe-TISI125x50x4.5mm",
		   'type' => 'RTPipe-TISI',
		   'thickness' => '4.5',
		   'weight_per_m' => '11.3',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 147,
		   'name' => "RTPipe-TISI125x75x3.2mm",
		   'type' => 'RTPipe-TISI',
		   'thickness' => '3.2',
		   'weight_per_m' => '9.52',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 148,
		   'name' => "RTPipe-TISI125x75x4mm",
		   'type' => 'RTPipe-TISI',
		   'thickness' => '4',
		   'weight_per_m' => '11.7',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 149,
		   'name' => "RTPipe-TISI125x75x4.5mm",
		   'type' => 'RTPipe-TISI',
		   'thickness' => '4.5',
		   'weight_per_m' => '13.1',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 150,
		   'name' => "RTPipe-TISI150x100x4.5mm",
		   'type' => 'RTPipe-TISI',
		   'thickness' => '4.5',
		   'weight_per_m' => '16.6',
		   'weight_tolerance' => '0.1',
		   'grade' => 'HS41',
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 151,
		   'name' => "Angle-TISI25x25x3mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '3',
		   'weight_per_m' => '1.12',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '297'
		));
		Product::create(array(
		   'id' => 152,
		   'name' => "Angle-TISI25x25x5mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '5',
		   'weight_per_m' => '1.77',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '196'
		));
		Product::create(array(
		   'id' => 153,
		   'name' => "Angle-TISI30x30x3mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '3',
		   'weight_per_m' => '1.36',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '245'
		));
		Product::create(array(
		   'id' => 154,
		   'name' => "Angle-TISI30x30x5mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '5',
		   'weight_per_m' => '2.18',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '155'
		));
		Product::create(array(
		   'id' => 155,
		   'name' => "Angle-TISI40x40x3mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '3',
		   'weight_per_m' => '1.83',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '199'
		));
		Product::create(array(
		   'id' => 156,
		   'name' => "Angle-TISI40x40x4mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '4',
		   'weight_per_m' => '2.42',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '163'
		));
		Product::create(array(
		   'id' => 157,
		   'name' => "Angle-TISI40x40x5mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '5',
		   'weight_per_m' => '2.95',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '127'
		));
		Product::create(array(
		   'id' => 158,
		   'name' => "Angle-TISI40x40x6mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '6',
		   'weight_per_m' => '3.52',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '109'
		));
		Product::create(array(
		   'id' => 159,
		   'name' => "Angle-TISI50x50x3mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '3',
		   'weight_per_m' => '2.33',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '162'
		));
		Product::create(array(
		   'id' => 160,
		   'name' => "Angle-TISI50x50x4mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '4',
		   'weight_per_m' => '3.06',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '120'
		));
		Product::create(array(
		   'id' => 161,
		   'name' => "Angle-TISI50x50x5mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '5',
		   'weight_per_m' => '3.77',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '99'
		));
		Product::create(array(
		   'id' => 162,
		   'name' => "Angle-TISI50x50x6mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '6',
		   'weight_per_m' => '4.43',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '78'
		));
		Product::create(array(
		   'id' => 163,
		   'name' => "Angle-TISI65x65x5mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '5',
		   'weight_per_m' => '5',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '74'
		));
		Product::create(array(
		   'id' => 164,
		   'name' => "Angle-TISI65x65x6mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '6',
		   'weight_per_m' => '5.91',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '64'
		));
		Product::create(array(
		   'id' => 165,
		   'name' => "Angle-TISI65x65x8mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '8',
		   'weight_per_m' => '7.6',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '44'
		));
		Product::create(array(
		   'id' => 166,
		   'name' => "Angle-TISI75x75x6mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '6',
		   'weight_per_m' => '6.85',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '44'
		));
		Product::create(array(
		   'id' => 167,
		   'name' => "Angle-TISI75x75x9mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '9',
		   'weight_per_m' => '9.96',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '33'
		));
		Product::create(array(
		   'id' => 168,
		   'name' => "Angle-TISI75x75x12mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '12',
		   'weight_per_m' => '13',
		   'weight_tolerance' => '0.04',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '24'
		));
		Product::create(array(
		   'id' => 169,
		   'name' => "Angle-TISI90x90x7mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '7',
		   'weight_per_m' => '9.59',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '33'
		));
		Product::create(array(
		   'id' => 170,
		   'name' => "Angle-TISI90x90x10mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '10',
		   'weight_per_m' => '13.3',
		   'weight_tolerance' => '0.04',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '24'
		));
		Product::create(array(
		   'id' => 171,
		   'name' => "Angle-TISI90x90x12mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '12',
		   'weight_per_m' => '15.9',
		   'weight_tolerance' => '0.04',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '19'
		));
		Product::create(array(
		   'id' => 172,
		   'name' => "Angle-TISI100x100x7mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '7',
		   'weight_per_m' => '10.7',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '31'
		));
		Product::create(array(
		   'id' => 173,
		   'name' => "Angle-TISI100x100x10mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '10',
		   'weight_per_m' => '14.9',
		   'weight_tolerance' => '0.04',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '22'
		));
		Product::create(array(
		   'id' => 174,
		   'name' => "Angle-TISI100x100x12mm",
		   'type' => 'Angle-TISI',
		   'thickness' => '12',
		   'weight_per_m' => '17.8',
		   'weight_tolerance' => '0.04',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '17'
		));
		Product::create(array(
		   'id' => 175,
		   'name' => "Angle-SYS120x120x8mm",
		   'type' => 'Angle-SYS',
		   'thickness' => '8',
		   'weight_per_m' => '14.7',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 176,
		   'name' => "Angle-SYS130x130x9mm",
		   'type' => 'Angle-SYS',
		   'thickness' => '9',
		   'weight_per_m' => '17.9',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 177,
		   'name' => "Angle-SYS130x130x12mm",
		   'type' => 'Angle-SYS',
		   'thickness' => '12',
		   'weight_per_m' => '23.4',
		   'weight_tolerance' => '0.04',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 178,
		   'name' => "Angle-SYS130x130x15mm",
		   'type' => 'Angle-SYS',
		   'thickness' => '15',
		   'weight_per_m' => '28.8',
		   'weight_tolerance' => '0.04',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 179,
		   'name' => "Angle-SYS150x150x12mm",
		   'type' => 'Angle-SYS',
		   'thickness' => '12',
		   'weight_per_m' => '27.3',
		   'weight_tolerance' => '0.04',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 180,
		   'name' => "Angle-SYS150x150x15mm",
		   'type' => 'Angle-SYS',
		   'thickness' => '15',
		   'weight_per_m' => '33.6',
		   'weight_tolerance' => '0.04',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 181,
		   'name' => "Angle-SYS150x150x19mm",
		   'type' => 'Angle-SYS',
		   'thickness' => '19',
		   'weight_per_m' => '41.9',
		   'weight_tolerance' => '0.04',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 182,
		   'name' => "C-CCH-TISI50x25x5x6",
		   'type' => 'C-CCH-TISI',
		   'thickness' => null,
		   'weight_per_m' => '3.86',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '90'
		));
		Product::create(array(
		   'id' => 183,
		   'name' => "C-CCH-TISI75x40x5x7",
		   'type' => 'C-CCH-TISI',
		   'thickness' => null,
		   'weight_per_m' => '6.92',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '48'
		));
		Product::create(array(
		   'id' => 184,
		   'name' => "C-CCH-TISI100x50x5x7.5",
		   'type' => 'C-CCH-TISI',
		   'thickness' => null,
		   'weight_per_m' => '9.36',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '36'
		));
		Product::create(array(
		   'id' => 185,
		   'name' => "C-CCH-TISI125x65x6x8",
		   'type' => 'C-CCH-TISI',
		   'thickness' => null,
		   'weight_per_m' => '13.4',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '24'
		));
		Product::create(array(
		   'id' => 186,
		   'name' => "C-CCH-TISI150x75x6.5x10",
		   'type' => 'C-CCH-TISI',
		   'thickness' => null,
		   'weight_per_m' => '18.6',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '16'
		));
		Product::create(array(
		   'id' => 187,
		   'name' => "C-CCH-TISI150x75x9x12.5",
		   'type' => 'C-CCH-TISI',
		   'thickness' => null,
		   'weight_per_m' => '24',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '16'
		));
		Product::create(array(
		   'id' => 188,
		   'name' => "C-CCH-TISI180x75x7x10.5",
		   'type' => 'C-CCH-TISI',
		   'thickness' => null,
		   'weight_per_m' => '21.4',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '16'
		));
		Product::create(array(
		   'id' => 189,
		   'name' => "C-CCH-TISI200x80x7.5x11",
		   'type' => 'C-CCH-TISI',
		   'thickness' => null,
		   'weight_per_m' => '24.6',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '16'
		));
		Product::create(array(
		   'id' => 190,
		   'name' => "C-CCH-TISI200x90x8x13.5",
		   'type' => 'C-CCH-TISI',
		   'thickness' => null,
		   'weight_per_m' => '30.3',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => '12'
		));
		Product::create(array(
		   'id' => 191,
		   'name' => "C-CCH-SYS250x90x9x13",
		   'type' => 'C-CCH-SYS',
		   'thickness' => null,
		   'weight_per_m' => '34.6',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 192,
		   'name' => "C-CCH-SYS250x90x11x14.5",
		   'type' => 'C-CCH-SYS',
		   'thickness' => null,
		   'weight_per_m' => '40.2',
		   'weight_tolerance' => '0.04',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 193,
		   'name' => "C-CCH-SYS300x90x9x13",
		   'type' => 'C-CCH-SYS',
		   'thickness' => null,
		   'weight_per_m' => '38.1',
		   'weight_tolerance' => '0.05',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 194,
		   'name' => "C-CCH-SYS300x90x10x15.5",
		   'type' => 'C-CCH-SYS',
		   'thickness' => null,
		   'weight_per_m' => '43.8',
		   'weight_tolerance' => '0.04',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 195,
		   'name' => "C-CCH-SYS380x100x10.5x16",
		   'type' => 'C-CCH-SYS',
		   'thickness' => null,
		   'weight_per_m' => '54.5',
		   'weight_tolerance' => '0.04',
		   'grade' => null,
		   'standard_length' => '6',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 196,
		   'name' => "PLT4'x8'x1.2mm",
		   'type' => 'PLT',
		   'thickness' => '1.2',
		   'weight_per_m' => '27.996',
		   'weight_tolerance' => '0',
		   'grade' => null,
		   'standard_length' => '',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 197,
		   'name' => "PLT4'x8'x1.4mm",
		   'type' => 'PLT',
		   'thickness' => '1.4',
		   'weight_per_m' => '32.662',
		   'weight_tolerance' => '0',
		   'grade' => null,
		   'standard_length' => '',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 198,
		   'name' => "PLT4'x8'x2mm",
		   'type' => 'PLT',
		   'thickness' => '2',
		   'weight_per_m' => '46.66',
		   'weight_tolerance' => '0',
		   'grade' => null,
		   'standard_length' => '',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 199,
		   'name' => "PLT4'x8'x2.3mm",
		   'type' => 'PLT',
		   'thickness' => '2.3',
		   'weight_per_m' => '53.659',
		   'weight_tolerance' => '0',
		   'grade' => null,
		   'standard_length' => '',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 200,
		   'name' => "PLT4'x8'x3mm",
		   'type' => 'PLT',
		   'thickness' => '3',
		   'weight_per_m' => '69.99',
		   'weight_tolerance' => '0.00666666666666667',
		   'grade' => null,
		   'standard_length' => '',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 201,
		   'name' => "PLT4'x8'x4mm",
		   'type' => 'PLT',
		   'thickness' => '4',
		   'weight_per_m' => '93.32',
		   'weight_tolerance' => '0.005',
		   'grade' => null,
		   'standard_length' => '',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 202,
		   'name' => "PLT4'x8'x4.5mm",
		   'type' => 'PLT',
		   'thickness' => '4.5',
		   'weight_per_m' => '104.985',
		   'weight_tolerance' => '0.00444444444444444',
		   'grade' => null,
		   'standard_length' => '',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 203,
		   'name' => "PLT4'x8'x6mm",
		   'type' => 'PLT',
		   'thickness' => '6',
		   'weight_per_m' => '139.98',
		   'weight_tolerance' => '0.00333333333333333',
		   'grade' => null,
		   'standard_length' => '',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 204,
		   'name' => "PLT4'x8'x9mm",
		   'type' => 'PLT',
		   'thickness' => '9',
		   'weight_per_m' => '209.97',
		   'weight_tolerance' => '0.00222222222222222',
		   'grade' => null,
		   'standard_length' => '',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 205,
		   'name' => "PLT4'x8'x10mm",
		   'type' => 'PLT',
		   'thickness' => '10',
		   'weight_per_m' => '233.3',
		   'weight_tolerance' => '0.002',
		   'grade' => null,
		   'standard_length' => '',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 206,
		   'name' => "PLT4'x8'x12mm",
		   'type' => 'PLT',
		   'thickness' => '12',
		   'weight_per_m' => '279.96',
		   'weight_tolerance' => '0.00166666666666667',
		   'grade' => null,
		   'standard_length' => '',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 207,
		   'name' => "PLT5'x10'x2mm",
		   'type' => 'PLT',
		   'thickness' => '2',
		   'weight_per_m' => '73',
		   'weight_tolerance' => '0.01',
		   'grade' => null,
		   'standard_length' => '',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 208,
		   'name' => "PLT5'x10'x2.3mm",
		   'type' => 'PLT',
		   'thickness' => '2.3',
		   'weight_per_m' => '83.95',
		   'weight_tolerance' => '0.00869565217391304',
		   'grade' => null,
		   'standard_length' => '',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 209,
		   'name' => "PLT5'x10'x3mm",
		   'type' => 'PLT',
		   'thickness' => '3',
		   'weight_per_m' => '109.5',
		   'weight_tolerance' => '0.00666666666666667',
		   'grade' => null,
		   'standard_length' => '',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 210,
		   'name' => "PLT5'x10'x4mm",
		   'type' => 'PLT',
		   'thickness' => '4',
		   'weight_per_m' => '146',
		   'weight_tolerance' => '0.005',
		   'grade' => null,
		   'standard_length' => '',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 211,
		   'name' => "PLT5'x10'x4.5mm",
		   'type' => 'PLT',
		   'thickness' => '4.5',
		   'weight_per_m' => '164.25',
		   'weight_tolerance' => '0.00444444444444444',
		   'grade' => null,
		   'standard_length' => '',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 212,
		   'name' => "PLT5'x10'x6mm",
		   'type' => 'PLT',
		   'thickness' => '6',
		   'weight_per_m' => '219',
		   'weight_tolerance' => '0.00333333333333333',
		   'grade' => null,
		   'standard_length' => '',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 213,
		   'name' => "PLT5'x10'x9mm",
		   'type' => 'PLT',
		   'thickness' => '9',
		   'weight_per_m' => '328.5',
		   'weight_tolerance' => '0.00222222222222222',
		   'grade' => null,
		   'standard_length' => '',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 214,
		   'name' => "PLT5'x10'x10mm",
		   'type' => 'PLT',
		   'thickness' => '10',
		   'weight_per_m' => '365',
		   'weight_tolerance' => '0.002',
		   'grade' => null,
		   'standard_length' => '',
		   'pack_unit' => null
		));
		Product::create(array(
		   'id' => 215,
		   'name' => "PLT5'x10'x12mm",
		   'type' => 'PLT',
		   'thickness' => '12',
		   'weight_per_m' => '438',
		   'weight_tolerance' => '0.00166666666666667',
		   'grade' => null,
		   'standard_length' => '',
		   'pack_unit' => null
		));

	}
}