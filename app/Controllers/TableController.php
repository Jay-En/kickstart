<?php 
	namespace App\Controllers;


	use App\Models\Table;

	
	class TableController{

		// protected $dates = ['deleted_at'];


		public function __construct()
		{

		}


    	public function get($request,$response, $args)
		{
			$table = new Table();
			return $response->withJSON($table->all());
		}


    	public function add($request,$response, $args)
		{
			$params = $request->getParsedBody();

			Table::insert($params);

			return $response->withJSON(["Successfully Created"]);
		}


    	public function update($request,$response, $args)
		{

			$table = new Table();
			$table->add();
			return $response->withJSON($table->add());
		}


    	public function delete($request,$response, $args)
		{

			$table = new Table();
			$table->add();
			return $response->withJSON($table->add());
		}

	}