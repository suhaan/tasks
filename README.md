tasks
=====


Create a mysql database with username root and no password.Database name - tasks.Please create the below table - 
CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `uname` varchar(120) NOT NULL,
 `password` varchar(15) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1

CREATE TABLE `user_tasks` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` text NOT NULL,
 `descr` text NOT NULL,
 `status` int(11) NOT NULL,
 `users_id` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1

****************************

Download all the scripts into your root directory.
Access signup.php.

No validations are present.
