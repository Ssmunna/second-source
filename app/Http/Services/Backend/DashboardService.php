<?php
namespace App\Http\Services\Backend;
use App\Traits\Response;

class DashboardService
{
    use Response;

    /**
     * @param array $query
     * @return array
     */
    public function Home (array $query): array
    {
        try {
            return $this->response( )->success('Login Successfully');
        } catch (\Exception $exception) {
            return $this->response( )->error($exception->getMessage());
        }
    }
}
