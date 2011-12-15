<?php

namespace JenkinsSampleApp\Entity;

abstract class EntityAbstract
{
    /**
     * 
     * Magic method which must retreive value from a variable
     * first it looks for a getter method, then it looks for the public varname,
     * ad finally, it looks for a protected/private varname (underscore prefix)
     * 
     * @param string $name
     */
    public function __get($name)
    {
        $returnedValue = null;
        $getter = 'get' . ucfirst($name); // ucfirst est inutile car PHP est insensible à la casse des méthodes et classes
        $publicVarName = $name;
        $nonPublicvarName = '_' . $name;
        
        if (method_exists($this, $getter)) {
            $returnedValue = $this->$getter();
        } elseif (isset($this->$publicVarName)) {
            $returnedValue = $this->$publicVarName;
        } elseif (isset($this->$nonPublicvarName)) {
            $returnedValue = $this->$nonPublicvarName;
        }
        
        return $returnedValue;
    }
    
    /**
     * Allow to clone all properties that are object that extends self
     * and also properties that are array of object that extends self
     */
    public function __clone()
	{
		$reflect = new ReflectionClass($this);
		$propList = $reflect->getProperties();
		foreach ($propList as $prop) {
			$propName = $prop->getName();
            if (is_object($this->$propName)
                && $this->$propName instanceOf self) {
                $this->$propName = clone $this->$propName;
            }
            
            if (is_array($this->$propName)) {
                foreach ($this->$propName as &$item) {
                    if (is_object($item)
                        && $item instanceOf self) {
                        $item = clone $item;
                    }
                }
            }
		}
	}
}