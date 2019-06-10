<?php
/****************************************************************************/
/*  						< Emerald Sanctum >  							*/
/*              Copyright (C) <2018> <emeraldsanctum.com>   		        */
/*					  < https://emeraldsanctum.com >					 	*/
/*																			*/
/*			Origional MangosWeb v4 (C) 2017 Mistvale.com					*/
/*			Original MangosWeb Enhanced (C) 2010-2011 KeysWow				*/
/*			Original MangosWeb (C) 2007, Sasha, Nafe, TGM, Peec				*/
/****************************************************************************/

//========================//
if(INCLUDED !== TRUE) 
{
	echo "Not Included!"; 
	exit;
}
$pathway_info[] = array('title' => $lang['account'], 'link' => '');
// ==================== //

// Lets check to see if the user is logged in
if($Account->isLoggedIn() == FALSE)
{
    redirect('?p=account&sub=login',1);
}

if($mwe_config['emulator'] == 'arcemu')
{
	$regiseter_ip = $user['lastip'];
	$joindate = '?';
}
else
{
	$regiseter_ip = $user['registration_ip'];
	$joindate = $user['joindate'];
}
?>