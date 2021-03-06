<?php
require '../vendor/autoload.php';

use \phputil\validator\Validator;
use \phputil\validator\Rule;
use \phputil\validator\Option;
use \phputil\validator\Format;

// Example 1

$vd = new Validator();

$rules = array(
	Rule::FORMAT => Format::NUMERIC
	);
	
$age = 'hi'; // I know, this is a strange value

// Will return the validation message for each hurt rule
$problems = $vd->check( $age, $rules );
var_dump( $problems ); // array( 'format' => '' )

$vd->setMessage( Rule::FORMAT, 'It must be numeric!' );
$problems = $vd->check( $age, $rules );
var_dump( $problems ); // array( 'format' => 'It must be numeric!' )

// Lets improve the message to include a label...
$vd->setMessage( Rule::FORMAT, '{label} must be numeric!' );
// ...and lets give the label as a third argument
$problems = $vd->check( $age, $rules, 'Age' );
var_dump( $problems ); // array( 'format' => 'Age must be numeric!' )

// Now lets add another rule
$rules[ Rule::MIN_VALUE ] = 18;
$age = 17;
$problems = $vd->check( $age, $rules, 'Age' );
var_dump( $problems ); // array( 'min' => '' ) <<- No defined message for MIN_VALUE

// Lets define a message
$vd->setMessage( Rule::MIN_VALUE, '{label} must be >= {min_value}.' );
$problems = $vd->check( $age, $rules, 'Age' );
var_dump( $problems ); // array( 'min' => 'Age must be >= 18.' )
?>