<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TestRequest;
use App\Repositories\TestRepositoryInterface;

class TestController extends Controller
{
    /**
     * The interface repository instance.
     */
    protected $test;

    /**
     * Create a new controller instance.
     *
     * @param  TestRepositoryInterFace
     * @return void
     */
    public function __construct(TestRepositoryInterface $test)
    {
        $this->test = $test;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = $this->test->all([]);

        return view('admin.tests.index', compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestRequest $request)
    {
        $test = $this->test->store($request->all());
        if (!$test) {
            return back()->with('error', __('Something went wrong!'));
        }

        return redirect()->route('tests.index')->with('success', __('Create successfully!'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test = $this->test->get([], $id);

        return view('admin.tests.show', compact('test'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = $this->test->get([], $id);
        if (!$test) {
            return back()->with('error', __('Something went wrong!'));
        }

        return view('admin.tests.edit', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $test = $this->test->update($request->all(), $id);
        if (!$test) {
            return back()->with('error', __('Something went wrong!'));
        }

        return redirect()->back()->with('success', __('Update successfully!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->test->delete($id);
        
        return redirect()->back()->with('success', __('Delete successfully!'));
    }

    /**
     * Update the content test.
     *
     * @param  \Illuminate\Http\TestRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateContent(TestRequest $request, $id)
    {
        $test = $this->test->updateContent($request->all(), $id);
        if (!$test) {
            return back()->with('error', __('Something went wrong!'));
        }

        return redirect()->back()->with('success', __('Update successfully!'));
    }
}
