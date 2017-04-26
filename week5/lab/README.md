# Week 5 Lab

### Assignment

Update the framework provided to do the following:

Update the interface for your REST API model that will have a set of standard functions.  (getAll, get, post, put, delete) ( 10 points )

Make sure it has the correct parameters needed.

Create a resource class for your corporations that implements the IRestModel interface: ( 50 points )

Allow a user to get one record - get()

Allow a user to get all records - getAll()

Allow a user to create a new record - post()

Allow a user to update one record - put()

Allow a user to delete a record - delete()

Tip: All the functions that get data should return an array.  If there is an issue or error, then an exception can he thrown from the class and be used to send back an error response. The functions that save or update and return true/false(or throw an exception).

 

Update the proxyDemo page to test the Rest API. ( 15 points ) 