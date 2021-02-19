<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Transaksi;
use App\Models\Aktivitas;
use Validator;
use App\Http\Resources\Transaksi as TransaksiResource;

class TransaksiApiController extends BaseController
{
    public function index()
    {
        $transaksis = Transaksi::all();
    
        return $this->sendResponse(TransaksiResource::collection($transaksis), 'Transaksi retrieved successfully.');
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
            'kode' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required',
            'status' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $transaksis = Transaksi::create($input);
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Menambah Data Transaksi',
        ]);
        return $this->sendCorrect(new TransaksiResource($transaksis), 'Transaksi created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksis = Transaksi::find($id);
  
        if (is_null($transaksis)) {
            return $this->sendError('Transaksi not found.');
        }
   
        return $this->sendResponse(new TransaksiResource($transaksis), 'Transaksi retrieved successfully.');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'kode' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required',
            'status' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $transaksi->kode = $input['kode'];
        $transaksi->tanggal = $input['tanggal'];
        $transaksi->jumlah = $input['jumlah'];
        $transaksi->status = $input['status'];
        $transaksi->save();
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Mengubah Data Transaksi',
        ]);
        return $this->sendResponse(new TransaksiResource($transaksi), 'Transaksi updated successfully.');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Menghapus Data Transaksi',
        ]);
        return $this->sendResponse([], 'Transaksi deleted successfully.');
    }
}
