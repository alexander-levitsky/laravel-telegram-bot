<?php

namespace Piro\TelegramBot\Models\Types;

use ReflectionProperty;

class BasicType
{
    public function __construct(array $payload = [])
    {
        foreach($payload as $attributeName=>$value){

            $rp = new ReflectionProperty($this::class, $attributeName);
            $type = $rp->getType()->getName();

            if(class_exists($type)) $this->{$attributeName} = new $type($value);
            else if($type === 'int') $this->{$attributeName} = (int) $value;
            else if($type === 'float') $this->{$attributeName} = (float) $value;
            else if($type === 'bool') $this->{$attributeName} = (bool) $value;
            else if($type === 'array') $this->{$attributeName} = (array) $value;
            else if($type === 'string') $this->{$attributeName} = (string) $value;

        }
    }

    public function arrayOfTypes(string $type, string $attribute){
        if(isset($this->{$attribute})){
            foreach ($this->{$attribute} as &$value){
                $value = new $type($value);
            }
        }
    }

    public function __toString(): string
    {
        return json_encode($this);
    }
}
