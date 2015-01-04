<?php

namespace api\v1;

class UsersController extends \BaseController { 

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	    try{
	        $statusCode = 200;
	        $response['title'] = 'Users Controller';

	        $response['message'] = 'Hello from the Users Controller';

	        $response['users'] = [
	        	'1' => [
	        		'name' => 'Mike',
	        		'age' => 29,
	        		'id' => 1,
	        		'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
	        	],
	        	'2' => [
	        		'name' => 'John',
	        		'age' => 20,
	        		'id' => 2,
	        		'bio' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
	        	],
	        	'3' => [
	        		'name' => 'Dave',
	        		'age' => 25,
	        		'id' => 3,
	        		'bio' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'
	        	]
	        ];
	 
	    }catch (Exception $e){
	        $statusCode = 400;
	    }finally{
	        return \Response::json($response, $statusCode);
	    }
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	    try{
	        $statusCode = 200;
	        $response['title'] = 'Users Controller';

	        $response['message'] = 'Create';
	 
	    }catch (Exception $e){
	        $statusCode = 400;
	    }finally{
	        return \Response::json($response, $statusCode);
	    }
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	    try{
	        $statusCode = 200;
	        $response['title'] = 'Users Controller';

	        $response['message'] = 'Store';
	 
	    }catch (Exception $e){
	        $statusCode = 400;
	    }finally{
	        return \Response::json($response, $statusCode);
	    }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	    try{
	        $statusCode = 200;
	        $response['title'] = 'Users Controller';

	        $response['message'] = 'Users Controller ' . $id;
	 
	    }catch (Exception $e){
	        $statusCode = 400;
	    }finally{
	        return \Response::json($response, $statusCode);
	    }
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
	    try{
	        $statusCode = 200;
	        $response['title'] = 'Users Controller';

	        $response['message'] = 'Edit';
	 
	    }catch (Exception $e){
	        $statusCode = 400;
	    }finally{
	        return \Response::json($response, $statusCode);
	    }
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
	    try{
	        $statusCode = 200;
	        $response['title'] = 'Users Controller';

	        $response['message'] = 'Update';
	 
	    }catch (Exception $e){
	        $statusCode = 400;
	    }finally{
	        return \Response::json($response, $statusCode);
	    }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	    try{
	        $statusCode = 200;
	        $response['title'] = 'Users Controller';

	        $response['message'] = 'Destroy';
	 
	    }catch (Exception $e){
	        $statusCode = 400;
	    }finally{
	        return \Response::json($response, $statusCode);
	    }
	}


}
