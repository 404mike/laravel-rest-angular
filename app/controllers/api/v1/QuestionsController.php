<?php

namespace api\v1;
use api\v1 as Api;

class QuestionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
	    try{
	        $statusCode = 200;
	        $response['title'] = 'Questions Controller';

	        $response['message'] = 'Questions Controller for ' . $id;
	 
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
	        $response['title'] = 'Questions Controller';

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
	        $response['title'] = 'Questions Controller';

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
	public function show($photoId, $commentId)
	{
	    try{
	        $statusCode = 200;
	        $response['title'] = 'Questions Controller';

	        $response['message'] = 'showing result ' . $photoId . ' and ' . $commentId;

	        $response['extra'] = Api\User::getName();
	 
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
	        $response['title'] = 'Questions Controller';

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
	        $response['title'] = 'Questions Controller';

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
	        $response['title'] = 'Questions Controller';

	        $response['message'] = 'Destroy';
	 
	    }catch (Exception $e){
	        $statusCode = 400;
	    }finally{
	        return \Response::json($response, $statusCode);
	    }
	}


}
