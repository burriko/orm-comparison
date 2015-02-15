<?php

use App\Eloquent\Company;
use App\Eloquent\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$faker = Faker\Factory::create();

		DB::table('companies')->truncate();
		DB::table('employees')->truncate();

		for ($i=0; $i < 100; $i++) {
			$company = Company::create([
				'name'     => $faker->company,
				'business' => $faker->bs
			]);
			for ($j=0; $j < 50; $j++) {
				Employee::create([
					'company_id' => $company->id,
					'name'       => $faker->name,
					'job_title'  => $faker->sentence(3),
					'phone'      => $faker->phoneNumber,
					'email'      => $faker->email,
				]);
			}
		}

		// $this->call('UserTableSeeder');
	}

}
