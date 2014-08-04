## Doctrine Entity Base Class

This base class is designed to provide a few out of the box hooks for Entity classes.

### Extending

Create your entity class and simply extend this base class. For example:

```
<?php

namespace Myproject;

use Doctrin\Entity\Base;

class Myentity extends Base
{
    protected $option1;
    protected $option2;
    
}

?>
```

### Constructing with data 

You can now create a new entity class and pre-seed it with data.

```
$object = new Myentity(['option1'=>'test','option2'=>'test']);

```


### Property getters and setters


You can get and set properties via getter and setter syntax.

```
$object = new Myentity();
$object->option1 = 'test';
echo $object->option1; // 'test'

```

### Support for method getters and setters

If you'd prefer to use methods to get and set, this works the same:


```
$object = new Myentity();
$object->setOption1('test');
echo $object->getOption1(); // 'test'

```

### Serialize

You can quickly serialize your entity object by calling the `serialize()` method.

```
$object = new Myentity();
$object->setOption1('test');
print_r($object->serialize()); // ['option1'=>'test', 'option2'=>'']

```

### Providing your own methods.

If you want to override the default behaviour for any of the properties on your object then you can do so by supplying your own methods.
These will always be used ahead of the fallback behaviour. 


```
<?php

namespace Myproject;

use Doctrin\Entity\Base;

class Myentity extends Base
{
    protected $option1;
    protected $option2;
    
    
    public function setOption1($val)
    {
        $this->option1 = json_encode($val);
    }
    
    public function getOption1()
    {
        return json_decode($val);
    }
    
    public function serializeOption1()
    {
        return json_decode($val);
    }
    
}

?>
```


