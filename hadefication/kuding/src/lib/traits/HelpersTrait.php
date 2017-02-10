<?php

namespace Hadefication\Kuding\Lib\Traits;

trait HelpersTrait
{
    public function kasset($uri)
    {
        return url('assets/kuding/' . $uri);
    }
}
