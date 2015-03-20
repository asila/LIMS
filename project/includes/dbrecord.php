<?php
require_once(LIB_PATH.DS.'database.php');

class Dbrecord
{
  var $h;
  var $table="status";
  var $id;

  public function Dbrecord( $table, $id )
{
	   global $mydb;
	   $res = $db->query( "SELECT * from $table WHERE id=?", array( $id ) );
	   $res->fetchInto( $row, DB_FETCHMODE_ASSOC );
	$this->{'h'} = $row;
	$this->{'table'} = $table;
	$this->{'id'} = $id;
	}
	
	public function _ _call( $method, $args )
	{
	  return $this->{'h'}[strtolower($method)];
	}

	public function _ _get( $id )
	{
		print "Getting $id\n";
		return $this->{'h'}[strtolower($id)];
	}

	public function _ _set( $id, $value )
	{
		$this->{'h'}[strtolower($id)] = $value;
	}

	public function Update()
	{
	  global $db;

	  $fields = array();
	  $values = array();

	  foreach( array_keys( $this->{'h'} ) as $key )
	  {
	    if ( $key != "id" )
		{
		  $fields []= $key." = ?";
		  $values []= $this->{'h'}[$key];
		}
	  }
	  $fields = join( ",", $fields );
	  $values []= $this->{'id'};

	  $sql = "UPDATE {$this->{'table'}} SET $fields WHERE id = ?";
	  $sth = $db->prepare( $sql );
	  $db->execute( $sth, $values );
	  }
	} ?>


