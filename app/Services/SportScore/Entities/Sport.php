<?php

namespace App\Services\SportScore\Entities;

class Sport
{
    public int $id;

    public string $slug;

    public string $name;

    public array $nameTranslatioons;

    public function __construct(array $data)
    {
//        $this->id = $data['id'];
        $this->id = data_get($data, 'id');
        $this->slug = data_get($data, 'slug');
        $this->name = data_get($data, 'name');
        $this->nameTranslatioons = data_get($data, 'name_translations');
    }
}
