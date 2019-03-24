
Senior Capstone Project 

Moove


Winter 2018



Harsh Desai

Project Documentations:

1. Project vision
1.1. Backgrounds
•	We realized that with the growth of ride sharing services like Uber and Lyft, these companies rely upon drivers who wish to work part time or full time. We wanted to make a service that provides rides to people for a cheaper rate than others, and with drivers who just want to go somewhere as well.

1.2. Socio-economic Impact, Business Objectives, and Gap Analysis
•	Socio-economic Impact
o	With ride sharing applications like Uber and Lyft blooming and growing everyday we feel like there is something missing. Something that other rideshare companies don’t cater to. We want to cater to a more casual driver. We want to be able to have someone who is going to a destination anyways, pick up someone else who just so happens to want to go to the same place. We aren’t necessarily only looking for drivers who want to drive for a living, but an average person who just wants to make a little extra money on the way to the place they wanted to go anyways. With this concept, the person looking for a ride can get one at a much cheaper rate than calling an Uber, Lyft, or cab; while also giving the driver some extra money for themselves on the way to their own destination, without inconveniencing any party.
•	Business Objectives
o	Creating a stable product
o	Growing a user base/Marketing
o	Creating a cheaper/fairer payment model for users
o	Customer service
o	Profitability
o	User retention
o	Ease of Access




•	Gap Analysis

Objectives	Current State	Future State	Gap Description	Factors	Remedial Actions
Ensure application works as intended	Missing SImple elements, small bugs	Application complete	Not quite done yet	time	Spend an extra weekend fully fixing everything
Have 30 requests populated	Only 14 requests populated	40 requests populated	16 requests short	More DB space
Not enough data
	Populate more data

1.3. Security and ethical concerns
•	Security
o	Securing payment and user data is our top priority
o	Securing users from outside sources (other users, accidents, theft, etc.) is a huge potential problem
•	Ethical Concerns
o	How do we evaluate background checks?
o	How do we decide on the safest age to host a ride?
o	How do we validate drivers licenses?
o	How do we ensure our users safety?
o	How do we compensate for damage/accidents/theft?
o	What is our procedure for reviewing cases?
o	Who is held liable on a case by case basis?

1.4. Glossary of Key Terms
•	Host - Term to describe a user who is hosting a ride, the driver of the car.
•	Rider - Term used to describe a user who is getting a ride from someone, the passenger.
•	User - Broad term that is only used when referring to both hosts and riders. 

2. Project Execution and Planning
2.1. Team Information
•	Adam Vida - Senior at OU studying IT. Experience with HTML, CSS, Java, C++ and Android application development. 
•	Harsh Desai - Senior at OU studying Computer Science. Experience in MySQL, Java, C++, C, HTML, CSS and PHP
•	Sagun Sedai - Senior at OU studying Computer Science. Have experience in Java, PHP, HTML, CSS, SQL, JavaScript, C, C++, and C# languages.
•	Wesley Shall - Senior at OU studying Computer Science. Experienced in Android/ Web Development
•	Nathaniel Auxier -  Senior at OU studying Computer Science. Have experience in Java, PHP, HTML, C#, SQL, JavaScript, C, C++, Python languages, Web Development, and API integration
•	Apurva Tolia -  Senior at OU studying IT. Experienced in designing the UI and writing complex algorithm for the application.

2.2. Tools and Technology
•	Tools
o	XAMPP
o	Android Studio
o	PHPStorm
o	BootStrap
o	Apache Server
o	Ubuntu 16.10 OS
o	Digital Ocean server
o	Stripe Payment API
o	Google Distance Matrix API
o	Google Waypoint API
•	Technology
o	CSS
o	HTML
o	PHP
o	JavaScript
o	JQuery
o	MySQL (PHPMyadmin)




2.3. Project Plan
•	The big picture scope of the project is meant to include a web application that allows for users to ask for rides and to drive other riders. This application also includes methods for users to pay their drivers. Along with the web application, an android mobile application will also be created to provide the same experience as the web application but on the go. (*Update: Due to time constraints, the mobile application has been scraped, only the web application will be created).
2.4. Best standards and Practices   
•	Since a web application for Uber and Lyft already exist, it seems the best models for the website should be somewhat inspired by those designs so that we can create a better ride sharing application. In addition, the standard that we set is to be competitive in the market with companies such as Uber and Lyft by having cheaper rates, and secure services so that the user can enjoy the most comfortable experience.  
       	
