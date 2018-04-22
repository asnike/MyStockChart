<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'create', 'checkNaver']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'name'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:users',
            'password'=>'required|string|min:6|confirmed',
        ]);
    }
    public function create(Request $request){

        $validator = $this->validator($request->all());
        if($validator->fails()){
            return response()->json(['errors'=>$validator->errors()]);
        }

        return User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
    }
    public function checkNaver(Request $request){
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {

            //return response()->json(['error' => 'Unauthorized'], 401);
            $user = User::create([
                'name'=>'Naver_User_'.Carbon::now()->timestamp,
                'naver_uid'=>$request->password,
                'naver_nick'=>$request->naver_nick,
                'naver_profile_img'=>$request->naver_profile_img,
                'email'=>$request->email,
                'password'=>bcrypt($request->password)
            ]);
            return response()->json([
                'result'=>[
                    'code'=>200,
                    'user'=>$user
                ]
            ]);
        }
        $respond = $this->respondWithToken($token);
        return response()->json([
            'result'=>[
                'code'=>200,
                'token'=>$respond,
            ]
        ]);
    }
}
