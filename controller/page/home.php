<?php

function home_view()
{
  require('view/page/homeView.php');

}

function nb_connected()
{

  //displays the number of connected players
  define( 'MQ_SERVER_ADDR', '192.168.1.80' );
  define( 'MQ_SERVER_PORT', 25574 );
  define( 'MQ_TIMEOUT', 1 );

  require('library/MinecraftQuery.class.php');

  $Query = new MinecraftQuery( );

  try
    {
		$Query->Connect( MQ_SERVER_ADDR, MQ_SERVER_PORT, MQ_TIMEOUT );
	}
	catch( MinecraftQueryException $e )
	{
		$Error = $e->getMessage( );
	}

if(isset($Error)){
      return $Info['Players'] = '0';
    }else{
        if(($Info = $Query->GetInfo( )) != false){

        return $Info['Players'];
    }
}
}
