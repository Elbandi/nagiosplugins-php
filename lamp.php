<?php
//----------------------------------------------------------------------------//
// nagiosPluginPHP (c) copyright 2008 CYKO Pty Ltd
//----------------------------------------------------------------------------//

//----------------------------------------------------------------------------//
// THIS SOFTWARE IS GPL LICENSED
//----------------------------------------------------------------------------//
//  This program is free software; you can redistribute it and/or modify
//  it under the terms of the GNU General Public License (version 2) as 
//  published by the Free Software Foundation.
//
//  This program is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//  GNU Library General Public License for more details.
//
//  You should have received a copy of the GNU General Public License
//  along with this program; if not, write to the Free Software
//  Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
//----------------------------------------------------------------------------//

//--------------------------------------------------------------------//
// NOTES
//--------------------------------------------------------------------//
/* This is a very simple test script that can be used to monitor
 * a LAMP server.
 * 
 * On a default Ubuntu LAMP install;
 *   copy this file to '/var/www/lamp.php'
 *   use 'check_lamp -H <hostname>' to monitor the LAMP server
 * 
 * By default a password is NOT required to access MySQL. If your
 * installation of MySQL requires a password then you can add username
 * and password arguments to the mysql_connect() function call below.
 * 
 */

//--------------------------------------------------------------------//
// SCRIPT
//--------------------------------------------------------------------//
if (mysql_connect('localhost', 'notarealuser'))
{
	echo 'OK';
}
else
{
	echo 'FAIL';	
}
?>
