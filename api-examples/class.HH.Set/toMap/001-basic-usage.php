<?hh // partial

namespace Hack\UserDocumentation\API\Examples\Set\ToMap;

$s = Set {'red', 'green', 'blue', 'yellow'};

$map = $s->toMap();

var_dump($map is \HH\Map<_, _>);
var_dump($map);
