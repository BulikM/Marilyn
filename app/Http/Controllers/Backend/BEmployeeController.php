<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeesRequest;
use App\Models\Day;
use App\Models\Employee;
use App\Models\Employee_Adress;
use App\Models\Month;
use App\Models\NewsletterInfo;
use App\Models\Preference;
use App\Models\Salutation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BEmployeeController extends Controller
{

    public function __construct()
    {
        $this->middleware(["auth","employee"]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = User::where('is_employee','=' ,'1')
            ->with('salutation')
            ->orderByDesc("id")
            ->withTrashed()
            ->paginate(10);

        return view("backend.employee.index", compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $salutations = Salutation::all();

        return view(
            "backend.employee.create",
            compact("salutations"
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeesRequest $request)
    {
        $employee = new User();
        $employee->salutation_id = $request->salutation_id;
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->birhtdate = $request->birhdate;
        $employee->phone = $request->phone;
        $employee->mobile_phone = $request->mobile_phone;
        $employee->email = $request->email;
        $employee->password = Hash::make($request->password);
        $employee->is_active = '1';
        $employee->is_employee = '1';
        $employee->birthdate = $request->month;
        $employee->save();
        return redirect()
            ->route("employee.index")
            ->with([
                "alert" => [
                    "message" => "Employee added successfully",
                    "type" => "success",
                ],
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = User::findOrFail($id);

        $salutations = Salutation::all();


        return view(
            "backend.employee.edit",
            compact(
                "employee",

                "salutations"
            ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = User::findOrFail($id);
        if(trim($request->password) == ''){
            $input = $request->except('password');
        } else {
            $input = $request->all();
            $input['password'] = Hash::make($request['password']);
        }
        $employee->update($input);
        return redirect('dashboard/employees')
            ->with([
            "alert" => [
                "message" => "Updated successfully",
                "type" => "primary",
            ],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('employee.index')->with(["alert" => ["message" => "Record removed", "type" => "danger"]]);

    }
    public function restore($id)
    {
        User::onlyTrashed()
            ->where("id", $id)
            ->restore();
        return redirect()
            ->route("customers.index")
            ->with(["alert" => ["message" => "Record restored", "type" => "primary"]]);
    }

}