3. System Requirement Analysis
3.1. Function Requirements

	
ID	Priority Level (1”higher” to 5 “lower”)  	Requirement
REQ 1 	1	The user must have an internet connection to access our application.  
REQ 2	1	The user must register on the website or mobile app in order to host or join a ride. 
REQ 3
	1	The user must login to the website or mobile app using a username and password. 
REQ 4
	1	The web application and mobile application must always be synced up and be functioning almost identically. 
REQ 5	1	The host should be over 21 and must have 2 years of clean driving record. 
REQ 6
	1	The host must be able to host the ride successfully.  
REQ 7
	3	The host must be able to change the destination mid-ride. 
REQ 8
	1	The host must be able to manually end a ride prematurely or once the destination has been reached. 
REQ 9
	1	The host must be able to submit a request to charge a user more money if damage is done to the car or the driving route is changed to be further than originally agreed.  
REQ 10
	1	The rider must be able to request a ride. 
REQ 11
	1	The rider must receive a confirmation message when a booking has been requested.  
REQ 12
	3	 The host must be able to view the booking request made 

REQ 13
	3	The rider will be able to see the status of the driver. 
REQ 14
	1	The rider must be able to provide payment using a credit card, debit card or paypal before using the service. 
REQ 15
	3	The user must be able to securely save payment card information on the app for future purchases. 
REQ 16
	2	The rider must be able to appeal an extra charge if they feel they were unfairly charged. 
REQ 17
	5	The rider is allowed to take limited amount of luggage depending on the host car. 
REQ 18
	3	The host must receive a confirmation email after creating an account for the first time. 
REQ 19
	1	Hosts must be able to set parameters such as certain times, dates, and certain miles away from pickup points that they are able to accept for giving rides to people. 
REQ 20
	1	 Account must be deleted upon user request. 
REQ 21
	5	The host must provide a time frame the rider has to enter the car before the driver can drive off and continue his routes. 
REQ 22
	3	The rider must receive two confirmation messages when the host has arrived to the pickup location and drop off location.  
REQ 23	2	The user should be able to see a history/log of his or hers past requests and drop-offs that have been made. In order to easily make the same requests repeatedly. 
REQ 24	1	The rider must be able to see the total charges of the entire trip that they are requesting before they agree to pay. 



3.2. Non-functional Requirements

ID	Priority Level (1”higher” to 5 “lower”) 	Requirement
REQ 1	1	The rider should be able to access the ride service in many locations across the United States. 
REQ 2
	1	The host should be able to view the location of the customer in order to provide the service. 
REQ 3	1	The rider should be able to provide payment to the host after they have reached their destination.  
REQ  3	2	The rider should be able to receive the confirmation message of their booking within 10 minutes. 
REQ 4
	2	The rider should be allowed to cancel their booking if they don’t want to use the service but a fee may apply. 
REQ 5
	3	The rider should be able to rate a host after a ride has ended. 
REQ 6
	3	The rider should be able to leave a comment on the host after a ride has ended. 
REQ 7
	3	The host should be able to rate a user after a ride has ended. 
REQ 8
	4	The user should be able to connect their account with paypal, or another third party payment service. 
REQ 9
	5	The user should get email notification about the deals and offers if the user has turned on the subscription.  
REQ 10 	4	The rider should be able to the real time map where they can see their driver location. 
REQ 11	3	The rider should receive different rates if they are above 65 + or over. 
REQ 12	1	The host should have a background check completed prior to performing the service. 
REQ 13	1	If the rider is 18 years or younger requesting for a ride, then a present adult who is 18 years or older should accompany them in the ride. 
REQ 14	1	The user should be prohibited to carry firearms while in the vehicle. 
REQ 15	2	The host should briefly instruct the passenger the terms and conditions of using Moove. 
REQ 16	2	The rider should be limited to the amount of luggage that they have in the vehicle. 
REQ 17	2	User should be able to see the security policy in order to give them confidence that they can trust the storage of their personal payment information on the Moove’s database (example: 128 bit encryption, with masked account numbers, etc). 
REQ 18	1	User should have option of going through the process to become a driver. Provided the user meets the driver requirements provided by Moove. 
REQ 19	1	The host should strictly be enforced before signing the terms and conditions that absolutely no drugs or alcohol is allowed while operating any vehicle. 

