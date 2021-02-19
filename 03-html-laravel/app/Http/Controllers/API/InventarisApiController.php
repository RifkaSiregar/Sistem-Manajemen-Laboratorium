<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Inventaris;
use App\Models\Aktivitas;
use Validator;
use App\Http\Resources\Inventaris as InventarisResource;
   
class InventarisApiController extends BaseController
{
    public function index()
    {
        $inventaris = Inventaris::all();
    
        return $this->sendResponse(InventarisResource::collection($inventaris), 'Inventaris retrieved successfully.');
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
            'nama_inventaris' => 'required',
            'jumlah' => 'required',
            'kondisi' => 'required',
            'status' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $inventaris = Inventaris::create($input);
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Menambah Data Inventaris',
        ]);
        return $this->sendCorrect(new InventarisResource($inventaris), 'Inventaris created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventaris = Inventaris::find($id);
  
        if (is_null($inventaris)) {
            return $this->sendError('Inventaris not found.');
        }
   
        return $this->sendResponse(new InventarisResource($inventaris), 'Inventaris retrieved successfully.');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventaris $inventaris, $id)
    {
        // $input = $request->all();
   
        // $validator = Validator::make($input, [
        //     'kode' => 'required',
        //     'nama_inventaris' => 'required',
        //     'jumlah' => 'required',
        //     'kondisi' => 'required',
        //     'status' => 'required'
        // ]);
   
        // if($validator->fails()){
        //     return $this->sendError('Validation Error.', $validator->errors());       
        // }
   
        // $inventaris->kode = $input['kode'];
        // $inventaris->nama_inventaris = $input['nama_inventaris'];
        // $inventaris->jumlah = $input['jumlah'];
        // $inventaris->kondisi = $input['kondisi'];
        // $inventaris->status = $input['status'];
        // $inventaris->save();
        $inventaris = Inventaris::find($id);
        $inventaris->update($request->all());
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Mengubah Data Inventaris',
        ]);
        return $this->sendResponse($inventaris, 'Inventaris updated successfully.');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventaris $inventaris, $id)
    {
        $inventaris = Inventaris::find($id);
        $inventaris->delete();
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Menghapus Data Inventaris',
        ]);
        return $this->sendResponse([], 'Inventaris deleted successfully.');
    }
}
