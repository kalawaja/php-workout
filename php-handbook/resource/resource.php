
# resource
A resource is a special variable, holding a reference to an external resource. Resources are created and used by special functions.

# Important Note: The function is_resource() can be used to determine if a variable is a resource and get_resource_type() will return the type of resource it is.

<?php
$fp = fopen('test.txt', 'r');
var_dump($fp);
# Output: resource(3) of type (stream)
fclose($fp);
?>