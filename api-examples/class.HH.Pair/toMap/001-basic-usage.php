<?hh // partial

namespace Hack\UserDocumentation\API\Examples\Pair\ToMap;

$p = Pair {'foo', -1.5};

$map = $p->toMap();

var_dump($map is \HH\Map<_, _>);
var_dump($map);
