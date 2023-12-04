# IS436---HNF
HNF+ is a web application that is designed to help you keep track of all your nutritional needs. There are all sorts of factors that can lead to a healthy lifestyle, such as exercise, diet, sleep, etc. Our application seeks to combine all of that information and place it in one convenient location unique for each user. 
Link: https://swe.umbc.edu/~astine2/IS436Project/IS436---HNF/activity.html 

## Overview

### How its made
 This application is built from the following languages: HTML, CSS, PHP, MySQL and Javascript. 
 (As of 12/3 HTML and CSS are implemented, throughout the remainder of the week PHP and other backend technology will hopefully by implemented)
## How to Use
When you first access the page you will see a user dashboard that is empty. You want to navigate to the "Login" button on the navigation bar. If you have an account you will login using the username and password you have created. If you dont have an account, you can click the link under the login button. It will take you to the create an account page where you will enter your name, email, and other information. Once creating an account you will login using those crediential and be able to see the dashboard customized to you, the user.

## Use Cases
We have five intended use case: Login/Create an Account, Payment System, Trainer Management, Personal Planner and Tracking Activities 

### Login/Create Account
The create an account page is used to store values in the mysql table. The login page references what the user inserts into the page with what information is saved in the table. If it matches the user can proceed. The login page also starts a session. (PHP in development for Login)
### Payment System
This case focuses on the user selecting a subscritption plan. There are multiple ways of paying for a subscription, such as monthly, annualy and pay as you go. Once you select a subscription method you will be prompted to enter your payment information. They a recipt will be generated from that information. 
### Workout and Nutritional Information
This case allows you to insert workout and nutritional information. (This use case will be merged with the personal planner use case)
### Personal Planner
The personal planner use case allows you to submit different information such as your goals, adding item to your calendar, adding workout plans, etc. You will insert your information into the text box under the corresponding category. The information you enter will display under the same corresponding category (once PHP is implmented)
### Tracking Activites
This case allows you to view all of your activities on the dashboard. If you make a change to Personal Planner or Workout and Nutritional Information, it will be updated on the dashboard so you wont have to go back and forth between pages to view it. 
### Trainer Management
This case allows you to look at the various resources that trainer will be able to offer you. This use case also displays events and workshops that trainers will be hosting. 