3.3. On-Screen  Appearance of landing and other pages requirements.  


 

 
 

 
 

 


3.4. Wireframe designs
 

4. Functional Requirements Specification
4.1. Stakeholders
•	Uber and Lyft - These companies will become competitors and may end up having to adjust their policies in response to Moove or vice versa.
•	Car companies (Ford, Chrysler, etc) - These companies could set up sponsorships deals or other such things. A new company revolving around cars and travel could always impact car companies.
•	US Government - A very serious stakeholder, there are many liabilities that are implied with a company like Moove and along with Uber and Lyft, these companies may spark new legislation in direct response to the rise in ride sharing companies. 

4.2. Actors and Goals
•	Actors
o	Rider
o	Host
o	Database
o	Application
•	Goals
o	Rider - To successfully request and receive a ride from a host.
o	Host - To successfully receive ride requests and get riders to their destination.
o	Database - To hold data of all users in a secure and efficient manner.
o	Application - To facilitate the means to provide the ride sharing service to all users.

4.3. User stories, scenarios and Use Cases
•	User Stories

US 1	As a rider, I can select a destination I want to go to and book a ride
US 2	As a host, I can view all available booking requests, and fulfill ones I would like
US 3	As a host, I will receive payment upon completing a ride request
US 4	As a host, I can click a button to broadcast that I am hosting rides
US 5	As a host, I can end hosting a ride once a ride completes
US 6	As a host, I can change the original destination in the middle of the ride
US 7	As a user, I can add a profile picture and some basic information about me
US 8	As a user, I can apply to become a host by submitting my drivers license and performing a background check
US 9	As a rider, I can set up payment methods to be used to pay for the rides I receive.


•	Critical Scenarios
•	Scenario 1: User decides to register to use the application   
o	John Smith opens the web or mobile application
o	He observes that there are two options, which are Login and Sign Up
o	John picks the “Sign Up” button.
o	Then, he has to setup his First Name, Last Name, email address,password, and Date of Birth
o	After that he clicks “Sign Up” button.

•	Scenario 2: User decides to login to use the application   
o	John Smith opens the web or mobile application
o	He observes that there are two options, which are Login and Sign Up
o	Then, he has to input his email address and password that he registered
o	After that he clicks “Login” button..

•	Scenario 3: User decides to logout from the application  
o	John Smith is using the ride-share application and wants to quit.
o	He presses the “Logout” button on the mobile or web application.

•	Scenario 4: Rider decides to view the available rides  
o	While John Smith is using the application, he decides that he wants to see what rides are available.
o	He inputs his location and the destination that he wants to go to.
o	Then, he presses the “View Available Rides” button.
o	He observes a list of drivers who are available to pick him up from his current location.

•	Scenario 5:  Rider decides to book a ride  
o	After John Smith viewed the available rides, he observes the name of the driver and the rate of the ride.
o	John decides to select that option for preparation of booking  and is shown to another page where there are terms and conditions of the ride.
o	Then, he accepts it, and selects the “Book now” button.
o	John receives a confirmation text stating that he booked the ride.
o	The driver also receives information by text that a passenger needs to be picked up.

•	Scenario 6: Host decides to host a ride
o	After John Smith logs in, he decides to host a ride himself.
o	John navigates to the Hosting page and selects “Host Now”
o	John has not registered himself as a Driver yet so he is prompted to provide additional details about himself
o	After providing a valid driver license number, insurance policy number, and  vehicle VIN, John selects Submit.
o	John is then prompted that he is now hosting and other users can view his driver information and book a ride
•	Scenario 7: Host decides to accept ride request
o	After John Smith receives a ride request, he is prompted with a notification that a passenger needs to be picked up, detailing the passenger’s details and their location.
o	John selects “Accept” and is presented a map with a GPS route to the passenger’s location.
o	The passenger also receives a notification that the driver has accepted their request is on route.
•	Scenario 8: Host fulfils ride request
o	After John Smith picks the passenger up, he proceeds to the destination
o	After reaching the destination and the passenger exits, he selects “Complete Ride”
o	He is presented with the total amount received for the run that is then deposited into his account
o	He selects “Continue” and is prompted that he is available again.
•	Scenario 9: Host ends hosting a ride
o	John Smith decides he is finished hosting
o	He selects “End Hosting” and is notified that he is not longer hosting.
•	Scenario 10: User withdraws money from account
o	John Smith decides it is pay day and wishes to withdraw what he made during the week
o	After logging in, he selects “Account Balance” and is presented with the amount that is currently in his account
o	He selects “Withdraw” and is presented with options on how he would like to receive payment, whether be a direct deposit to a bank account or by check in mail.
o	John selects “Check” and confirms his address and that he wishes to receive the money by check.














