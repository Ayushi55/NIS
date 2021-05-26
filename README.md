<h1>  Simulation of SQL injection attack on mobile shopping website. </h1> 
SQL injection is a web security vulnerability that allows an attacker to interfere with the queries that an application makes to its database. It generally allows an attacker to view data that they are not normally able to retrieve. This might include data belonging to other users, or any other data that the application itself is able to access. In many cases, an attacker can modify or delete this data, causing persistent changes to the application's content or behavior.
<br>
List of Technologies:
 <br>
 1. Xampp ( Server )
 <br>
 2. phpmyAdmin for database
 <br>
 3. PHP, HTML, CSS, and MYSQL.

<h2> METHODS: </h2>
 <h3> Retrieving hidden data: </h3>
 <br>
  Consider a shopping application that displays mobiles of different companies, which have been released .When a user searches a brand in the search box this causes the application to make an SQL query to retrieve details of the relevant products from the database:
  SELECT * FROM mobiles WHERE company = 'iphone' AND released = 1
  This SQL query asks the database to return:
    - all details (*)
    - from the mobiles table
    - where the category is iphone
    - and released is 1.

  The restriction released = 1 is being used to hide products that are not released. For unreleased products, presumably released = 0.
  The application doesn't implement any defenses against SQL injection attacks, so an attacker can construct an attack such that it results in the below query:
  <br>
  SELECT * FROM mobiles WHERE company = 'iphone'#' AND released = 1
  <br>
  The key thing here is that the hash sequence # is a comment indicator in SQL, and means that the rest of the query is interpreted as a comment. This effectively removes the remainder of the query, so it no longer includes AND released = 1. This means that all products are displayed, including unreleased products.
  Going further, an attacker can cause the application to display all the products in any category, including categories that they don't know about:
  This results in the SQL query:
  <br>
  SELECT * FROM mobiles WHERE company = 'iphone' OR 1=1#' AND released = 1
  <br>
  The modified query will return all items where either the company is an iphone, or 1 is equal to 1. Since 1=1 is always true, the query will return all items.

  <h3> Subverting application logic: </h3>

  Consider an application that lets users log in with a username and password. If a user submits the username abc and the password abc123, the application checks the credentials by performing the following SQL query:
  <br>
  SELECT * FROM users WHERE username = 'abc' AND password = 'abc123'
  <br>
  If the query returns the details of a user, then the login is successful. Otherwise, it is rejected.
  Here, an attacker can log in as any user without a password simply by using the SQL comment sequence # to remove the password check from the WHERE clause of the query. For example, submitting the username abc'# and a blank password results in the following query:
  <br>
  SELECT * FROM users WHERE username = 'abc'#' AND password = 'nkjn'
  <br>
  This query returns the user whose username is abc and successfully logs the attacker in as that user.
  Going forward user can also type username= ‘ OR 1=1#.
  <br>
  The following query will be executed:
  <br>
  SELECT * FROM users WHERE username = ‘'OR 1=1#' AND password = 'nkjn'
  <br>

<h2> Demonstration of actual SQL Injection attack </h2>
<br>
(Here write a description about how the attack is successful step wise) along with the suitable screenshot / Pop up Messages Displayed etc.
Type of Attack: Subverting application logic
Step 1 : Attacker will enter username in login page in such a way that the password condition gets commented out

Use Case 1 : [https://github.com/Ayushi55/NIS/blob/60b1a8b68d1f69ea72a1bbe922068b0fdd415269/screenshots/login_attack1.PNG]

Use Case 2:  [https://github.com/Ayushi55/NIS/blob/60b1a8b68d1f69ea72a1bbe922068b0fdd415269/screenshots/login_attack2.PNG ]

 
Step 2 : After clicking login the user will get authenticated despite the wrong password or no username.

[https://github.com/Ayushi55/NIS/blob/60b1a8b68d1f69ea72a1bbe922068b0fdd415269/screenshots/login_successful.PNG]        

Type of Attack : Retrieving hidden data
Step 1: Attacker wants to reveal all the mobile brands which are released and not released. Revealing the information about not released products is against the privacy of the site. For this attack to work attacker will type the following

[https://github.com/Ayushi55/NIS/blob/60b1a8b68d1f69ea72a1bbe922068b0fdd415269/screenshots/One_plus_attack.PNG]

Because of this input following query will be executed - SELECT * FROM mobiles WHERE company = 'One plus'#' AND released = 1.Query after the # is commented.

Step 3: Now both released and not released products are shown.
[https://github.com/Ayushi55/NIS/blob/60b1a8b68d1f69ea72a1bbe922068b0fdd415269/screenshots/one_plus_attack_outcome.PNG]

<h2> Demonstration of preventing an SQL injection Attack </h2>
(Again a suitable description and Screenshot / Pop Up messages etc.
<br>
Type of Attack: Subverting application logic
<br>
Step 1 : Now despite of entering comment condition, the query will not get manipulated
[https://github.com/Ayushi55/NIS/blob/60b1a8b68d1f69ea72a1bbe922068b0fdd415269/screenshots/login_attack1.PNG]
<br> 
Step 2: Output
[https://github.com/Ayushi55/NIS/blob/60b1a8b68d1f69ea72a1bbe922068b0fdd415269/screenshots/login_attack_prevented.PNG]
<br>
Type of Attack : Retrieving hidden data
<br>
Step 1: Now Attacker won't be able to reveal  the mobile brands which are not released. 
<br>
Input - [https://github.com/Ayushi55/NIS/blob/60b1a8b68d1f69ea72a1bbe922068b0fdd415269/screenshots/One_plus_attack.PNG]
<br>
Step 2: Output
[https://github.com/Ayushi55/NIS/blob/60b1a8b68d1f69ea72a1bbe922068b0fdd415269/screenshots/One_plus_attack_prevented.PNG]
