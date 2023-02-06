<?php

namespace App\Infrustructure\Repository;

use App\Models\Link;
use App\Infrustructure\Interfaces\ShortLinkInterface;

class ShortLinkRepository implements ShortLinkInterface
{

    public function getLinkByHashId($hashId)
    {
        $link = Link::where(Link::HASH_ID, $hashId)->firstOrFail();
        return $link->{Link::LINK};
    }


    public function createLink($request): string
    {
        $link = Link::firstOrNew(
            [Link::LINK => $request->post('url')],[
                Link::HASH_ID => $this->getRandomString(6),
                Link::CLICK_COUNT => 0
            ]
        );

        $link->save();

        return url('') . '/' . $link->{Link::HASH_ID};
    }

    private function getRandomString($length)
    {
        $str = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
        return substr(str_shuffle($str), 0, $length);
    }
}