•	Use Cases
 
 
 
 



Use Case 5 	Host booking a ride
Related Requirements	REQ1, 2, 3, 4, 5, 6, 7, 8, 12, 19
Initiating Actor	Host user
Actor’s Goal	Successfully accept a ride request
Participating Actors	Host user, Rider user, application, internal DB
Preconditions	1.	Host is logged in and registered as a valid driving host. 
2.	User ride requests are available to be reviewed.
3.	Host has set parameters for who they can pick up 
Postconditions	1.	A ride has been booked and user is awaiting their ride
Flow of Events for Main Success Scenario	1.	Host clicks on available bookings for hosts button
2.	Based on host parameters, qualifying requests are displayed.
3.	Host chooses a request. 
4.	Request rider is notified via email
5.	Request rider confirms details.
6.	Host clicks notify button during driving time to send notification to rider that their ride is on the way
7.	Once rider is dropped off, host hits end drive button.
8.	Payment is exchanged via application automatically 
9.	drive ends and host is brought back to main screen
Flow of Events for Alternate Scenario	1.	Host clicks on available bookings for hosts button
2.	Based on host parameters, qualifying requests are displayed.
3.	Host chooses a request. 
4.	Request rider is notified via email
5.	Request rider confirms details.
6.	Host clicks notify button during driving time to send notification to rider that their ride is on the way
7.	Rider decides to change destination mid-ride
8.	Host hits change route button
9.	Host enters in new destination
10.	Alert is sent to rider, who then receives a new cost estimate and confirms destination change.
11.	Once rider is dropped off, host hits end drive button.
12.	Payment is exchanged via application automatically 
13.	drive ends and host is brought back to main screen

Use Case 6	Removing a hosted ride
Related Requirements	REQ1,2, 3, 4, 5, 6, 7, 8
Initiating Actor	Host
Actor’s Goal	Successfully delete a ride that was being hosted
Participating Actors	Host, internal DB 
Preconditions	1.	Host is logged in as host
2.	The host is broadcasting as a host for rides to users
Postconditions	1.	Host has removed his broadcast for other users to view
Flow of Events for Main Success Scenario	1.	Host navigates to options menu
2.	Host clicks end host button 
3.	Host clicks a confirmation button to ensure they want to end broadcasting
4.	The host is no longer broadcasting their services
Flow of Events for Alternate Scenario	1.	Host navigates to options menu
2.	Host clicks end host button
3.	A popup notification appears that says the host already has a ride booked and that the user who is booked will get a full refund for a ride
4.	A possible penalty will be added to the hosts account for canceling a booking
5.	Host clicks a confirmation button to ensure they want to end broadcasting
6.	The host is no longer broadcasting their services







Use Case 7	Requesting a Ride
Related Requirements	REQ1, 2, 3, 4, 10, 11, 12, 13, 14
Initiating Actor	Rider
Actor’s Goal	Successfully request a ride from a host
Participating Actors	Rider, Host, application, internal DB
Preconditions	1.	Rider is registered and logged into their account with a valid credit/debit card saved to the account
Postconditions	1.	Rider has received a booking confirmation and is awaiting their ride
Flow of Events for Main Success Scenario	1.	Rider clicks request ride button
2.	Rider enters destination
3.	Rider enters time and date for the ride
4.	Any potential hosts are found and a cost estimate is displayed for the user
5.	Rider confirms payment information
6.	The rider clicks a final confirm ride button
7.	The host confirms the ride by clicking an accept ride button
8.	An email confirmation of successful booking is sent to rider
Flow of Events for Alternate Scenario	1.	Rider clicks request ride button
2.	Rider enters destination
3.	Rider enters time and date for the ride
4.	No hosts are found to give a ride for that destination
5.	The request remains broadcasted to hosts until it is accepted by one
6.	Once a host accepts, an email is sent to the rider saying that the ride has been accepted and booked
7.	A cost estimate is displayed for the rider
8.	Rider confirms payment information
9.	Rider clicks a final confirm ride button.
10.	A confirmation message is sent to the rider when the host is on its way



