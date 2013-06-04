<?php

class Create_Page_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pages', function($table)
		{
			$table->engine = 'InnoDB';
			
			$table->increments('id')->unsigned();
			$table->string('title', 255);
			$table->string('name');
			$table->text('excerpt');
			$table->text('content');
			$table->text('content_flitered');
			$table->string('group', 20);
			$table->string('type', 20);
			$table->integer('parent_id')->unsigned();
			$table->string('status', 20);
			$table->integer('menu_order');
			$table->timestamps();
			
			$table->index(array('group', 'type', 'status', 'menu_order'));
			$table->index('parent_id');
		});
		
		DB::table('pages')->insert(array(
            'title' => '關於康利金',
            'name' => '關於康利金',
       		'content' => '關於康利金',
       		'type' => 'about',
       		'status' => 'public',
       		'menu_order' => 0
       		));
		DB::table('pages')->insert(array(
            'title' => '是什麼',
            'name' => '是什麼',
       		'content' => '是什麼',
       		'type' => 'about',
       		'status' => 'public',
       		'menu_order' => 1
       		));
		DB::table('pages')->insert(array(
            'title' => '做什麼',
            'name' => '做什麼',
       		'content' => '做什麼',
       		'type' => 'about',
       		'status' => 'public',
       		'menu_order' => 2
       		));
		
		$brand_id = DB::table('pages')->insert_get_id(array(
            'title' => '關於附點',
            'name' => '關於附點',
       		'content' => '關於附點',
       		'type' => 'brand',
       		'status' => 'public',
       		'menu_order' => 0
       		));
		DB::table('pages')->insert(array(
            'title' => '是什麼',
            'name' => '是什麼',
       		'content' => '是什麼',
       		'type' => 'brand-detail',
       		'status' => 'public',
       		'parent_id' => $brand_id,
       		'menu_order' => 0
       		));
		DB::table('pages')->insert(array(
            'title' => '做什麼',
            'name' => '做什麼',
       		'content' => '做什麼',
       		'type' => 'brand-detail',
       		'status' => 'public',
       		'parent_id' => $brand_id,
       		'menu_order' => 1
       		));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pages');
	}

}