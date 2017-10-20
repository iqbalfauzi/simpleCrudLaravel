<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class CreatesController extends Controller
{
	public function home(){
		$article =  Article::all();
		return view('home', ['article' => $article]); 
	}
	public function add(Request $request)
	{
		$this->validate($request, [
			'nim'=>'required',
			'nama'=>'required'
			]);
		$article = new Article;
		$article->nim = $request->input('nim') ;
		$article->nama = $request->input('nama') ;
		$article->save();
		return redirect('/')->with('info','Data Berhasil disimpan');
	}

	public function update($id)
	{
		$article =  Article::find($id);
		return view('update', ['article' => $article]); 
	}

	public function edit(Request $request,$id)
	{
		$this->validate($request, [
			'nim'=>'required',
			'nama'=>'required'
			]);
		$data = array(
			'nim' => $request->input('nim'),
			'nama' => $request->input('nama')
			);
		Article::where('id',$id)->update($data);
		return redirect('/')->with('info','Data Berhasil diupdate');
	}
	public function detail($id)
	{
		$article =  Article::find($id);
		return view('detail', ['article' => $article]); 
	}
	public function delete($id)
	{
		Article::where('id',$id)->delete();
		return redirect('/')->with('info','Data Berhasil diHapus');
	}
}