Use Case 8	Canceling a Ride as Rider
Related Requirements	REQ 1, REQ 2, REQ 8, REQ 10, REQ 11, REQ 13,  REQ 16
Initiating Actor	Rider
Actor’s Goal	Cancelling a requested ride 
Participating Actors	Login process, internal DB, Rider
Preconditions	•	Rider has to be logged in 
•	Rider has to have an active requested ride with Host
Postconditions	•	Rider is granted with confirmation within the application that the ride has been cancelled 
Flow of Events for Main Success Scenario	
1.	Rider clicks on rider options
2.	Rider selects cancel ride
3.	Rider confirms that they would like to cancel 
4.	Message will be sent to the host and rider that the ride has been cancelled 
5.	Rider will be prompted to the main screen 
Flow of Events for Alternate Scenario	1.	Rider clicks on rider options
2.	Rider selects cancel ride
3.	Rider confirms they would like to cancel 
4.	Rider loses network connection 
5.	Driver arrives to destination
6.	After 5 minute waiting period the Host can cancel the ride










Use Case 9	Browsing for a ride
Related Requirements	REQ 1, REQ 2, REQ 3, REQ 4, REQ 10
Initiating Actor	Rider
Actor’s Goal	Successfully search for the ride that they want to join
Participating Actors	Rider, internal DB 
Preconditions	1.	Rider should have a working internet connection.
2.	Rider should open the application in the mobile app or website.
Postconditions	1.	Rider has successfully searched for the ride that they wanted to join.
Flow of Events for Main Success Scenario	1.	The rider clicks on the rides section in the app or website.
2.	Then, the rider inputs their destination that they want to go from their location.
3.	Rider receives a list of the rides that are available near their location.
4.	Rider has the option to select the hosted ride that they prefer. 
Flow of Events for Alternate Scenario	1.	The Rider clicks on the rides section in the app or website.
2.	Then, the rider inputs their destination that they want to go from their location.
3.	However, no rides are available so the user receives a message that “No rides are available near their location at this time”.
4.	rider can search again to see if there are any available rides.







Use Case 10	Joining a ride
Related Requirements	REQ 1, REQ 2, REQ 3, REQ 4, REQ 10, REQ 13
Initiating Actor	Rider
Actor’s Goal	Successfully join a ride when they had requested
Participating Actors	User, internal DB 
Preconditions	1.	Rider should have a working internet connection.
2.	Rider should open the application in the mobile app or website.
Postconditions	1.	Rider has successfully joined the ride that they requested.
Flow of Events for Main Success Scenario	1.	The rider on the mobile app or website clicks on the book ride button after completing all of the payment information.
2.	The host would receive a notification on their phone that the user has requested for a ride.
3.	Then, it is updated to the website and app  that particular host is now booked.
4.	The rider receives confirmation message that they has joined the ride.
 
Flow of Events for Alternate Scenario	1.	The rider on the mobile app or website clicks on the book ride button after completing all of the payment information.
2.	The host would receive a notification on their phone that the user has requested for a ride.
3.	However, for some reason the host  decides to cancel their booking.
4.	Then, there would be an update on the website and mobile app that the host is available to give a ride.
5.	The rider receives a notification that the booking has been canceled.


Use Case 11	Adding Payment Method
Related Requirements	REQ 1, REQ 2, REQ 3, REQ 4, REQ 14, REQ 15
Initiating Actor	User 
Actor’s Goal	Successfully add the payment method.
Participating Actors	User, internal DB 
Preconditions	1.	User should have a working internet connection.
2.	User should open the application in the mobile app or website
Postconditions	1.	User has successfully added the payment method 
Flow of Events for Main Success Scenario	1.	User navigates to the payment options under the settings tab
2.	User add the payment method. 
3.	User receives confirmation message on screen that payment method is added.

