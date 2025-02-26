
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LoggerService;

class LoggerController extends Controller
{
    public function logMessage(Request $request)
    {
        $logger = LoggerService::getInstance();
        $logger->log($request->message);

        return response()->json(['status' => 'Logged successfully']);
    }
}