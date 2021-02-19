<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Forum;
use App\Models\Aktivitas;
use Validator;
use App\Http\Resources\Forum as ForumResource;
   
class ForumApiController extends BaseController
{
    public function index()
    {
        $forum = Forum::all();
    
        return $this->sendResponse(ForumResource::collection($forum), 'Forum retrieved successfully.');
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
            'judul' => 'required',
            'slug' => 'required',
            'konten' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $forum = Forum::create($input);
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Menambah Data Forum',
        ]);
        return $this->sendCorrect(new ForumResource($forum), 'Forum created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $forum = Forum::find($id);
  
        if (is_null($forum)) {
            return $this->sendError('Inventaris not found.');
        }
   
        return $this->sendResponse(new ForumResource($forum), 'Forum retrieved successfully.');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forum $forum, $id)
    {

        $forum = Forum::find($id);
        $forum->update($request->all());
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Mengubah Data Forum',
        ]);
        return $this->sendResponse($forum, 'Forum updated successfully.');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forum, $id)
    {
        $forum = Forum::find($id);
        $forum->delete();
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Menghapus Data Inventaris',
        ]);
        return $this->sendResponse([], 'Forum deleted successfully.');
    }
}
