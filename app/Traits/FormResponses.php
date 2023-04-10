<?php  

    namespace  App\Traits;

    use Illuminate\Support\Collection;
    use Illuminate\Support\Facades\Cache;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Http\JsonResponse;

    trait FormResponses
    {
        protected function successResponse($message, $data): JsonResponse
        {
            return response()->json([
                'status' => 'success',
                'message' => $message,
                'data' => $data
            ]);
        }

        protected function errorResponse($message): JsonResponse
        {
            $data = [];
            return response()->json([
                'status' => 'failed',
                'message' =>$message,
                'data' => $data
            ]);
        }
    }


?>