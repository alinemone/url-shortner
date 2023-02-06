<?php

namespace App\Infrustructure\Interfaces;

interface ShortLinkInterface
{
    public function getLinkByHashId($hashId);

    public function createLink($request);
}
