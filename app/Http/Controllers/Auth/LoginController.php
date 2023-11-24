<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Auths;
use JKD\SSO\Client\Provider\Keycloak;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect ke SSO BPS saat menuju form login
     * Apabila sudah login SSO, akan terautentifikasi via email
     */
    public function showLoginForm(Request $request)
    {
        $provider = new Keycloak([
            'authServerUrl'         => 'https://sso.bps.go.id',
            'realm'                 => 'pegawai-bps',
            'clientId'              => env('KEYCLOAK_CLIENT_ID'),
            'clientSecret'          => env('KEYCLOAK_CLIENT_SECRET'),
            'redirectUri'           => env('KEYCLOAK_REDIRECT_URI'),
        ]);

        if (!isset($_GET['code'])) {

            // Untuk mendapatkan authorization code
            $authUrl = $provider->getAuthorizationUrl();
            $request->session()->put('oauth2state', $provider->getState());
            header('Location: '.$authUrl);
            exit;

        // Mengecek state yang disimpan saat ini untuk memitigasi serangan CSRF
        } elseif (empty($_GET['state'])
//            || ($_GET['state'] !== $request->session()->get('oauth2state'))
        ) {

            $request->session()->forget('oauth2state');
            exit('Invalid state');

        } else {

            try {
                $token = $provider->getAccessToken('authorization_code', [
                    'code' => $_GET['code']
                ]);
            } catch (Exception $e) {
                exit('Gagal mendapatkan akses token : '.$e->getMessage());
            }

            // Setelah mendapatkan token, ambil data email pengguna untuk login ke aplikasi
            try {

                $user = $provider->getResourceOwner($token);
				
                $email = $user->getEmail();
                $id = User::where('email', $email)->first();

                if (!empty($id)) {
                    $id = $id->id;
                } else {
                    $newUser = User::create([
                        'name' => $user->getName(),
                        'email' => $user->getEmail(),
                    ]);
                    $id = $newUser->id;
                }

                // Login dengan menggunakan id pengguna dari record di database aplikasi
                if (Auths::loginUsingId($id)) {
                    return redirect()->intended('/');
                } else {
                    return redirect('/');
                }


            } catch (Exception $e) {
                exit('Gagal login: '.$e->getMessage());
            }

        }

    }
}
