<?php

namespace App\Http\Controllers\Admin\Membership;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;

class MembershipController extends Controller
{
    public function showMembershipForm() 
    {
        $category = DB::table('category')
        	->where('status', 1)
        	->get();

        return view('admin.membership.new_membership', ['category' => $category]);
    }

    public function addMembership(Request $request)
    {
    	$this->validate($request, [
            'cate_id' => 'required',
            'membership_plan_name' => 'required',
            'fees' => 'required|numeric',
            'period' => 'required|numeric',
        ]);

        DB::table('membership')
            ->insert([ 
                'category_id' => $request->input('cate_id'),
                'membership_name' => $request->input('membership_plan_name'),
                'fees' => $request->input('fees'),
                'period' => $request->input('period'),
                'created_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
            ]);

        return redirect()->back()->with('msg', 'Membership has been added successfully');
    }

    public function membershipList() 
    {
        $membership_list = DB::table('membership')
        	->leftJoin('category', 'membership.category_id', '=', 'category.id')
        	->select('membership.*', 'category.category')
        	->get();

        return view('admin.membership.membership_list', ['membership_list' => $membership_list]);
    }

    public function showEditMembershipForm($membership_id) 
    {
        $membership_record = DB::table('membership')
        	->where('id', $membership_id)
        	->first();

        $category = DB::table('category')
        	->where('status', 1)
        	->get();

        return view('admin.membership.edit_membership', ['membership_record' => $membership_record, 'category' => $category]);
    }

    public function updateMembership(Request $request, $membership_id) 
    {
        $this->validate($request, [
            'cate_id' => 'required',
            'membership_plan_name' => 'required',
            'fees' => 'required|numeric',
            'period' => 'required|numeric',
        ]);

        DB::table('membership')
        	->where('id', $membership_id)
            ->update([ 
                'category_id' => $request->input('cate_id'),
                'membership_name' => $request->input('membership_plan_name'),
                'fees' => $request->input('fees'),
                'period' => $request->input('period'),
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
            ]);;

        return redirect()->back()->with('msg', 'Membership has been updated successfully');
    }
}
