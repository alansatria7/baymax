<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //  public function edit()
    // {
    //     // Ambil data profil dari sesi atau cache
    //     $user = session('user_profile') ?? [
    //         'name' => 'John Doe',
    //         'job' => 'Web Developer',
    //         'location' => 'City, Country',
    //         'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac lorem sed arcu fermentum cursus.',
    //     ];

    //     return view('edit-profile', compact('user'));
    // }

    // public function update(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'job' => 'required|string|max:255',
    //         'location' => 'nullable|string|max:255',
    //         'bio' => 'nullable|string',
    //     ]);

    //     // Simpan data profil ke sesi atau cache
    //     session(['user_profile' => $request->all()]);

    //     return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
    // }



    public function index()
    {
        $user = Auth::user();
        return view('profile.profile', compact('user'));
    }
    
    //edit profile (GET)
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('profile.edit-profile', compact('user'));
    }
    
    
        public function update(Request $request, $id)
        {
            $profile = User::findOrFail($id);
    
            $validatedData = $request->validate([
                'name' => 'required|string',
                'email' => 'email|unique:users,email' . $profile->id,
                'alamat' => 'required|string',
                'no_hp' => 'string|max:15',
                'bio' => 'nullable|string',

                // 'bio' => 'string'
            ]);
    
         
            try {
                $profile->update($validatedData);
            } catch (\Throwable $th) {
                return redirect()->back()->withErrors($th->getMessage())->withInput();
             }
            
            return redirect()->route('profile')->with('success', 'Profile berhasil diperbarui.');
        }
    
    public function show($id)
    {
        $profile = User::findOrFail($id);
        return response()->json($profile);
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'email' => 'email|unique:profiles,email',
            'no_hp' => 'string|max:15',
            'bio' => 'nullable|string'
        ]);
    
        $profile = User::create($validatedData);
    
        return response()->json(['message' => 'Profil berhasil ditambahkan']);
    }
    
    
    
    public function destroy($id)
    {
        $profile = User::findOrFail($id);
        $profile->delete();
    
        return response()->json(['message' => 'Profil berhasil dihapus']);
    }
    
}
