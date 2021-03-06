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
class Service extends LegacyAppModel{
	public $useDbConfig = 'legacy';
	public $useTable = 'services';
	public $primaryKey = 'service_id';
	
	public function beforeFind($query){
		parent::beforeFind($query);
		if(isset($query['bindModels']) && $query['bindModels'] === true){
			$this->bindModel([
				'belongsTo' => [
					'Objects' => [
						'className' => 'Legacy.Objects',
						'foreignKey' => 'service_object_id',
					],
					'Host' => [
						'className' => 'Legacy.Host',
						'foreignKey' => 'host_object_id',
					],
					'Servicestatus' => [
						'className' => 'Legacy.Servicestatus',
						'foreignKey' => 'service_object_id',
					],
				]
			]);
		}
	}
}