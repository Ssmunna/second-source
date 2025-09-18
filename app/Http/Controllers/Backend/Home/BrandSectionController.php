<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Home\Hero\UpdateRequest;
use App\Http\Services\Backend\Home\BrandSectionService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class BrandSectionController extends Controller
{
    public function __construct(private readonly BrandSectionService $brandSectionService){}

    /**
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function page(Request $request): Response|RedirectResponse
    {
        $response = $this->handleSession( $this->brandSectionService->Page($request->query()));
        return $response['success'] ?
            Inertia::render('backend/home/brand_section/Page', $response) :
            back()->withErrors($response['message']);
    }


    /**
     * @param UpdateRequest $request
     * @return RedirectResponse|Response
     */
    public function createOrUpdate(UpdateRequest $request): Response|RedirectResponse
    {
        $response = $this->brandSectionService->createOrUpdate( $request->all());
        return $response['success'] ?
            back()->with($response):
            back()->withErrors($response['message']);
    }
}
