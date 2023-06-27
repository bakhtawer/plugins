<?php
/**
 * Plugin Name:My Sign-up Form
 
 * Plugin URI: http://yourgroovydomain.com/my-awesome-plugin/
 * Description: Your plugin's description text.
 * Version: 1.0.0
 * Author: Bakhtawer Jabeen
 * Author URI: 
 * Developer: Bakhtawer Jabeen
 * Developer URI: 
 * Text Domain: my-signup-form
 * Domain Path: /languages
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

 function wpb_Sign_up($content) {
 
    // Only do this when a single post is displayed
    if ( is_single() ) { 
     
    // Message you want to display after the post
    // Add URLs to your own Twitter and Facebook profiles
     
    $content .= '<!DOCTYPE html>
    <html>
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box}
    
    /* Full-width input fields */
    input[type=text], input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }
    
    input[type=text]:focus, input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }
    
    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }
    
    /* Set a style for all buttons */
    button {
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }
    
    button:hover {
      opacity:1;
    }
    
    /* Extra styles for the cancel button */
    .cancelbtn {
      padding: 14px 20px;
      background-color: #f44336;
    }
    
    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn, .signupbtn {
      float: left;
      width: 50%;
    }
    
    /* Add padding to container elements */
    .container {
      padding: 16px;
    }
    
    /* Clear floats */
    .clearfix::after {
      content: "";
      clear: both;
      display: table;
    }
    
    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {
      .cancelbtn, .signupbtn {
         width: 100%;
      }
    }
    </style>
    <body>
    
    <form action="/action_page.php" style="border:1px solid #ccc">
      <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
    
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>
    
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
    
        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
        
        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>
        
        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    
        <div class="clearfix">
          <button type="button" class="cancelbtn">Cancel</button>
          <button type="submit" class="signupbtn">Sign Up</button>
        </div>
      </div>
    </form>
    
    </body>
    </html>
    ';
     
    } 
    // Return the content
    return $content; 
     
    }
    // Hook our function to WordPress the_content filter
    add_filter('the_content', 'wpb_Sign_up'); 