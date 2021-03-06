<?php
/**********************************************************************************
*
*    #####
*   #     # #####   ##   ##### #    #  ####  ###### #    #  ####  # #    # ######
*   #         #    #  #    #   #    # #      #      ##   # #    # # ##   # #
*    #####    #   #    #   #   #    #  ####  #####  # #  # #      # # #  # #####
*         #   #   ######   #   #    #      # #      #  # # #  ### # #  # # #
*   #     #   #   #    #   #   #    # #    # #      #   ## #    # # #   ## #
*    #####    #   #    #   #    ####   ####  ###### #    #  ####  # #    # ######
*
*                            the missing event broker
*
* --------------------------------------------------------------------------------
*
* Copyright (c) 2014 - present Daniel Ziegler <daniel@statusengine.org>
*
* This program is free software; you can redistribute it and/or
* modify it under the terms of the GNU General Public License
* as published by the Free Software Foundation in version 2
* 
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
* 
* You should have received a copy of the GNU General Public License
* along with this program; if not, write to the Free Software
* Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*
* --------------------------------------------------------------------------------
*/
class Configvariable extends LegacyAppModel{
	public $useDbConfig = 'legacy';
	public $useTable = 'configfilevariables';
	public $primaryKey = 'configfilevariable_id';
	
	public function isRightNaemonUsergroup(){
		Configure::load('Interface');
		$result = $this->findByVarname('nagios_group');
		if(!empty($result)){
			return in_array($result['Configvariable']['varvalue'], Configure::read('Interface.webserver_usergroups'));
		}
		
		$result = $this->findByVarname('naemon_group');
		if(!empty($result)){
			return in_array($result['Configvariable']['varvalue'], Configure::read('Interface.webserver_usergroups'));
		}
		
		return false;
	}
	
	public function getCommandFile(){
		$result = $this->findByVarname('command_file');
		if(empty($result)){
			return false;
		}
		return $result['Configvariable']['varvalue'];
	}
}
