<?hh

<<file:__EnableUnstableFeatures('expression_trees')>>

final class Code {
  const type TAst = mixed;

  public function splice(mixed $_): this::TAst {
    throw new Exception();
  }
}

function test(): void {
  Code`__splice__(1 << 4)`;
}
