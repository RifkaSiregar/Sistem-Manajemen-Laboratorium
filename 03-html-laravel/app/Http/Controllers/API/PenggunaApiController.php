<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Pengguna;
use App\Models\Aktivitas;
use Validator;
use App\Http\Resources\Pengguna as PenggunaResource;
   
class PenggunaApiController extends BaseController
{
    public function index()
    {
        $penggunas = Pengguna::all();
     
        return $this->sendResponse(PenggunaResource::collection($penggunas), 'Pengguna retrieved successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'nama_lengkap' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $penggunas = Pengguna::create($input);
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Menambah Data Pengguna',
        ]);  
        return $this->sendCorrect(new PenggunaResource($penggunas), 'Pengguna created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penggunas = Pengguna::find($id);
  
        if (is_null($penggunas)) {
            return $this->sendError('Pengguna not found.');
        }
   
        return $this->sendResponse(new PenggunaResource($penggunas), 'Penggunas retrieved successfully.');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengguna $pengguna)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'nama_lengkap' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $pengguna->nama_lengkap = $input['nama_lengkap'];
        $pengguna->email = $input['email'];
        $pengguna->jenis_kelamin = $input['jenis_kelamin'];
        $pengguna->agama = $input['agama'];
        $pengguna->alamat = $input['alamat'];
        $pengguna->save();
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Mengubah Data Pengguna',
        ]);   
        return $this->sendResponse(new PenggunaResource($pengguna), 'Pengguna updated successfully.');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengguna $pengguna)
    {
        $pengguna->delete();
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Menghapus Data Pengguna',
        ]); 
        return $this->sendResponse([], 'Pengguna deleted successfully.');
    }
}
