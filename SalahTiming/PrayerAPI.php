<!--Riyadh, Qassim, Jeddah, Makkah, Madinah, Eastern Province, Tabuk, Hail, Asir, Jazan, Najran, AlBaha, AlJawf-->
<!-- php<? include 'Footer.php'; ?> -->
<!DOCTYPE html>
<html lang="en">
    <body>
        <?php
        $title = "Home";
        include 'Header.php';
        ?>
        <h1 style="text-align: center" >Timings By City - 2021</h1>
        <br>
        <form class="API">
            <fieldset>
                <legend id="CityTime">
                    <label class="pray">Prayer Timetable:</label>
                </legend>

                <table>
                    <tr><label for="city" class="pray">Salah Time For Today at:</label>
                    <select id="city" name="city">
                        <option value="non" >select city</option>
                        <option value="Makkah" >Makkah</option>
                        <option value="Madinah" >Madinah</option>
                        <option value="Riyadh" >Riyadh</option>
                        <option value="Jeddah" >Jeddah</option>
                        <option value="Qassim" >Qassim</option>
                        <option value="Tabuk" >Tabuk</option>
                        <option value="Hail" >Hail</option>
                        <option value="Asir" >Asir</option>
                        <option value="Jazan" >Jazan</option>
                        <option value="Najran" >Najran</option>
                        <option value="AlBaha" >AlBaha</option>
                        <option value="AlJawf" >AlJawf</option>
                    </select></tr>
                    <tr class="pray"><td >Fajr: </td>  <td id="Fajr">  </td></tr>
                    <tr class="pray"><td >Sunrise: </td>  <td id="Sunrise">  </td></tr>
                    <tr class="pray"><td >Dhuhr: </td>  <td id="Dhuhr">  </td></tr>
                    <tr class="pray"><td >Asr: </td>  <td id="Asr">  </td></tr>
                    <tr class="pray"><td >Sunset: </td>  <td id="Sunset">  </td></tr>
                    <tr class="pray"><td >Maghrib: </td>  <td id="Maghrib">  </td></tr>
                    <tr class="pray"><td >Isha: </td>  <td id="Isha">  </td></tr>
                    <tr class="pray"><td >Imsak: </td>  <td id="Imsak">  </td></tr>
                    <tr class="pray"><td >Midnight: </td>  <td id="Midnight">  </td></tr>
                </table>
            </fieldset>
        </form>
        
        <div class="getpray"><button onclick="GetSelectedDate();" class="btn" >Get Pray Time</button></div>
       

        <script>
            function GetSelectedDate() {

                var F = document.getElementById("Fajr");
                var S = document.getElementById("Sunrise");
                var D = document.getElementById("Dhuhr");
                var A = document.getElementById("Asr");
                var Sun = document.getElementById("Sunset");
                var M = document.getElementById("Maghrib");
                var I = document.getElementById("Isha");
                var IM = document.getElementById("Imsak");
                var MN = document.getElementById("Midnight");

                var c = document.getElementById("city");
                var city = c.options[c.selectedIndex].value;


                if (city != "non") {

                    var endpoint = "http://api.aladhan.com/v1/timingsByCity";
                    var parCity = "?city=" + city;
                    var parRmin = "&country=Saudi Arabia&method=4";
                    var url = endpoint + parCity + parRmin;

                    var xhr = new XMLHttpRequest();
                    xhr.onreadystatechange = function () {

                        if (xhr.readyState == 4 && xhr.status == 200) {

                            var response = JSON.parse(xhr.responseText);
                            //var response_json = JSON.parse(response);
                            F.innerHTML = response.data.timings.Fajr;
                            S.innerHTML = response.data.timings.Sunrise;
                            D.innerHTML = response.data.timings.Dhuhr;
                            A.innerHTML = response.data.timings.Asr;
                            Sun.innerHTML = response.data.timings.Sunset;
                            M.innerHTML = response.data.timings.Maghrib;
                            I.innerHTML = response.data.timings.Isha;
                            IM.innerHTML = response.data.timings.Imsak;
                            MN.innerHTML = response.data.timings.Midnight;

                        }
                    }
                    xhr.open("GET", url, true);
                    xhr.send();
                } else {
                    alert("plese select city before.");
                }
            }
           
        </script>  

    </body>
</html>

