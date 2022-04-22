<?php
/* Maximum Edge of a Trianlge
Create a function that finds the maximum range of a triangle's third edge, where the side lengths are all intetegers.
*/

function nextEdge($side1, $side2) {
  return ($side1 + $side2) -1;
}

?>