<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                margin: 0px;
                padding: 0px;
            }

            @keyframes back{
                0% {background-color:red;}
                25%{background-color:blue;}
                50%{background-color:yellow;}
                75%{background-color:green;}
            }

            #nav {
                width:100%;
                height:200px;
                background-color: red;
                position:relative;
                animation-name: back;
                animation-duration: 4s;
                animation-iteration-count: infinite;
            }

            #heading {
                color: white;
                background-color:black;
                margin-left:0px;
                margin-right:0px;
                padding-left:0px;
                padding-right:0px;
            }

            #bod { 
                text-align: center;
                text-shadow: 2px 2px 5px yellow;
            }
        </style>
    </head>

    <body>
        <div id="heading">
            <div id="nav">
            </div>

            <div id="bod">
                <p>THANK YOU FOR SUBMITTING!<br>Here is a report of your query</p><br>
                <p>Name: <?php echo $_POST["fullname"]; ?></p><br>
                <p>Age: <?php echo $_POST["age"]; ?></p><br>
                <p>Contact number: <?php echo $_POST["phno"]; ?></p><br>
                <p>Answer of Q1: <?php echo $_POST["Q1"]; ?></p><br>
                <p>Answer of Q2: <?php echo $_POST["Q2"]; ?></p><br>
                <p>Answer of Q3: <?php echo $_POST["religion"]; ?></p><br>
                <p>Answer of Q1: <?php echo $_POST["message"]; ?></p><br>
            </div>

        </div>
    </body>
</html>

