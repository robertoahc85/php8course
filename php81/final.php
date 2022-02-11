<?php
class Foo
{
    public const X = "foo";
}
 
class Bar extends Foo
{
    public const X = "bar";
}
?>

<?php
class Foo
{
    final public const X = "foo";
}
 
class Bar extends Foo
{
    public const X = "bar";
    


}
?>