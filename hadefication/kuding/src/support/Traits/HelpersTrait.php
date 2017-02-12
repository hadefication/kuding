<?php

namespace Hadefication\Kuding\Support\Traits;

trait HelpersTrait
{
    public function kasset($uri)
    {
        return url('assets/kuding/' . $uri);
    }
}
