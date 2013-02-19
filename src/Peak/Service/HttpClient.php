<?php

namespace Peak\Service;

use Peak\Model\ApiRequest;

class HttpClient
{
    public function query(ApiRequest $request)
    {
        return file_get_contents($request->getUrl());
    }    
}