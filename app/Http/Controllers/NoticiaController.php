<?php

namespace App\Http\Controllers;

use App\DataMails;
use App\Http\Controllers\Controller;
use App\Noticia;
use Auth;
use Facebook;
use File;
use Illuminate\Http\Request;
use Mail;
use DB;

class NoticiaController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request) {
		//$noticias = Noticia::all()->sortByDesc('id')->take(5);

		//$noticias = Noticia::paginate(4);

		$noticias =  DB::table('noticias')->orderBy('id', 'desc')->paginate(4);

		$noticias->setPath('noticia');

		return view('noticia.index', compact('noticias'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request) {
		if (Auth::check()) {
			return view('noticia.create');
		} else {
			return redirect('auth/login');
		}

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request) {
		$input = $request->all();

		$this->validate($request, [
			'titulo' => 'required|max:70',
			'sub_texto' => 'required|max:255',
			'texto' => 'required',
			'img' => 'required',
		]);

		$noticia = new Noticia;

		$noticia['titulo'] = $input['titulo'];
		$noticia['sub_texto'] = $input['sub_texto'];
		$noticia['texto'] = $input['texto'];
		$noticia['imag'] = str_replace(" ", "", $input['img']->getClientOriginalName());

		$noticia->save();
		
		$img_path = public_path() . '/assets/img/'. $noticia['imag'];

		//$input['img']->move($img_path, $input['img']->getClientOriginalName());

		$this->redimensionarimg($input['img'], $img_path);		
		
		return redirect('noticia');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		$noticia = Noticia::findOrFail($id);

		$mensaje = '';

		return view('noticia.show', compact('noticia', 'mensaje'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		$noticia = Noticia::findOrFail($id);

		$img_path = public_path() . '/assets/img/';

		File::delete($img_path . $noticia->imag);

		$noticia->delete();

		return redirect('noticia');

	}

	public function registrarMail(Request $request) {
		$mail = new DataMails;

		$mail['mail'] = $request['email'];

		$mail->save();

		$mensaje = 'Se suscribio correctamente.';

		$noticia = Noticia::findOrFail($request['id']);

		return view('noticia.show', compact('noticia', 'mensaje'));
	}

	private function envinot($input, $noticia) {
		$mails = DataMails::all();

		$data = $input;

		foreach ($mails as $mail) {

			Mail::send('emails.noticia', $data, function ($message) use ($mail) {
				$message->from('info@juanmanuelhuss.com', 'Juan Manuel Huss');

				$message->to($mail->mail, $name = null);

				$message->subject('Nueva Noticia');
			});
		}

	}

	private function redimensionarimg($nombre_archivo, $img_path){

		list($ancho, $alto) = getimagesize($nombre_archivo);
		$nuevo_ancho = $ancho * 0.5;
		$nuevo_alto = $alto * 0.5;

		// Redimensionar
		$imagen_p = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
		$imagen = imagecreatefromjpeg($nombre_archivo);
		imagecopyresampled($imagen_p, $imagen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);

		imagejpeg($imagen_p, $img_path, 100); 
		//imagejpeg(img temporal , path + nombre a guardar , calidad)
	}

}
