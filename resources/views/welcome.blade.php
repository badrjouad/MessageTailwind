<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Puppies Message</title>
        <link rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
         integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
       
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

            <script src="https://cdn.tiny.cloud/1/rfh2jyq97o6vqydqz05q4siqe8rwk4bj8o5yrek0blkmmgvq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        </script>
        
<style>
   
</style>
  
    </head>
    <body class="antialiased">


      
     
      
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
            <h5 id="user"class="modal-title">Reply To <span id="username"></span></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="needs-validation" novalidate id="#signup-form">
             
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label" required>Subject :</label>
                  <input type="text" class="form-control" id="recipient-name">
                  <div id="error" class="invalid-feedback" >
                    Please choose a subject of message.
                  </div>
                  <div id="success" class="valid-feedback">
                      Great
                  </div>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Message:</label>
                  <textarea class="form-control" id="mytextarea" required></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button id="submit" type="button" class="btn btn-primary">Send message</button>
            </div>
          </div>
        </div>
      </div>
       


        
<div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
    <div class="inline-block min-w-full align-middle">
    <div class="overflow-hidden ">
    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
    <thead class="bg-gray-100 dark:bg-gray-700">
    <tr>
    <th scope="col" class="p-4">
    <div class="flex items-center">
    <input id="checkbox-all" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="checkbox-all" class="sr-only">checkbox</label>
    </div>
    </th>
    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
    Contact
    </th>
    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
    Message
    </th>
    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
    Subject
    </th>
    <th scope="col" class="p-4">
    <span class="sr-only">Action</span>
    </th>
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700" id="table">
  @foreach ( $user  as $u)
      
 
    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
    <td class="p-4 w-4">
    <div class="flex items-center">
    <input id="checkbox-table-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="checkbox-table-2" class="sr-only">checkbox</label>
    </div>
    </td>
    <td  class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white"  >{{$u->name}}</td>
    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{$u->email}}</td>
    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$u->password}}</td>
    <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
    <button onclick="displayFunction()" id="hide"href="#" data-name="{{$u->name}}" class="text-blue-600 dark:text-blue-500 hover:underline"  data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Reply</button>
    </td>
    </tr>
    @endforeach
 
   
 
  
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    
    <script>
    $(document).ready(function(){


      $("#table #hide").on("click", function(){
        $("#username").text($(this).attr("data-name"));
      })

      $("#submit").on("click",function(){
       
      
        let subject = $("#recipient-name").val();
        let msg = $("#mytextarea").val();
        if(subject == "" ){
          $("#recipient-name").css({"border-color": "red"});
          $("#error").css({"display": "block"});
          $("#success").css({"display": "none"});
      
            
        }
        
        else{
          $("#recipient-name").css({"border-color": "#198754"});
          $("#success").css({"display": "block"});
          $("#error").css({"display": "none"});
        }
      })
    
    })
    tinymce.init({
        selector: '#mytextarea',
        branding:false
      });
      
function displayFunction() {
  var x = document.getElementById("form");
  
  
    x.style.display = "block";
    var emailUser1=document.getElementById("email1").innerText;
            var emailUser2=document.getElementById("email2").innerText;
           
            var user=document.getElementById("user");
           
            user.innerHTML="Reply to"+" "+emailUser1;
 
}
function displayFunctionHide() {
  var x = document.getElementById("form");
  
  
    x.style.display = "none";

}




    
    </script>
   
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>