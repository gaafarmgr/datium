<?php

try{

require_once( 'bootstrap.php' );

echo 'this year:';
var_dump( Datium::now()->get() );
echo "<br>";
var_dump( Datium::now()->sub('3 year')->get() );
echo "<br>";
var_dump( Datium::now()->add('3 year')->get() );
echo "<br>";
var_dump( Datium::now()->get() );
echo "<br>";
var_dump( Datium::now()->leap()->get() );
echo "<br>";
echo 'Is next year leap?';
var_dump( Datium::now()->add('1 year')->leap()->get() );
echo "<br>";
var_dump( Datium::now()->dayOf()->year() );
echo "<br>";
var_dump( Datium::now()->get('gh', 'l jS F Y h:i:s A') );

} catch (Exception $e ) {

  var_dump( $e );

}

?>
