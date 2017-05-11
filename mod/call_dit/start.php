<?php

include 'dit.php';

elgg_register_event_handler('init', 'system', 'hello_world_init');

function hello_world_init() {
	
	if((_elgg_services()->request->getUrlSegments()[0]==='action')&(_elgg_services()->request->getUrlSegments()[1]==='event_manager'))
	{
		return;
	}
	$avail = array('blog','events','groups','messages','chat');	
	if(_elgg_services()->session->get(once))
	{
		elgg_dump('Already exists');
	}
	else
	{
		_elgg_services()->session->set('once',true);
		elgg_dump('First time in');
		foreach($avail as $value)
		{
			_elgg_services()->session->set($value,false);
		}
		
	}
	//elgg_dump(_elgg_services()->session);
	$user = elgg_get_logged_in_user_entity();
	//elgg_dump($user->getDisplayName());
	//elgg_dump($user->getOwnerGUID ());
		
	$a = _elgg_services()->router;
	$b = _elgg_services()->request->getUrlSegments()[0];
	$c = _elgg_services()->request;
	
	foreach ($c as $key=>$value)
	{
		$dd1=$key;
		$dd2=$value;		
	}

	$i = 0;
	foreach ($dd2 as $key=>$value)
	{
		$ddd1[$i]=$key;
		$ddd2[$key]=$value;
		$i=$i+1;
	}
/* 	elgg_dump('---');
	elgg_dump($ddd2['user-agent']);
	elgg_dump('---');*/
	
	if($user)
	{
	$userID = $user->getOwnerGUID ();
	$username = $user->getDisplayName();
	$pass = $user->getPass();
	}
	elgg_dump($userID);
	elgg_dump($username);
	elgg_dump($pass);
	
	if ((_elgg_services()->request->getUrlSegments()[0]==='action')&(_elgg_services()->request->getUrlSegments()[1]==='login'))
	{
		sendLogToDit('login','START','login','LIST',$pass,'SCS');
 		$handle1 = fopen('LogURL.txt',"a");
		fwrite($handle1,_elgg_services()->request->getUrlSegments()[0]."/"._elgg_services()->request->getUrlSegments()[1]);
		fclose($handle1);
		return;
	 }
	if ((_elgg_services()->request->getUrlSegments()[0]==='action')&(_elgg_services()->request->getUrlSegments()[1]==='logout'))
	{
		sendLogToDit('logout', 'START', 'logout', 'LIST',$pass , 'SCS');
		$handle2 = fopen('LogURL.txt',"a");
		fwrite($handle2,_elgg_services()->request->getUrlSegments()[0]."/"._elgg_services()->request->getUrlSegments()[1]."\n");
		fclose($handle2);
		return;
	 }
		
	$from1= $ddd2['referer'][0];
	$from2= explode('/',$from1);
	$from= $from2[5];
	$to= _elgg_services()->request->getUrlSegments()[0];
	
/* 	elgg_dump($from);
	elgg_dump($to);
	elgg_dump('---------');
	elgg_dump(_elgg_services()->session->get(lastSTOP));	
	elgg_dump(_elgg_services()->session->get(lastSTART));	
	elgg_dump(_elgg_services()->session->get(prev_from));	
	elgg_dump(_elgg_services()->session->get(prev_to));		
	elgg_dump('---------'); */
	
	$lastStart = _elgg_services()->session->get(lastSTART);
	$lastStop = _elgg_services()->session->get(lastSTOP);
	
	if($from|$to)
	{
		if(($from!==$to)&(($from!=_elgg_services()->session->get(prev_from))|($to!=_elgg_services()->session->get(prev_to))))
		{	
			if ($to!=_elgg_services()->session->get(lastSTART))			
			{
				if(in_array($from,$avail))
				{
					$logg = "sendLogToDit($from, 'STOP', $from, 'DETAIL', $pass, 'SCS')\n";
					$handle = fopen('keepLog.txt',"a");
					fwrite($handle,$logg);
					fclose($handle);
					
					if (_elgg_services()->session->get($from))
					{
					_elgg_services()->session->set('lastSTOP',$from);
					_elgg_services()->session->set($from,false);
					elgg_dump($logg);//echo 
					sendLogToDit($from, 'STOP', $from, 'DETAIL', $pass, 'SCS');}				
				}
				else
				{
					_elgg_services()->session->set('lastSTOP','OUT');
				}
				
				if(in_array($to,$avail))
				{
					$logg = "sendLogToDit($to, 'START', $to, 'DETAIL', $pass, 'SCS')\n";
					$handle = fopen('keepLog.txt',"a");
					fwrite($handle,$logg);
					fclose($handle);
					
					
					if (_elgg_services()->session->get($to))
					{
						
					}
					else
					{
					_elgg_services()->session->set('lastSTART',$to);
					_elgg_services()->session->set($to,true);
					elgg_dump($logg); //echo 
					sendLogToDit($to, 'START', $to, 'DETAIL', $pass, 'SCS');}				
				}
				else
				{
					_elgg_services()->session->set('lastSTART','OUT');
				}
			}
			else
			{
				//elgg_dump('NO DIT - same start');	
			}
		}
		else
		{
			//elgg_dump('second IF');
		}
	}
	else
	{
		//elgg_dump('FIRST IF');
	}
	
	switch ($to) {
    case "blog":
		_elgg_services()->session->set('prev_to','blog');
        break;
	case "events":
		_elgg_services()->session->set('prev_to','events');
        break;
	case "groups":
		_elgg_services()->session->set('prev_to','groups');
        break;
	case "messages":
		_elgg_services()->session->set('prev_to','messages');
        break;
	case "chat":
		_elgg_services()->session->set('prev_to','chat');
        break;
    default:
        _elgg_services()->session->set('prev_to','OUT');
}
	
	/*elgg_dump('---------');
	
	elgg_dump(_elgg_services()->session->get(lastSTOP));	
	elgg_dump(_elgg_services()->session->get(lastSTART));	
	elgg_dump(_elgg_services()->session->get(prev_from));	
	elgg_dump(_elgg_services()->session->get(prev_to));	 */


}
?>