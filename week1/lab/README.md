# Lab 1 - Add/Get Addresses from DB

##  Instructions

* Create a database called _PHPAdvClassSpring2017_. (You can do both the user and database creation all at the same time in phpmyadmin.)
* In PHP MyAdmin under the _PHPAdvClassSpring2017_ database click on the SQL tab. There will be a text area where you can copy and paste the SQL for the Assignment.  Once pasted you may click go. The SQL will add the tables needed for your assignment.

```sql
--
-- Table structure for table `address`
--

USE PHPAdvClassSpring2017;

CREATE TABLE IF NOT EXISTS `address` (
`address_id` INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
`fullname` VARCHAR(250) NOT NULL,
`email` VARCHAR(250) NOT NULL, 
`addressline1` VARCHAR(250) NOT NULL,
`city` VARCHAR(250) NOT NULL, 
`state` VARCHAR(2) NOT NULL, 
`zip` VARCHAR(5) NOT NULL,
`birthday` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- END
--
```

### Assignment

1. Create an index page that will display all the results in the table. (10 points)

2. Create an add page that will allow the user to add a new record. (10 points)

3. Please validate the fields using PHP or Regex where it makes sense. Use a ZIP code regex for ZIP(5 numbers only). For Birthday just check that is is a valid date(regex or PHP). If the user does not enter data or if the data is not valid. (10 points)

4. You do not need a Regex for fullname, addressline1, state or city. 

5. Display a list of errors for each field that does not validate. (10 points)

6. Re-populate the post values back into the fields that the user has entered data for when the data is invalid. (10 points)

7. Display a success message if the user is able to add the data. (10 points)

8. Make sure to have links on the site to navigate to the index and add page. (5 points)

9. Add bootstrap and add CSS styles to your application. (10 points)

This requirement will be graded as part of your functional grade.
Feel free to use the bootstrap CDN support to add the css and theme files.
