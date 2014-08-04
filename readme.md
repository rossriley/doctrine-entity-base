### Doctrine Entity Base Class

This base class is designed to provide a few out of the box hooks for Entity classes.

#### Extending

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

#### Constructing with data 

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

