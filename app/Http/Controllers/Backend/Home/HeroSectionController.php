<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use App\Http\Services\Backend\Home\HeroSectionService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class HeroSectionController extends Controller
{
    public function __construct(private readonly HeroSectionService $heroSectionService){}

    /**
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function page(Request $request): Response|RedirectResponse
    {
        $response = $this->heroSectionService->Page($request->query());
        return $response['success'] ?
            Inertia::render('backend/home/hero_section/Page', $response) :
            back()->withErrors($response['message']);
    }


    /**
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function createOrUpdate(Request $request): Response|RedirectResponse
    {
        $response = $this->heroSectionService->createOrUpdate($request->all());
        return $response['success'] ?
            back()->with($response):
            back()->withErrors($response['message']);
    }
}
