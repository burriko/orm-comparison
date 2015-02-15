<?php namespace App\Console\Commands;

use App\Eloquent\Repository\CompanyRepository;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class Benchmark extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'benchmark';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Command description.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct(CompanyRepository $companies)
	{
		$this->companies = $companies;
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$this->bench($this->companies);

		$this->bench(\App::make('App\Analogue\Repository\CompanyRepository'));
	}

	protected function bench($repository)
	{
		$benchmark = new \Ubench;
		$benchmark->start();

		$companies = $repository->all();
		foreach ($companies as $company) {
			$company_name = $company->name;
			foreach ($company->employees as $employee) {
				$employee_name = $employee->name;
			}
		}

		$benchmark->end();

		$this->info($benchmark->getTime());
		$this->info($benchmark->getMemoryPeak());
	}

}
