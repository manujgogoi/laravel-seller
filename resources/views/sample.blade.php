<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel ="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class ="container">
        <h1> Search with listbox </h1>
        <input class = "form-control" id = "listbox" type = "text" placeholder = "search list items">
        <ul class ="list-group" id ="listItem">
            <li class ="list-group-item" value="INDIA"> INDIA </li>
            <li class ="list-group-item" value="CANADA"> CANADA </li>
            <li class ="list-group-item"> UK </li>
            <li class ="list-group-item"> AUSTALIA </li>
            <li class ="list-group-item"> CHINA </li>
            <li class ="list-group-item"> JAPAN </li>
            <li class ="list-group-item"> GERMANY </li>
            <li class ="list-group-item"> USA </li>
        </ul></div>
        <script>
            $(document) .ready(function(){
                $('#listItem').hide();
                $("#listbox") .on("keyup", function() {
                    $("#listItem").show();
                    var values = $(this) .val() .toLowerCase();
                    $("#listItem li") .filter(function() {
                        $(this) .toggle($(this) .text() .toLowerCase() .indexOf(values) > -1)
                    });
                });

                $("#listItem li").on("click", function() {
                    let country = $(this).attr('value');
                    $("#listItem").hide();
                    $("#listbox").val(country);
                })
            });
            </script>
</body>
</html>