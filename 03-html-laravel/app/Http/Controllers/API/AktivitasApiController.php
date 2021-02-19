<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Aktivitas;
use App\Http\Resources\Activity as ActivityResource;

class AktivitasApiController extends BaseController
{
    public function index(Request $request)
    {   
    $data_aktivitas = \App\Models\Aktivitas::all();
    
    return $this->sendResponse(ActivityResource::collection($data_aktivitas), 'Aktivitas retrieved successfully.');
    }
    public function show($id)
    {
        $data_aktivitas = Aktivitas::find($id);
  
        if (is_null($data_aktivitas)) {
            return $this->sendError('Aktivitas not found.');
        }
   
        return $this->sendResponse(new ActivityResource($data_aktivitas), 'Aktivitas retrieved successfully.');
    }
    public function destroy(Aktivitas $data_aktivitas, $id)
    {
        $data_aktivitas = \App\Models\Aktivitas::find($id);
        if (is_null($data_aktivitas)) {
            return $this->sendError('Aktivitas not found.');
        }
        $data_aktivitas->delete();
        
        return $this->sendResponse([], 'Aktivitas deleted successfully.');
    }

}
