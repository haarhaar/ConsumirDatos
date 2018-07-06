<?php

namespace App\Utilidades;


class PersonasGuzzleUtilidades extends GuzzleHttpRequestUtilidades
{

    public function all()
    {
        return $this->get('persona');
    }

    public function find($id)
    {
        return $this->get("persona/{$id}");
    }

    public function destroy($id)
    {
        return $this->delete("persona/{$id}");
    }


}
