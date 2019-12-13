<?php

namespace App\Http\Controllers\Admin;

use Auth;
use PDF;
use App\User;
use App\Post;
use App\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    public function registeredit(Request $request, $id){
    	$users = User::findOrFail($id);
    	return view('admin.register-edit')->with('users',$users);
    }
    public function showuser(){
        $q = Input::get( 'q' );

        if( !empty( $q ) ) {

            $showuser = User::where('id','LIKE','%'.$q.'%')->orWhere('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->orWhere('username','LIKE','%'.$q.'%')->orWhere('phone','LIKE','%'.$q.'%')->orWhere('usertype','LIKE','%'.$q.'%')->orWhere('address','LIKE','%'.$q.'%')->orWhere('created_at','LIKE','%'.$q.'%')->get();
            if(count($showuser) > 0){
                return view('admin.userreport', ['user' => $showuser]);
            } else { 
                return redirect('/userreport')->with('status', 'No Details found. Try to search again !');
            }
        } else { 
            $showuser = User::all();
            return view('admin.userreport')->with('user', $showuser);
        }
    }
    public function showcampaign(User $user){
        $q = Input::get( 'q' );

        if( !empty( $q ) ) {
            $showcampaign = User::join('posts','posts.user_id', '=', 'users.id')
            ->where('users.name','LIKE', '%'.$q.'%')
            ->orWhere('posts.caption', 'LIKE','%'.$q.'%')
            ->orWhere('posts.description', 'LIKE','%'.$q.'%')
            ->orWhere('posts.duration', 'LIKE','%'.$q.'%') 
            ->orWhere('posts.amount', 'LIKE','%'.$q.'%')
            ->orWhere('posts.created_at', 'LIKE','%'.$q.'%')
            ->get();
            if(count($showcampaign) > 0){
                return view('admin.campaignreport', ['show' => $showcampaign]);
            } else { 
                return redirect('/campaignreport')->with('status', 'No Details found. Try to search again !');
            }
        } else { 
            $showcampaign = User::join('posts', 'posts.user_id','=', 'users.id')->get();
            return view('admin.campaignreport')->with('show', $showcampaign);
        }
    }
    public function showprofile(){
        $q = Input::get( 'q' );

        if( !empty( $q ) ) {

            $showprofile = Profile::where('id','LIKE','%'.$q.'%')->orWhere('title','LIKE','%'.$q.'%')->orWhere('description','LIKE','%'.$q.'%')->orWhere('url','LIKE','%'.$q.'%')->get();
            if(count($showprofile) > 0){
                return view('admin.profilereport', ['user' => $showprofile]);
            } else { 
                return redirect('/profilereport')->with('status', 'No Details found. Try to search again !');
            }
        } else { 
            $showprofile = Profile::Where('id', '!=', 1)->get();
            return view('admin.profilereport')->with('user', $showprofile);
        }
    }
    public function downloaduser(Request $request) {
        $show = User::all();
        $pdf = PDF::loadView('admin.pdf.userreport', compact('show'));
        
        return $pdf->download('users_report.pdf');
    }
    public function downloadcampaign(Request $request) {
        $show = Post::all();
        $pdf = PDF::loadView('admin.pdf.campaignreport', compact('show'));
        
        return $pdf->download('Campaign_report.pdf');
    }
    public function downloadprofile(Request $request) {
        $show = Profile::where('id', '!=', 1)->get();
        $pdf = PDF::loadView('admin.pdf.profiles', compact('show'));
        
        return $pdf->download('Profiles_report.pdf');
    }
    public function admin(Request $request, $id){
        $admin = User::where('id', $id)->get();
        return view('admin.adminprofile')->with('admin',$admin);
    }
    public function adminupdate(Request $request, $id){
        $users = User::find($id);
        $users->username = $request->input('username');
        $users->email = $request->input('email');
        $users->name = $request->input('name');
        $users->usertype = $request->input('role');
        $users->address = $request->input('address');
        $users->phone = $request->input('phone');
        $users->update();
        
        
        return redirect('/adminprofile/'.Auth::user()->id)->with('status', 'The Data Has Been Updated');
    }
    
    public function registerupdate(Request $request, $id)
    {
    	$users = User::find($id);
    	$users->name = $request->input('username');
    	$users->usertype = $request->input('usertype');
    	$users->update();

    	return redirect('/searchuser')->with('status', 'The Data Has Been Updated');
    }
    
    public function registerdelete($user_id)
    {
    	$users = Profile::$user->find($user_id);
    	$users->delete();
    	return redirect('/searchuser')->with('status', 'The Data Has Been deleted');
    }

    public function campaigns(){
        $q = Input::get( 'q' );

        if( !empty( $q ) ) {

            $campaign = Post::where('caption','LIKE','%'.$q.'%')->orWhere('description','LIKE','%'.$q.'%')->orWhere('duration','LIKE','%'.$q.'%')->orWhere('amount','LIKE','%'.$q.'%')->get();
            if(count($campaign) > 0){
                return view('admin.campaigns', ['campaigns' => $campaign]);
            } else { 
                return redirect('/admin_campaigns')->with('status', 'No Details found. Try to search again !');
            }
        } else { 
            $campaign = Post::all();
            return view('admin.campaigns', ['campaigns' => $campaign]);
        }
    }

    public function campaigndelete($id){
        $campaign = Post::find($id);
        $campaign->delete();
        return redirect('/admin_campaigns')->with('status', 'The Data Has Been Deleted!.');
    }

    public function search(Request $request)
    {
        $q = Input::get( 'q' );

        if( !empty( $q ) ) {

            $user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->orWhere('phone','LIKE','%'.$q.'%')->orWhere('usertype','LIKE','%'.$q.'%')->get();
            if(count($user) > 0){
                return view('admin.register', ['users' => $user]);
            } else { 
                return redirect('/searchuser')->with('status', 'No Details found. Try to search again !');
            }
        } else { 
            $user = User::all();
            return view('admin.register', ['users' => $user]);
        }
    }
    public function count(){
        $usercount = User::count();
        $postcount = Post::count();
        $profilecount = Profile::count();
        return view('admin.dashboard',compact('usercount', 'postcount', 'profilecount'));
    }
    
}

