A simple Blog with Symfony
==========================

This document contains information on how to download, install, and start
using Symfony. For a more detailed explanation, see the [Installation][1]
chapter of the Symfony Documentation.

#How to use
Clone this repository or download a zipped file.

##Enter blog folder
    cd simpleBlg

##Start server
    php app/console server:run

##Demo page
    127.0.0.1:8000/demo
It will automatically generate three posts, and show them all in home *(/)* page.

##Landing (Home) page
    127.0.0.1:8000
It will show *upto five* (by default) posts in the home page.



#Features
##Borrowed the bootstrap theme for blog, but there are several changes, in background-color, navigation bar, font color, etc.

##Applied jQuery to set effects, for instance adding/chaning *active* dynamic style for navigation link, removing *blog-header* div while navigating off home page.



#Todo
##add pages: Registration, Login, Contact, Sidebar, Form Validator
##implement Comment functonality
##add captcha, spamfiler
##TBA?


You are free to change it, update it, or distribute it.

Have fun!
