# Online-Shopping-website
We are tasked to Develop a web and/or mobile application that acts like a fictitious online trading company that sells many different products using its company web and/or mobile application. A company that only sells a small number of products (no more than a few dozens) or a fixed number of products (i.e., new products cannot be added, or old products cannot be removed dynamically).

The web and mobile application are required the meet the requirements below:
Basic Information: Your application should provide all required company information and meet the following requirements.

1. It contains the basic information about the company, for details see points 1, 2, and 3 in the above section.

2. It has a consistent navigation system for users to move through your application.

3. It provides an online Help for users - instructions on how to use your application.

4. It must use HTML5's structural elements to define the overall logical structure of the front end of the application and use CSS to define the visual layout of those structural elements.

5. You may include video or audio clips in your application if they are deemed necessary, however in such cases, you must keep their sizes to the absolute minimum.

Search Facility: In addition, your application must have a search facility to allow users to search for details of your products/services. The search facility must meet the following requirements:

1. The raw product/service data must be stored in the MySQL database on the server. They must not be hard coded in the HTML pages or dumped in the server file system. The data should be retrieved dynamically from the database and sent to the client in response to user enquiries. If new data are added to the database, your application should not have to be changed in anyway except the contents of the database.

2. The search facility must contain code to validate user input to make sure only the valid search query will be sent to the server site for action.

3. If a required field is found to be empty or containing invalid data, the user should be forced to re-enter the data.

4. Allow at least two levels of search. The first level of search is by keywords, where an entry is retrieved from the database if the user's search term matches any text in any product-related fields in the entry.

5. The second level of search is by browsing, where the user can go through different categories of products/services to find what he or she wants.

Shopping Cart: Any user, whether registered or not, can add a product to the shopping cart and remove a product from the shopping cart. The user is able to see a list of products in the shopping cart (but this user would not be able to order these products unless he/she is logged on, see Registered Users below).

# Solution
HTML

For the project, we have followed all the correct styling for HTML 5 and implemented it for all the pages. We used a number of new functions and have optimised the page for both mobile and web interface. This was important as we were unable to get Cordova implemented du to my partner and I both having AMD machines (does not run-on AMD). The website was a simple yet well looking theme we created to represent 60s dinners. The navigation of the website is extremely optimised using big stylish buttons and staying consistent on all pages.

CSS

The CSS was designed with ease of use and style in mind. We designed the website to be fully dynamically with it allowing both mobile and desktop device to navigate and use the page.
We took use of REM properties to change the size relatively to the screen. The style of the website is bright and simplisting to allow for all users to easily use the site. All fonts automatically adjust depending on the screen size.

JavaScript

We were able to use JavaScript to count the amount of items added to cart along with both focusing and adjusting some CSS properties of fields that had been left blank. This was to allow it be more noted when the user had missed filling in a field.

PHP

The Majority of our functions we archived with PHP. Some of the functionality we archive was,
• Add items to cart

• Manage cart

• Connect to the sql

• Update products

• Create new accounts

• Log in

• Log out

• Adjust account credentials

• Search for items

Unfortunately, we couldn’t get the cart and checkout system working, but for functionality we have mentioned all working well and all able to sync up the data on database.

MYSQL

For the database, we’ve decided to have 4 tables to handle all the necessary data. We’ve created accounts table to include all the users and staff information and differentiate the users and staff by including a user type variable in the table. For the products table that we’ve created can include the description and the price of the product, the product id will be set as auto increment. For the orders and product orders are created for handling the trading system, handling all the offers from the users.

# Fully implemented

• HTML and CSS are used for building the pages

• CSS has nicely managed and structured

• JavaScript functions has implemented

• MySQL database is initialised

• PHP has successfully connected to the server

• Login input validation has implemented (Wrong username/password/not exist)

• The registration is implemented and able to update on the database

• The logout feature is implemented

• User profile information update feature is implemented

• All the buttons on the pages are functional

• Able to perform data retrieving from the database

• Able to display all the data on the website

• The website has been implemented aesthetically

• The icon of products has been self-designed and aesthetically implemented

• Menu navigation feature is implemented

# Not fully implemented

• Ajax is not able to perform well in this project

• The cart system couldn’t fully function.

# Not implemented

• Cordova is not implemented

• Order tracking feature is not implemented

• Staff product update feature is not implemented

