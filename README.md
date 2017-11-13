# coordinates-search

## Developed with PHP v7.1 and HTML

### To run the project navigate to the project root & enter this PHP command to start the server:
    php -S localhost:8000 -t ./

### The terminal will output a response such as:

    PHP 7.1.10-1+ubuntu16.04.1+deb.sury.org+1 Development Server started
    Listening on http://localhost:8000
    Document root is /home/joe/viagogo
    Press Ctrl-C to quit.

### Navigate to http://localhost:8000 in a browser to use the app.
### This app has been tested on the latest version of Chrome browser.


#### assumptions made:
ticket prices are less than 100 dollars.

#### multiple events:
to modify my application for multiple events I would change my coordinate class to hold an array of events.
then when I use the usort php function I would modify my custom comparison to cosider each event.

#### larger world:
I would need to use a relational database & modify some static values in the code to become dynamic