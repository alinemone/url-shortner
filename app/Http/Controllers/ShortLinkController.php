<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use App\Infrustructure\Classes\Response;
use Illuminate\Contracts\Foundation\Application;
use App\Http\Requests\Link\CreateShortenerRequest;
use App\Infrustructure\Repository\ShortLinkRepository;

class ShortLinkController extends Controller
{


    public function getUrl(Link $link)
    {
        $link->increment(Link::CLICK_COUNT);

        $url = $link->{Link::LINK};

        return view('link.redirect', compact('url'));
//        return Redirect($link->{Link::LINK});
    }


    public function pageShortenerUrl()
    {
        return view('Link.index');
    }

    /**
     * @param CreateShortenerRequest $request
     * @return Application|Factory|View
     */
    public function shortenerUrl(CreateShortenerRequest $request): Application|Factory|View|JsonResponse
    {
        /** @var ShortLinkRepository $repository */
        $repository = app(ShortLinkRepository::class);
        $result = $repository->createLink($request);

        if ($request->wantsJson()) {
            return Response::return($result);
        } else {
            return view('Link.index', ['url' => $result]);
        }


    }
}
