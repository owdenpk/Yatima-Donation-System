<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;

class OrganizationController extends Controller
{

   //  public function receiver()
   //  {
   //     $user = User::where('usertype', 'organization')->get();
   //     return view('admin/organization.organizations')->with('user',$user);
   // }
   public function orgupdate(Request $request, $id)
   {
    $users = User::find($id);
    $users->name = $request->input('brandname');
    $users->phone = $request->input('phone');
    $users->regno = $request->input('regno');
    $users->lat = $request->input('lat');
    $users->long = $request->input('long');
    $users->description = $request->input('descr');
    $users->email = $request->input('address');
    $users->email = $request->input('website');
    $users->email = $request->input('email');
    $users->usertype = $request->input('usertype');
    $users->update();

    return redirect('/searchorg')->with('status', 'The Data Has Been Updated');
}
public function orgedit(Request $request, $id){
    $users = User::findOrFail($id);
    return view('admin/organization.edit-organization')->with('receiver',$users);
}
public function orgdelete($id)
{
    $users = User::find($id);
    $users->delete();
    return redirect('/searchorg')->with('status', 'The Data Has Been deleted');
}
public function orgadd(Request $request)
{
    $receiver = new User;
    $receiver->name = $request->input('brandname');
    $receiver->phone = $request->input('phone');
    $receiver->regno = $request->input('regno');
    $receiver->lat = $request->input('lat');
    $receiver->long = $request->input('long');
    $receiver->description = $request->input('descr');
    $receiver->email = $request->input('email');
    $receiver->password = $request->input('password');
    $receiver->save();

    return redirect('/searchorg')->with('status', 'The New "Organization" has been Added');
}
public function search(Request $request)
{
    $q1 = Input::get( 'q1' );

    if( !empty( $q1 ) ) {

        $user1 = User::where('name','LIKE','%'.$q1.'%')->orWhere('email','LIKE','%'.$q1.'%')->orWhere('phone','LIKE','%'.$q1.'%')->orWhere('usertype','LIKE','%'.$q1.'%')->orWhere('regno','LIKE','%'.$q1.'%')->orWhere('lat','LIKE','%'.$q1.'%')->orWhere('long','LIKE','%'.$q1.'%')->get();
        if(count($user1) > 0){
            return view('admin.organization.organizations')->with('user',$user1);
        } else { 
            return redirect('/searchorg')->withStatus('No Details found. Try to search again !');
        }
    } else { 
        $user1 = User::where('usertype', 'organization')->get();
        return view('admin/organization.organizations')->with('user',$user1);
    }
}
}
