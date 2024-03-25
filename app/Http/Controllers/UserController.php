<?php

namespace App\Http\Controllers;

use App\Models\list_of_users;
use Illuminate\Http\Request;



class UserController extends Controller
{
    public function index(){
        $users = list_of_users::all();
        return view('/dashboard', ['users'=> $users]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){

        $request->validate([
            'user_name' => 'required',
            'user_phone' => ['required', 'regex:/^0\d{9,10}$/', 'max:11'],
            'user_email' => ['required', 'email', 'regex:/^(?!.*@example\.com$).*/'],
            'user_address' => 'required',
            'user_image' => 'required|image'
        ], [
            'user_name.required' => 'The user name field is required.',
            'user_phone.required' => 'The user phone field is required.',
            'user_phone.regex' => 'The user phone must be a valid 11-digit number starting with 0.',
            'user_email.required' => 'The user email field is required.',
            'user_email.email' => 'The user email must be a valid email address.',
            'user_email.regex' => 'The user email must belong to @example.com domain.',
            'user_address.required' => 'The user address field is required.',
            'user_image.required' => 'An image file is required.',
            'user_image.image' => 'The file must be an image.',
        ]);
        
        $fileName = time() . '.' . $request->file('user_image')->getClientOriginalExtension();
        $path = $request->file('user_image')->storeAs('images', $fileName, 'public');
        $user_image_path = '/storage/' . $path;
        
        $newData = list_of_users::create([
            'user_name' => $request->input('user_name'),
            'user_phone' => $request->input('user_phone'),
            'user_email' => $request->input('user_email'),
            'user_address' => $request->input('user_address'),
            'user_image' => $user_image_path,
        ]);
        
        return redirect(route('dashboard'))->with('success', 'User created successfully');
    }
    
    public function view(list_of_users $users){
        return view('view', ['users' => $users]);
        
    }
    
    
    

    
    public function edit(list_of_users $users){
        return view('edit', ['users' => $users]);
    }

    
    public function update(Request $request, $userId)
{
    $request->validate([
        'user_name' => 'required',
        'user_phone' => ['required', 'regex:/^0\d{9,10}$/', 'max:11'],
        'user_email' => ['required', 'email', 'regex:/^(?!.*@example\.com$).*/'],
        'user_address' => 'required',
        'user_image' => 'image'
    ], [
        'user_name.required' => 'The user name field is required.',
        'user_phone.required' => 'The user phone field is required.',
        'user_phone.regex' => 'The user phone must be a valid 11-digit number starting with 0.',
        'user_email.required' => 'The user email field is required.',
        'user_email.email' => 'The user email must be a valid email address.',
        'user_email.regex' => 'User emails from example.com are not allowed.',
        'user_address.required' => 'The user address field is required.',
        'user_image.image' => 'The file must be an image.',
    ]);

    $user = list_of_users::findOrFail($userId);

    $data = [
        'user_name' => $request->input('user_name'),
        'user_phone' => $request->input('user_phone'),
        'user_email' => $request->input('user_email'),
        'user_address' => $request->input('user_address'),
    ];

    if ($request->hasFile('user_image')) {
        $fileName = time() . '.' . $request->file('user_image')->getClientOriginalExtension();
        $path = $request->file('user_image')->storeAs('images', $fileName, 'public');
        $user_image_path = '/storage/' . $path;
        $data['user_image'] = $user_image_path;
    }

    $user->update($data);

    return redirect(route('dashboard'))->with('success', 'User updated successfully');
}



    public function delete(list_of_users $users){
        $users->delete();
        return redirect(route('dashboard'));
    }


    // function view_pdf(){
    //     $mpdf = new \mPDF();
    //     //$mpdf = new \Mpdf\Mpdf();
    //     $mpdf->WriteHTML('<h1>Hello world!</h1>');
    //     $mpdf->Output();
    // }
}
