<?php

namespace EhsanMoradi\DataMapper;

use Illuminate\Support\Arr;

class Mapper
{
    private $data;

    private array $config;

    public function __construct($data, array $config = null)
    {
        $this->data = Arr::dot($data);

        $this->setConfig($config ?? config('data-mapper.default'));
    }

    public function __call(string $name, array $arguments)
    {
        $key = $this->convertMethodNameToKey($name);

        return $this->getValue($key);
    }

    private function setConfig(array $config)
    {
        $this->config = $config;
    }

    private function convertMethodNameToKey(string $methodName): string
    {
        return $this->config[$methodName] ?? $methodName;
    }

    private function getValue(string $key)
    {
        return $this->data[$key];
    }

//    private function getValue(string $key)
//    {
//        $keys = explode('.', $key);
//        $value = $this->data;
//
//        foreach ($keys as $k) {
//            if (isset($value[$k])) {
//                $value = Str::camel($value[$k]);
//            } else {
//                return null;
//            }
//        }
//
//        return $value;
//    }
}
