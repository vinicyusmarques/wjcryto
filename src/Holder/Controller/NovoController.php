<?php


namespace wjcryto\Holder\Controller;


class NovoController
{
    public function teste()
    {
        return response()->json(['teste']);
    }

    public function novoTeste()
    {
        $data = input()->all();

        $name = $data['name'];

        return response()->json([$name]);
    }
}