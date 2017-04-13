# Week 3 - Lab

1. In PHP MyAdmin under the PHPAdvClassSpring2017 database click on the SQL tab. There will be a text area where you can copy and paste the SQL below. Once pasted you may click go.  This will add the table and the data: 


```
--
-- Table structure for table 'users'
--

USE PHPAdvClassSpring2017;

CREATE TABLE IF NOT EXISTS `users` (
`user_id` INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
`email` VARCHAR(150) NOT NULL UNIQUE KEY, 
`password` VARCHAR(60) COLLATE utf8_unicode_ci NOT NULL,
`created` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- END
--
```


## Assignment

Acceptance: You must use PHP classes to organize your code in order to receive a grade. 
Please note, you will use this login system for a different assignment.  
Make sure to use templates so everything can easily be transferred over.

 

Create a signup page. (10 points)

Add validation to the signup page to ensure the user enters a valid email and password. This also includes an email that is already registered. (10 points)

Use password_hash to store the password into the database. (10 points)

Create a login page. (5 points)

If the user logs in store the user_id in a session. (10 points)

Create an admin page that does not allow the user to enter unless they are logged in. (10 points)

Have a logout button on the admin page and display the user_id and email. When logged out you can redirect the user to the login page. (10 points)

Add Links to help navigate the site. (5 points)