# minimin-package-example

An example package for the [Minimin](/pxgamer/minimin) server management tool.

When installed, if you browse to `/example` it will return a `var_dump()` of the `$route`, such as the following.
```text
object(ArrayObject)[7]
  public 'app' =>
    object(System\App)[2]
  private 'storage' =>
    array (size=1)
      'plugin' => string 'example' (length=7)
```