# LAMP_server
Install docker on your ubuntu/centos machine
#docker login

#docker pull username/lampv1.1

#docker run --itd --name lampserver -p 80:80 -p 5000:5000 username/lampv1.1 -------> or
#docker run -itd --name lampserver -p 80:80 username/lampv1.1

#docker exec -it lampserver bash

#apt-get install git wet vim curl -y

#git clone https://github.com/usman6745/LAMP_server.git

$*-> copy the lampserver_folder->files* into /var/www/html/*

#service mysql restart
#service apache2 restart

exit the contianer
go to the browser - > http://ip/phpmyadmin -> login with preset cred ->username and Root@2018 
and create a registration db inside the phpmyadmin and run the below sql query 

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



And now go to the browser hit -> http://ip:80  -> sign up and use the webapplication
====>
Supporting file is added for database changes in your local container's server.php file.
-====
