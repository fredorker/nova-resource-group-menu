<?php

namespace SaintSystems\Nova\ResourceGroupMenu\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Laravel\Nova\Nova;

class NovaResourceGroupController extends Controller
{

    public function index (Request $request)
    {
        $resourceGroupMenu = collect(Nova::availableTools($request))->first(function ($tool) {
            return class_basename($tool) == 'ResourceGroupMenu';
        });

        return $resourceGroupMenu->jsonSerialize();
    }

}
