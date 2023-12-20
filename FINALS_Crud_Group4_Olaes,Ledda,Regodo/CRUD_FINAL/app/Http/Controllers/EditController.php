<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Work;


class EditController extends Controller
{
    public function edit()
    {
        $user = User::find(1);
        $works = Work::all();

        return view('edit', [
            'user' => $user,
            'works' => $works
        ]);
    }

    public function updateAbout(Request $request)
    {
        $filename = '';
        $user = User::first();

        if ($request->hasFile('profile_picture')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/' . time() . '.' . $request->profile_picture->extension();

            $request->profile_picture->move(public_path('/assets/'), $filename);
            $user->image = $filename;
        }

        $user->profile_name = $request->profile_name;
        $user->about = $request->about;
        $user->save();
        return redirect()
            ->route('edit')
            ->with('success', "Profile Picture Updated Successfully!");
    }


    public function updateWork(Request $request)
    {
        $filename = '';

        if ($request->hasFile('image_path')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/' . time() . '.' . $request->image_path->extension();
            $request->image_path->move(public_path('/assets/'), $filename);
        }

        // Check if the file was uploaded successfully before creating a new record
        if ($filename) {
            $work = Work::create([
                'image_path' => $filename  // Use the correct variable name here
            ]);

            return redirect()
                ->route('edit')
                ->with('success', "Profile Picture Updated Successfully!");
        } else {
            // Handle the case where the file was not uploaded successfully
            return redirect()
                ->route('edit')
                ->with('error', "Error uploading the image. Please try again.");
        }
    }


    public function deleteWork($id)
    {
        $work = Work::find($id);
        $work->delete();

        return redirect()
            ->route('edit')
            ->with('success', "Deleted Successfully!");
    }
}
