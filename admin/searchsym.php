<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search symptoms</title>
</head>

<body>
    <main>
        <div>
            <form align="center">
                Search Medicine : &nbsp; &nbsp; &nbsp;<input type="text" size="30" placeholder="Search"
                    onkeyup="showResult(this.value)" class=" text-white text-center bg-blue" >

            </form>
        </div>
        <div id="livesearch">

        </div>
        <table id="example" align="center">
        </table>
    </main>
    <script src="js/script.js"></script>
    <script>
    function showResult(str) {

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("example").innerHTML = this.responseText;
                document.getElementById("example").style.border = "1px solid #A5ACB2";
            }
        }
        xmlhttp.open("GET", "symptoms.php?q=" + str, true);
        xmlhttp.send();
    }
    </script>
</body>

</html>