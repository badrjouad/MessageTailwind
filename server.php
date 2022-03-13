<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
/* <form   id="form" name="form"  style="width:50%;margin:3em;display:none">
              <h1 id="user"class="text-lg">Reply To <span id="username"></span></h1>
              <div class="form-group">
              <div>
              
                  <input  name="subject" id="subject"   type='text' placeholder="Subject" class="w-full mt-2 mb-6 px-6 py-3 border rounded-lg text-lg text-gray-700 focus:outline-none form-control" />
             </div>
              <textarea  name="message" id="mytextarea">Message
              </textarea>
              
              
              <div style="border: 1px solid #ccc" class="buttons">
              <button onclick="displayFunctionHide()" style="margin:1em" type="button" class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-600 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-800">Cancel</button>
              <button type="button" id="submit" value="submit"
  
  
              class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 
              focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5
               text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 
               dark:focus:ring-blue-800">Send message</button>
              </div>
            </div>
            </form>*/ 