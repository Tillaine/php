<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css" >
    <title>City Suggest</title>
    <script>
    showSuggestion = (str) => {
        if(str.length == 0) {
            document.getElementById('output').innerHTML = '';
        } else {
            //AJAX REQ
            const xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = () => {
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    console.log('in if statement ')
                    document.getElementById('output').
                    innerHTML = xmlhttp.responseText;
                    console.log(xmlhttp)
                }
            }
            xmlhttp.open("GET", "suggest.php?q="+str, true)
            xmlhttp.send();
        }
    }
    </script>
</head>
<body>
    <div>
        <h1>Search Cities</h1>
        <form>
            Search City: <input type="text" class="form-control"
            onkeyup="showSuggestion(this.value)">
        </form>
        <p>Suggestion: <span id="output" style="font-weight:bold"></span></p>
    </div>
    
</body>
</html>