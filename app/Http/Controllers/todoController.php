<?php

namespace App\Http\Controllers;
use App\ModelTodo;
use App\ModelBuku;
use Illuminate\Http\Request;

class todoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
    $data = ModelTodo::all();
    return response($data);
  }

  public function show($id){
    $data = ModelTodo::where('id',$id)->get();
    return response ($data);
  }

  public function store(Request $request){
    $data = new ModelTodo();
    $data->nmkt = $request->input('nmkt');
    //$data->alamat = $request->input('alamat');
    //$data->email = $request->input('email');
    $data->save();

    return response('Berhasil Tambah Data');
  }
  
  public function update(Request $request, $id){
    $data = ModelTodo::where('id',$id)->first();
    $data->nmkt = $request->input('nmkt');
    $data->save();

    return response('Berhasil Merubah Data');
  }

  public function destroy($id){
    $data = ModelTodo::where('id',$id)->first();
    $data->delete();

    return response('Berhasil Menghapus Data');
  }
  
  public function buku(){
    $data = ModelBuku::all();
    return response($data);
  }

  public function showbuku($id){
    $data = ModelBuku::where('id',$id)->get();
    return response ($data);
  }

  public function storebuku(Request $request){
    $data = new ModelBuku();
    $data->nama_buku = $request->input('nama_buku');
    $data->penulis = $request->input('penulis');
    $data->latar_belakang = $request->input('latar_belakang');
    $data->tahun_buku = $request->input('tahun_buku');
    $data->penerbit = $request->input('penerbit');
    $data->harga_buku = $request->input('harga_buku');
    $data->id_buku = $request->input('id_buku');
    //$data->alamat = $request->input('alamat');
    //$data->email = $request->input('email');
    //$data->jenjang = $request->input('jenjang');
    //$data->notelp = $request->input('notelp');
    $data->save();

    return response('Berhasil Tambah Data');
  }
  
  public function updatebuku(Request $request, $id){
    $data = ModelBuku::where('id',$id)->first();
    $data->nama_buku = $request->input('nama_buku');
    $data->save();

    return response('Berhasil Merubah Data');
  }

  public function destroybuku($id){
    $data = ModelBuku::where('id',$id)->first();
    $data->delete();

    return response('Berhasil Menghapus Data');
  }
}