Flow of Events for Alternate Scenario	1.	User navigates to the payment options under the settings tab
2.	User enters bad or incorrect payment information
3.	User receives a message saying invalid card holder name/card number/incorrect cvv number..














Use Case 12	Removing Payment Method
Related Requirements	REQ 1, REQ 2, REQ 3, REQ 4, REQ 14, REQ 15
Initiating Actor	User 
Actor’s Goal	Successfully removed the payment method.
Participating Actors	User, internal DB 
Preconditions	1.	User should have a working internet connection.
2.	User should open the application in the mobile app or website
Postconditions	1.	User has successfully removed the payment method 
Flow of Events for Main Success Scenario	1.	User navigates to payment options under the settings tab
2.	User must enter their password.
3.	User clicks to remove the payment method. 
4.	User receives confirmation message on screen that payment method is successfully removed

Flow of Events for Alternate Scenario	1.	User navigates to payment options under the settings tab
2.	User must enter their password
3.	User enters bad or incorrect password to remove the payment method 
4.	User receives a message saying invalid password in order to remove your payment method please enter your password again.









Use Case 13	Adding Profile Detail
Related Requirements	REQ 1, 3
Initiating Actor	User
Actor’s Goal	Successfully add profile detail
Participating Actors	User, Internal DB
Preconditions	1.	User has already created an account
2.	User has internet connection and either access to the app or the website
Postconditions	1.	User has successfully added profile detail
Flow of Events for Main Success Scenario	
1.	User accesses profile settings
2.	User changes profile settings
3.	User receives in app notification that the changes have been saved
4.	User can visibly see the changes after saving them
Flow of Events for Alternate Scenario	
1.	User accesses profile settings
2.	User changes profile settings
3.	User receives in app notification that the changes have not been saved due to internet connection
4.	User cannot visibly see the changes after attempting to save them













Use Case 14	Removing Profile Detail
Related Requirements	REQ 1, 3
Initiating Actor	User
Actor’s Goal	Successfully remove profile detail
Participating Actors	User, Internal DB
Preconditions	1.	User has already created an account
2.	User has internet connection and either access to the app or the website
Postconditions	1.	User has successfully removed profile detail
Flow of Events for Main Success Scenario	
1.	User accesses profile settings
2.	User changes profile settings
3.	User receives in app notification that the changes have been saved
4.	User can visibly see the changes after saving them
Flow of Events for Alternate Scenario	
1.	User accesses profile settings
2.	User changes profile settings
3.	User receives in app notification that the changes have not been saved due to internet connection
4.	User cannot visibly see the changes after attempting to save them













Use Case 15	Receiving an email
Related Requirements	REQ 1, REQ 2,REQ 18
Initiating Actor	User 
Actor’s Goal	Successfully receive an email.
Participating Actors	User, internal DB 
Preconditions	1.	User had to be registered to the site in order to receive an email.
Postconditions	1.	User has successfully received an email. 
Flow of Events for Main Success Scenario	1.	User register for a new account.
2.	User gets an confirmation email in order to activate their account. 
3.	User clicks on activate my account now and the account is successfully activated.

Flow of Events for Alternate Scenario	1.	User register for a new account. 
2.	User enters bad or incorrect password or incorrect email. 
3.	User receives a message saying invalid password /email Id in order to add an account please enter your valid email Id/password again.


































4.4. System Sequence / Activity Diagrams

 

 
 

 

 
          

5. User Interface Specifications
5.1. Preliminary Design 
 
 
 
 
5.2. User Effort Estimation       
•	We estimate it will take a team of 5 people around 140-160 hours of work each, or 700-800 total hours to complete this application. 






6. Static Design
6.1. Class Model
 

6.2. System Operation Contracts

Precondition:  Rider should have a working internet connection. Rider should open the application in the mobile app or website

Postcondition: Rider has successfully joined the ride that they requested.
    	
6.3. Mathematical Model
   Cost = (total miles*.70) + 2

6.4. Entity Relation        
        











7. Dynamic Design
7.1. Sequence Diagrams.


 
  
           
7.2. Interface Specification  
	
•	Hosted Ride: This is where the user is able to host a ride.

•	Requested Ride: This is where user can request a ride.

