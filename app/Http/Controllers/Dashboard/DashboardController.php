<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Contracts\Support\Renderable;

class DashboardController extends Controller
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * Class __contruct
     */
    public function __construct()
    {
        $this->client = new Client([
            'timeout'   => 10,
            'verify'    => false
        ]);
    }

    /**
     * Show the application index page
     *
     * @return Renderable
     */
    public function index()
    {
        return view('dashboard.index.index');
    }
}
