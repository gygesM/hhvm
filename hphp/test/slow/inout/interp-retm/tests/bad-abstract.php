<?hh // @generated by make_suite.sh

abstract class A {
  abstract function foo(inout $x);
}

class C extends A {
  function foo(&$x) {}
}
