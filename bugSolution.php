function foo(a, b) {
  if (!isset($a) || !isset($b)) {
    return null; // or throw an exception
  }
  // Some code that uses a and b
}