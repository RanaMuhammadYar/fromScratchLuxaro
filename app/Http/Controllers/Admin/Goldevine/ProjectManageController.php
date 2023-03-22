<?php

namespace App\Http\Controllers\Admin\Goldevine;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Goldevine\GoldevineOrder;
use App\Models\Admin\Goldevine\Project;
use App\Models\Admin\Goldevine\ProjectBenefit;
use Carbon\Carbon;

class ProjectManageController extends Controller
{
    public function projectDetail($id, $slug)
    {
        $project = Project::with('projectBenefits')->where('id', $id)->where('status', 'Active')->first();
        $futureDate = Carbon::create($project->end_date);
        $currentDate = Carbon::now();
        $totalDaysLeft = $currentDate->diffInDays($futureDate);
        $randdomprojects = Project::where('id', '!=', $id)->where('status', 'Active')->inRandomOrder()->limit(15)->get();
        return view('frontend.all-page.goldevine.projectdetail', compact('project', 'totalDaysLeft', 'randdomprojects'));
    }

    public function projectcheckout($id)
    {
        $projectBenefit = ProjectBenefit::with('project', 'user')->find($id);
        // dd($projectBenefit);
        return view('frontend.all-page.cart.checkout', compact('projectBenefit'));
    }

    public function projectcheckoutstore(Request $request)
    {
        // return $request->all();

        $goldevineorder = new GoldevineOrder();
        $goldevineorder->benefit_id = $request->benefit_id;
        $goldevineorder->user_id = $request->user_id;
        $goldevineorder->total_price = $request->total;
        $goldevineorder->quantity = $request->quantity;
        $goldevineorder->project_id = $request->project_id;
        $goldevineorder->order_status = 'Pending';
        $goldevineorder->payment_status = 'Pending';
        $goldevineorder->payment_method = 'Cash On Delivery';
        $goldevineorder->user_id = auth()->user()->id;
        $goldevineorder->save();
        return redirect()->route('home')->with('success', 'Order Placed Successfully');
    }
}
