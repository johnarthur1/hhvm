<?hh

// Test the following using async
// - Stepping over awaits.
// - Stepping over the return from an async

async function genBar($a) {
  var_dump($a);
  await RescheduleWaitHandle::create(1, 1); // simulate blocking I/O
  error_log('Finished in genBar');
  return $a + 2;
}

async function genFoo($a) {
  var_dump($a);
  $a++;
  $a = await genBar($a);
  var_dump($a);
  error_log('Finished in genFoo');
  return $a;
}

function foo($a) {
  $result = HH\Asio\join(genFoo($a));
  var_dump($result);
}

function test($a) {
  foo($a);
}

<<__EntryPoint>> function main() {
error_log('flow_gen_async.php loaded');
}
