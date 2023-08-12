<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Your Train</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <style>
        body{
            background-image: url("https://www.tamilnadutourism.tn.gov.in/img/pages/large-desktop/the-nilgiri-mountain-railway-1653904566_39d2e58ed7221faa8057.webp");
            background-repeat: no-repeat;
            background-size: cover;
            max-width: 75%;
            background-attachment: fixed;
        }
        div{
            background-color: white;
        }
    </style>
    
</head>
<body>
    <div>
    <a href="/HTML_Tutorial/index1.phpl"><img src="/HTML_Tutorial/Rail_Safar.png" alt="stats" align="left" width="153"/></a>
    <img src="/HTML_Tutorial/irctc_logo.png" alt="stats" align="right" width="140"/></body>
    <center><H1 style="font-family: Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight: 750;">Rail Safar.in</H1></center>
    <center><H3 style="font-family: Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">(Authorised Online Rail Booking Site under IRCTC Indian Railways)</H3></center>
    <br/><br/>
    <fieldset>
    <center><legend style="font-size: large;">Search Train</legend></center>
    <P align="Right">All fields with * are required.</P>
    <form class="form-inline" action="">        
        <fieldset>
            <legend>Select Station & Date</legend>
            <label for="Station">Source Station *
                <select>
                    <option value="">Select</option>
                    <option value="RKMP">Rani Kamalapati (RKMP)</option>
                    <option value="ADI">Ahmedabad Jn. (ADI)</option>
                    <option value="JBP">Jabalpur Jn. (JBP)</option>
                    <option value="NZM">H.Nizamuddin (NZM)</option>
                </select>
            </label>
            <label for="Station">Destination Station *
                <select>
                    <option value="">Select</option>
                    <option value="NZM">H.Nizamuddin (NZM)</option>
                    <option value="BJU">Barauni Jn. (BJU)</option>
                    <option value="BPL">Rani Kamalapati (RKMP)</option>
                    <option value="YPR">Yeswantpur Jn. (YPK)</option>                    
                </select>
            </label>
            <label for="dod">Date of Journey *
                <input type="date" id="dod" name="dod" placeholder="Enter date of journey">
            </label>
        </fieldset>
        <fieldset>
            <legend>Select Quota</legend>
            <label>
                <input type="checkbox" name="Gen" >GENERAL
                <input type="checkbox" name="Tatk">TATKAL
                <input type="checkbox" name="Sr.">SR. CITIZEN
            </label>
        </fieldset>
        <hr>
        <center><button>SEARCH</button>
        <a href="/HTML_Tutorial/index1.php"><button>CANCEL</button></a></center>
        <footer><center>&copy; Rail Safar Tech. Ltd. India. All brands are trademarks of their respective owners.</center></footer>
    </form></div>
</body>
</html>