/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  john_
 * Created: Apr 16, 2016
 */

CREATE TABLE IF NOT EXISTS `users` (
`id` varchar(10) NOT NULL,
`name` varchar(20) NOT NULL,
`password` varchar(64) NOT NULL,
`role` varchar(20) NOT NULL,
PRIMARY KEY (`id`)
+) ENGINE=MyISAM DEFAULT CHARSET=latin1;