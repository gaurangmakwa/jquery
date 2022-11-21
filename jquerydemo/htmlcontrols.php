<html>
    <head>
        <script src="jquery-3.6.1.js"></script>
        <script src="jquery.validate.js"></script>

        <script>
            $(document).ready(function(){
            $("#myform").validate();

            });
        </script>
        <style>
            .error{
                color:red;
            }
        </style>
    </head>
    <body>
        <form method="post" id="myform">
            name : <input type="text" class="required" name="text1">
            <br>
            number : <input type="text"  class="required digits" name="text2">
            <br>
            email : <input type="text" class="email" name="text3">
            <br>
            <input type="submit">
        </form>
    </body>
</html>