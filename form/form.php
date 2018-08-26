<?php
require '../header.php';
?>

<body>
    <style>
        @import url('../css/form.css');
        </style>
<div class="center">
    <h1> Welcome to Tobi Samuel CV page. <br> The Founder of WittTechnologies </h1
    <h3> Check our website out at <strong><a href="../witt.php">WittTechnologies </a></strong></h3>
    <p> Please, Log Out when you are done accessing it. Thanks </p>
    <form action="formAction.php" method="post">
    <label for="formId"> Password:
    <input type="password" id="form" name="password" class="form-control" Placeholder="Enter Password" />
    </label><br>
    <button onClick="clickHere()" name="submit" type="submit" class="btn-md btn-success">Submit</button>
    </form>
    </div>
    <script>
       /* $(function() {
            alert('hello');
            
       
        });*/
        function clickHere() {
            //alert("hi");
            var a = document.getElementById("form").value;
            if(a == '' || a == null || a == undefined) {
                alert('please input at least character');
            } else if(a === "myform") {
                alert("Access Granted");
                //window.location.assign('index.php');
            } else {
                alert("Wrong Password");
            }
        }
        
        </script>
</body>
</html>