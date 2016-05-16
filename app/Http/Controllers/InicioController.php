<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Noticia;
use File;
use Illuminate\Http\Request;
use Mail;

class InicioController extends Controller {

	public function index() {
		$noticias = Noticia::all()->sortByDesc('id')->take(6);

		$cont = 0;

		return view('layout.indexsoever', compact('noticias', 'cont'));
	}

	public function sendMail(Request $request) {

		$this->validate($request, [
			'email' => 'required',
			'asunto' => 'required',
			'mensaje' => 'required',
		]);

		$data = $request->all();

		Mail::send('emails.bienvenido', $data, function ($message) use ($request) {
			$message->from($request['email'], $request['email']);

			$message->to('info@soever.com.ar', 'Soever');

			$message->subject($request['asunto']);
		});

		return redirect('mensaje');

	}

	public function cambioImg(Request $request) {
		$input = $request->all();

		$img_path = public_path() . '/assets/img/galeria/';

		File::delete($img_path . 'foto' . $input['foto'] . '.jpg');

		$input['img']->move($img_path, 'foto' . $input['foto'] . '.jpg');

		return redirect('/');
	}
}
