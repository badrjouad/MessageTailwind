<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Puppies Message</title>
       
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

            <script src="https://cdn.tiny.cloud/1/rfh2jyq97o6vqydqz05q4siqe8rwk4bj8o5yrek0blkmmgvq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        </script>
        
    <script>
      tinymce.init({
        selector: '#mytextarea',
        branding:false
      });
      
tinymce.init({
  selector: 'textarea#default'
});

function myFunction() {
  var x = document.getElementById("form");
  
  
    x.style.display = "block";
    var emailUser1=document.getElementById("email1").innerText;
            var emailUser2=document.getElementById("email2").innerText;
           
            var user=document.getElementById("user");
           
            user.innerHTML="Reply to"+" "+emailUser1;
 
}
function myFunctionHide() {
  var x = document.getElementById("form");
  
  
    x.style.display = "none";

}

function validateForm()
{
    let x = document.forms["form"]["subject"].value;
    let y=document.forms["form"]["message"].value;
  if (x == "") {
      alert("error");
    x.style.border="red";
    return false;
  }
  if (y== "") {
      alert("error");
    y.style.border="red";
    return false;
  }

}


  
 

</script>
<style>
   
</style>
  
    </head>
    <body class="antialiased">
       <center >
        <form  onsubmit="return validateForm()" id="form" name="form"  style="width:50%;margin:3em;display:none">
            <h1 id="user"class="text-lg"></h1>
            <div>
            
                <input required name="subject" id="subject" rquired style="border: 1px solid #ccc;
                border-radius: 0em!important;"type='text' placeholder="Subject" class="w-full mt-2 mb-6 px-6 py-3 border rounded-lg text-lg text-gray-700 focus:outline-none" />
                            </div>
            <textarea required name="message" id="mytextarea">Message
            </textarea>
            
            
            <div style="border: 1px solid #ccc" class="buttons">
            <button onclick="myFunctionHide()" style="margin:1em" type="button" class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-600 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-800">Cancel</button>
            <input type="submit" value="submit"


            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 
            focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5
             text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 
             dark:focus:ring-blue-800">Send message</input>
            </div>
          </form>

          

          
      
</center> 


        
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
    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
  @foreach ( $object  as $object)
      
 
    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
    <td class="p-4 w-4">
    <div class="flex items-center">
    <input id="checkbox-table-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="checkbox-table-2" class="sr-only">checkbox</label>
    </div>
    </td>
    <td id="email1" class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $object }}</td>
    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">hello sir i want some information about the puppy (34343)</td>
    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">Informations about puppies</td>
    <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
    <button onclick="myFunction()" id="hide"href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Reply</button>
    </td>
    </tr>
    @endforeach
 
   
 
  
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    
    </body>
</html>