•	Browse Ride: Users are able to see what rides are available nearby and they can         view my hosted ride and my requested ride.

•	Profile: Allows the users to edit and add their personal information.
7.3. State  Diagrams
 

 



8. System Architecture and System Design
8.1. Subsystems / Component  /  Design Pattern Identification
•	Subsystems
o	Login
o	Authentication
o	Payments
o	Map routing
•	Components
o	Login form
o	Request ride form
o	Host ride form
o	Stripe payment form
o	Profile form
o	Map location auto fill
•	Design Pattern Identification
o	Bootstrap template
o	Popup form screens

8.2. Mapping 	Subsystems to Hardware Deployment Diagram)   
 
       	
8.3. Persistent Data Storage
•	MySQL database
•	Stripe Payment info database

8.4. Network Protocol
•	HTTP
•	HTTPS
    





8.5. Global Control Flow
 

8.6. Hardware Requirement
•	Any computer or mobile device that has internet access and can run any web browser.










9. Algorithms and Data Structures
9.1. Algorithms

1.	Google Waypoint Algorithm

 

2. Distance Matrix Algorithm

 



9.2. Data Structures

The usage of data structures in the project consisted of:

1.	Arrays (Single Dimensional)

 




10. User Interface Design and Implementation
10.1. User Interface Design
 
 
 
 
 
 


10.2. User Interface Implementation
 
 
 

11. Testing
11.1. Unit Test Architecture and Strategy / Framework
•	Our strategy is to ensure that any text problems, db issues, or other problem gets identified and squashed each and every week.
11.2. Unit test definition, test data selection
•	Testing user data working for:
o	Email
o	Name
o	Date of Birth
o	Car type
o	Picture
o	Number of passengers
11.3. System Test Specification
•	This is done using:
o	Unit testing
o	Acceptance testing
o	Integration testing






11.4. Test Reports per Spring
Sprint number	Test type	Variable tested	Result
1	Unit	Tested login unit	Working as intended
1	Acceptance	Tested login forms	Passwords form not yet working fully
2	Integration	Tested login screen with landing page	Working as intended
2	Acceptance	Tested contact us page working	Email sent to us not being sent properly, was fixed.
3	Unit 	Testing ride/host functionality	Not working well
3	Acceptance	Tested host and find ride forms	Not initially saving to DB, eventually fixed in sprint 4.
4	Unit 	Testing ride/host functionality	Can now function as intended
4	Acceptance	Tested host and find ride forms	Working as intended
5	Unit	Tested maps functionality	Could only figure out point A and B, not C or D if applicable
5	Acceptance	Tested google maps api auto filling locations in	Working as intended
6	Unit	Tested maps functionality 	Working as intended
6	Integration	Tested if payment method is fully functioning with Stripe	Working as intended

12. Project Management
12.1. Project Plan

Sprint Number	Sprint Objectives	Estimated time
1	Begin initial documentation, map out application, login screen	15 hours each
2	FInish initial documentation, home screen, landing page, FAQ, contact page	20-25 hours each
3	Begin ride functionality, update documentation, make previous pages look better 	25 hours each
4	Thank you page, profile page, payment page	15-20 hours each
5	Work on maps page, rework hosted/search ride, add stripe payment method	25 hours each
6	Fully implement maps, ride hosting, and payments. Fix all bugs	25 hours each
7	Bug fix, UI updates, perfect everything	20 hours each







12.2. Risk management

Risk	Potential Impact	Resolution
Maps functionality does not work as intended	No driver will be able to get from point A to B	Use google maps algorithm that is proven to work and implement that.
There are low driver counts	No One will be able to get a ride to their destination.	Offer driver incentives, that make it more appealing to be a host.


13. References

Google Maps Embedded API: https://developers.google.com/maps/documentation/embed/
Bootstrap Information: https://www.w3schools.com/bootstrap/bootstrap_grid_system.asp
https://www.affilorama.com/site-building/php
Autocomplete Form:
http://easyautocomplete.com/guide
JQuery Library:
https://cdnjs.com/libraries/jquery/1.11.2
Accordion Format:
https://www.w3schools.com/howto/howto_js_accordion.asp
https://getbootstrap.com/docs/4.0/components/collapse/
Database tutorial to return the query based on user account:
https://www.w3schools.com/php/php_mysql_select.asp
