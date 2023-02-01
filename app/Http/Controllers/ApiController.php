<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Services\ApiService;

class ApiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param ApiService $apiservice
     */
    public function __construct(ApiService $apiservice)
    {
        $this->apiservice = $apiservice;
    }

    /**
     * @return void
     */
    public function save()
    {
        try {
            $response = $this->apiservice->postData();
            echo "<pre>";
            print_r($response);
            exit;
        } catch (\Exception $e) {
            throw new HttpException(500, $e->getMessage());
        }
    }
}
