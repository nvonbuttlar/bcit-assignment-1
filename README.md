# BCIT COMP3015 - Assignment 1
The purpose of this assignment is to work with everything from the first half of the course.

## index.php
- This is a simple welcome page
- create a page with links to login.php and signup.php

## login.php
- display a login form with username, password, and a login button
- this form will POST to redirect.php
- tag on a query parameter to indicate this is coming from login.php

## signup.php
- display a sign up form with username, password, verify_password, and a sign up button 
- this form will POST to redirect.php
- tag on a query parameter to indicate this is coming from signup.php

## redirect.php
- if the request is a GET request, redirect to index.php
- if the request is a POST request, use the query parameter to determine if this is a login or a signup
- for logins, attempt to search for the username and password pair in users.txt
- validate the username – it can contain numbers and letters only, maximum length of 15 characters, but at least 8 characters long
- validate the password – it must be at least 8 characters long, must contain numbers and letters, and one of the following four special characters ! ? | @
- if the username/password pair is found, redirect to thankyou.php with a message
thanking the user for logging in. Include their username in the message
- if the username/password pair is not found, redirect back to login.php. No error
message is needed
- for signups, attempt to add the username and password pair into users.txt

### validation
- validate the username – same as login requirements
- validate the password – same as login requirements
- validate verify_password – must match password
- if all parameters validate, redirect to thankyou.php with a message
thanking the user for signing up. Include their username in the message
- if the parameters do not validate, redirect back to signup.php. No error
message is needed
- and of course, if the parameters are not valid, do not persist their values to
users.txt
- hash the password any way you like, but they must be hashed o the format of the users.txt file must be: username|password

## thankyou.php
- a simple page that either thanks the user for logging in or for signing up
- the username to thank should be passed in as a GET/query parameter
- validate/filter this so that only valid usernames are used
- the login or signup thank-you message should be predefined in this file
- you may want to use a GET parameter to determine which message to display 
- if the user successfully logged in, thank them for logging in
- if the user successfully signed up, thank them for signing up
