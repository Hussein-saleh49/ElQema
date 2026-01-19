<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRegisterRequest;
use App\Http\Requests\IndividualRegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view("front.auth.create");
    }

    public function store(Request $request)
    {
        $formType = $request->input('form', 'individual');

        try {
            if ($formType === 'individual') {
                $data = app(IndividualRegisterRequest::class)->validated();

                $dob = $data['dob_year'] . '-' . $data['dob_month'] . '-' . $data['dob_day'];

                $user = User::create([
                    'type'       => 'individual',
                    'first_name' => $data['first_name'],
                    'last_name'  => $data['last_name'],
                    'email'      => $data['email'],
                    'password'   => Hash::make($data['password']),
                    'dob'        => $dob,
                    'gender'     => $data['gender'] ?? null,
                    'phone'      => $data['phone'] ?? null,
                ]);

            } else {
                $data = app(CompanyRegisterRequest::class)->validated();

                $user = User::create([
                    'type'           => 'company',
                    'company_name'   => $data['company_name'],
                    'job_title'      => $data['job_title'] ?? null,
                    'contact_person' => $data['contact_person'],
                    'phone'          => $data['phone'] ?? null,
                    'email'          => $data['email'],
                    'password'       => Hash::make($data['password']),
                ]);
            }

            event(new Registered($user));
            Auth::login($user);

            return redirect()->route('front.index');

        } catch (\Illuminate\Validation\ValidationException $e) {
          
            return redirect()->back()
                ->withErrors($e->validator, $formType)
                ->withInput();

        } catch (\Exception $e) {
           
            Log::error('Registration error: ' . $e->getMessage());

            return redirect()->back()
                ->with('error', 'Something went wrong. Please try again.')
                ->withInput();
        }
    }
}
