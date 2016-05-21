<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FAQ as faq;

use App;
use Illuminate\Support\Facades\Input;
use PDF;

class FAQController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = array('data'=>faq::all());
		return view('FAQ.faq')->with($data);
	}
	public function Addpost()
	{
		$faq = new faq;
 		$faq->username = Input::get('username');
		$faq->email = Input::get('email');
		$faq->subject = Input::get('subject');
		$faq->isi = Input::get('isi');
		// $post->slug = str_slug(Input::get('judul'));

		// if(Input::hasFile('sampul')){
		// 	$sampul = date("YmdHis");
		// 	uniqid().".".Input::file('sampul')->getClientOriginalExtension();

		// 	Input::file('sampul')->move(storage_path(),$sampul);
		// 	$post->sampul = $sampul;
		// }
		$faq->save();
		return redirect(url('faq'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
