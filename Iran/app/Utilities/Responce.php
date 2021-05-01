<?php

class Response
{
    public static function respond($data, $status_code)
    {
        header("HTTP/1.1 $status_code 200 OK");
        return json_encode($data);
    }
}