<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Page;
use App\Models\Policy;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('frontend.home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function aboutUs()
    {
        return view('frontend.about-us');
    }


    // donate

    public function donate()
    {
        return view('frontend.donate');
    }

    //services

    public function paliativeCareNetwork()
    {
        $faqs = Faq::all();
        return view('frontend.paliative', [
            'faqs' => $faqs
        ]);
    }

    //volunteer

    public function volunteer()
    {
        return view('frontend.volunteer');
    }

    //changing-lives

    public function changingLives()
    {
        $policies = Policy::all();
        return view('frontend.changing-lives', [
            'policies' => $policies
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
}
