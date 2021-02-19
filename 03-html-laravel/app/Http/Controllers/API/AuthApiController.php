<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use App\Models\Aktivitas;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;
use Hash;
   
class AuthApiController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'role' => 'required',
            'name' => 'required|min:3|max:35',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:7',
            'confirmation_password' => 'required|same:password',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->name;
   
        return $this->sendResponse($success, 'User register successfully.');
    }
   
    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            $success['name'] =  $user->name;
            Aktivitas::create([
                'user_id'=> auth()->user()->id,
                'aktivitas' => 'Login SIMALAB',
            ]);
            return $this->sendResponse($success, 'User login successfully.');
        } 
        else{ 
            return $this->sendError('Unauthorised.', ['error'=>'Email atau password tidak valid']);
        } 
    }

    public function logout(Request $request)
    {
        $logout = $request->user()->token()->revoke();
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Logout SIMALAB',
        ]);   
        if($logout){
            return response()->json([
                'message' => 'Successfully logged out'
            ]);
        }
    }
    public function change(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:7|confirmed',
            'password_confirmation' => 'required',

        ]);

        $updatePassword = DB::table('users')
                            ->where(['email' => $request->email])
                            ->first();
            
         if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        } 

          $user = User::where('email', $request->email)
                      ->update(['password' => Hash::make($request->password)]);

        return $this->sendResponse($user, 'Change password successfully.');

    }
}