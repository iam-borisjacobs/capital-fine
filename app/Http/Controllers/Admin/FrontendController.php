<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\Faq;
use App\Models\Images;
use App\Models\Testimony;
use App\Models\Content;
use App\Models\TermsPrivacy;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class FrontendController extends Controller
{
    public function manageImages()
    {
        $images = Images::orderBy('id', 'asc')->get();
        return view('admin.Settings.FrontendSettings.manage_images', [
            'title' => 'Manage Frontend Images & Banners',
            'images' => $images,
        ]);
    }

    public function savefaq(Request $request){
        $String = $this->RandomStringGenerator(6);
        $faq = new Faq();
        $faq->ref_key = $String;
        $faq->question = $request['question'];
        $faq->answer = $request['answer'];
        $faq->save();
        return redirect()->back()->with('success', 'Faq Added Successfully!');
    }
  
    public function savetestimony(Request $request){
        $String = $this->RandomStringGenerator(6);
        $tes = new Testimony();
        $tes->name = $request['testifier'];
        $tes->ref_key = $String;
        $tes->position = $request['position'];
        $tes->what_is_said = $request['said'];
        $tes->picture = $request['picture'];
        $tes->save();
        return redirect()->back()->with('success', 'Testimony Added Successfully!');
    }
  
    public function saveimg(Request $request){
        $String = $this->RandomStringGenerator(6);
  
        $this->validate($request, [
          'image' => 'required|mimes:jpg,jpeg,png,webp,svg|image',
        ]);
        
        $path = '';
        if($request->hasfile('image'))
        {
            $filef = $request->file('image');
            $path = $filef->store('photos', 'public');
            
            // Also copy into public temp asset directory
            $assetDest = public_path('temp/custom/assets/img/' . basename($path));
            if (!File::isDirectory(public_path('temp/custom/assets/img'))) {
                File::makeDirectory(public_path('temp/custom/assets/img'), 0777, true, true);
            }
            File::copy(storage_path('app/public/' . $path), $assetDest);
        }
  
        $img = new Images();
        $img->title = $request['img_title'];
        $img->ref_key = $String;
        $img->description = $request['img_desc'];
        $img->img_path = $path;
        $img->save();
        return redirect()->back()->with('success', 'Image Added Successfully!');
    }
  
    public function savecontents(Request $request){
        $String = $this->RandomStringGenerator(6);
        $cont = new Content();
        $cont->title = $request['title'];
        $cont->ref_key = $String;
        $cont->description = $request['content'];
        $cont->save();
        return redirect()->back()->with('success', 'Contents Added Successfully!');
    }
  
    public function updatefaq(Request $request){
        Faq::where('id', $request['id'])
        ->update([
            'question' => $request['question'],
            'answer' => $request['answer'],
        ]);
        return redirect()->back()->with('success', 'Faq Update Successful!');
    }
  
    public function updatetestimony(Request $request){
        Testimony::where('id', $request['id'])
        ->update([
            'name' => $request['testifier'],
            'position' => $request['position'],
            'what_is_said' => $request['said'],
            'picture' => $request['picture'],
        ]);
        return redirect()->back()->with('success', 'Testimony Update Successful!');
    }
  
    public function updatecontents(Request $request){
        Content::where('id', $request['id'])
        ->update([
            'title' => $request['title'],
            'description' => $request['content'],
        ]);
        return redirect()->back()->with('success', 'Content Update Successful!');
    }
  
    public function updateimg(Request $request){
        $this->validate($request, [
            'id' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,png,webp,svg|image',
        ]);
    
        $imgs = Images::where('id', '=', $request->id)->first();
        if (!$imgs) {
            return redirect()->back()->with('message', 'Image record not found!');
        }

        $path = $imgs->img_path;

        if ($request->hasfile('image')) {
            $filef = $request->file('image');
            
            // Delete old file if exists and not default
            if ($imgs->img_path && Storage::disk('public')->exists($imgs->img_path)) {
                Storage::disk('public')->delete($imgs->img_path);
            }
            
            $path = $filef->store('photos', 'public');
            
            // Also synchronize into public temp asset folder
            $assetDest = public_path('temp/custom/assets/img/' . basename($path));
            if (!File::isDirectory(public_path('temp/custom/assets/img'))) {
                File::makeDirectory(public_path('temp/custom/assets/img'), 0777, true, true);
            }
            File::copy(storage_path('app/public/' . $path), $assetDest);
        }

        Images::where('id', $request['id'])
        ->update([
            'title' => $request['img_title'] ?? $imgs->title,
            'description' => $request['img_desc'] ?? $imgs->description,
            'img_path' => $path,
        ]);
        return redirect()->back()->with('success', 'Image and details updated successfully!');
    }
  
    public function delfaq($id){
        Faq::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Faq Successfully Deleted');
    }
  
    public function deltest($id){
        Testimony::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Testimonial Successfully Deleted');
    }

    public function delimg($id){
        $img = Images::find($id);
        if ($img) {
            if ($img->img_path && Storage::disk('public')->exists($img->img_path)) {
                Storage::disk('public')->delete($img->img_path);
            }
            $img->delete();
            return redirect()->back()->with('success', 'Image successfully removed!');
        }
        return redirect()->back()->with('message', 'Image not found.');
    }

    // for front end content management
    function RandomStringGenerator($n) 
    { 
        $generated_string = ""; 
        $domain = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"; 
        $len = strlen($domain); 
        for ($i = 0; $i < $n; $i++) 
        { 
            $index = rand(0, $len - 1); 
            $generated_string = $generated_string . $domain[$index]; 
        } 
        return $generated_string; 
    } 

    public function termspolicy(){
        return view('admin.Settings.FrontendSettings.privacy', [
            'title' => "Privacy Policy",
            'terms' => TermsPrivacy::find(1),
        ]);
    }

    public function savetermspolicy(Request $request){
        $terms = TermsPrivacy::find(1);
        $terms->description = $request->termsprivacy;
        $terms->useterms = $request->terms;
        $terms->save();
        return redirect()->back()
        ->with('success', 'Terms and Privacy Policy Updated Successfully!');
    }
}
