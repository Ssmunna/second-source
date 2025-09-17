<?php
namespace App\Http\Services\Backend\Home;
use App\Models\HeroSection;
use App\Traits\Response;

class HeroSectionService
{
    use Response;

    /**
     * @param array $query
     * @return array
     */
    public function Page(array $query): array
    {
        $content = HeroSection::where('page', HOME_PAGE)->first();

        return $this->response(['content' => $content])->success();
    }

    /**
     * @param array $payload
     * @return array
     */
    public function createOrUpdate (array $payload): array
    {
        try {
            HeroSection::updateOrCreated( $this->_formateUpdatedData( $payload));

            return $this->response( )->success('Hero Section Updated Successfully');
        } catch (\Exception $exception) {
            return $this->response( )->error($exception->getMessage());
        }
    }


    /**
     * @param array $payload
     * @param string|null $imageName
     * @param string|null $videoName
     * @return array
     */
    private function _formateUpdatedData (array $payload, string $imageName = null, string $videoName = null): array
    {
        $data = [
            'title' => $payload['title'],
            'subtitle' => $payload['subtitle'],
            'button_text' => $payload['button_text'],
            'button_link' => $payload['button_link'],
            'page' => HOME_PAGE,
        ];

        if(!empty($payload['button_text'])) $data['button_text'] = $payload['button_text'];
        if(!empty($payload['button_link'])) $data['button_link'] = $payload['button_link'];
        if(!empty($imageName)) $data['image'] = $imageName;
        if(!empty($videoName)) $data['video'] = $videoName;

        return $data;
    }
}
