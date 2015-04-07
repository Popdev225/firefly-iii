<?php namespace FireflyIII\Http\Controllers;

use Cache;
use ErrorException;
use League\CommonMark\CommonMarkConverter;
use Log;
use Response;
use Route;

/**
 * Class HelpController
 *
 * @package FireflyIII\Http\Controllers
 */
class HelpController extends Controller
{

    /**
     * @param $route
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($route)
    {
        $content = [
            'text'  => '<p>There is no help for this route!</p>',
            'title' => 'Help',
        ];

        if (!Route::has($route)) {
            Log::error('No such route: ' . $route);

            return Response::json($content);
        }

        if ($this->inCache($route)) {
            $content = [
                'text'  => Cache::get('help.' . $route . '.text'),
                'title' => Cache::get('help.' . $route . '.title'),
            ];

            return Response::json($content);
        }
        $content = $this->getFromGithub($route);


        Cache::put('help.' . $route . '.text', $content['text'], 10080); // a week.
        Cache::put('help.' . $route . '.title', $content['title'], 10080);

        return Response::json($content);

    }

    /**
     * @param $route
     *
     * @return bool
     */
    protected function inCache($route)
    {
        return Cache::has('help.' . $route . '.title') && Cache::has('help.' . $route . '.text');
    }

    /**
     * @param $route
     *
     * @return array
     */
    protected function getFromGithub($route)
    {
        $uri     = 'https://raw.githubusercontent.com/JC5/firefly-iii-help/master/' . e($route) . '.md';
        $content = [
            'text'  => '<p>There is no help for this route!</p>',
            'title' => $route,
        ];
        try {
            $content['text'] = file_get_contents($uri);
        } catch (ErrorException $e) {
            Log::error(trim($e->getMessage()));
        }
        if (strlen(trim($content['text'])) == 0) {
            $content['text'] = '<p>There is no help for this route.</p>';
        }
        $converter       = new CommonMarkConverter();
        $content['text'] = $converter->convertToHtml($content['text']);

        return $content;


    }

}
