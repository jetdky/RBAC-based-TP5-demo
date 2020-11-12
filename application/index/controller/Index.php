<?php

namespace app\index\controller;

class Index extends IndexBase
{
    public function index()
    {
        return $this->fetch();
    }
}
