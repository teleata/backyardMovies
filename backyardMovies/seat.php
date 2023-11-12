<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("img/67_main.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        h1 {
            text-align: center;
        }
        h3{
            text-align:top;
            color: white;
            font-weight: bold;
            border-radius:3px ;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.6);
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        a {
            font-family: Arial;
            color: darkblue;
            font-size: 17px;
            font-weight: bold;
            text-decoration: none;
        }

        a.myButton {
            display: inline-block;
            margin-right: 20px;
        }

        option{
            background-color: lightblue;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            background-color: green;
            color: white;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        footer {
        text-align: center;
        color: blue ;
        padding: 10px;

        }
    </style>
</head>

        <?php
        $id='';
        $cost=0;
        if(isset($_GET['id'])){
            $id=$_GET['id'];
        
        }
        if(isset($_GET['cost'])){
            $cost=$_GET['cost'];
            
        }

        $user = 'root';
        $password = ''; 
        $database = 'byardtst'; 
        $port = 3306; 
        $mysqli = new mysqli('localhost', $user, $password, $database, $port);

        if (isset($_POST['CreateButton'])) {
            $areccusid = $_POST['customer_id'];
            Header("Location: payment.php?cusid=".$areccusid ."& cost=".$cost);
        }
        if (isset($_POST['cinema_id'])) {
            $selectedCinema = $_POST['cinema_id'];

            
            $availableSeats = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10");
            $bookedSeats = array("4", "5", "4", "5");

            echo '<select name="row_number" required>';
            echo '<select name="column_number" required>';
            foreach (range('1', '10') as $row) {
                foreach (range(1, 10) as $col) {
                    $seat = $row . $col;
                    $status = in_array($seat, $availableSeats) ? "Available" : (in_array($seat, $bookedSeats) ? "Booked" : "Unknown");
                    if ($status == "Available" || $status == "Booked" || $status == "Unknown" || $selectedCinema == "cinema $col") {
                        echo '<option value="' . $seat . '">' . $seat . ' (' . $status . ')</option>';
                    }
                }
            }
            echo '</select>';
        }
        ?>      
       <body>
    <div class="container">
        <h1>JAMROCK CINEMA</h1>
        <div>
            <a href="index.php" class="myButton">Home</a>
        </div>
        <span>
        <p style="color: orange; font-weight: bold;">MOVIE SEAT BOOKING</p>
        </span>
        <div class="movie-container">
      <label>Pick a movie:</label>
      <select id="movie">
        <option value="1100">Avengers ($1100)</option>
        <option value="1000">Rampage ($1000)</option>
        <option value="1400">Equalizer ($1400)</option>
        <option value="500">The Emoji Movie ($500)</option>
      </select>
    </div>
        <table>
        <form method="POST" action="">
    <table>
        <tr>
            <th>
                <h3>Cinema ID:</h3>
                <select name="cinema_id" required>
        
                    <option value=""></option>
                    <option value="1">Cinema 1</option>
                    <option value="2">Cinema 2</option>
                    <option value="3">Cinema 3</option>
                    <option value="4">Cinema 4</option>
                    
                </select>
            </th>
            <th>
            <h3>Customer ID:</h3>
                <select name="customer_id" required>
                        
                            <option value="1">Customer 1</option>
                            <option value="2">Customer 2</option>
                            <option value="3">Customer 3</option>
                            <!-- Repeat for other Customer_ID values -->
                        </select>
                    </th>
            <th>
                <h3>Row Number:</h3>
                <select name="row_number" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                   
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>

                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                   
                    <option value="31">31</option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                    <option value="34">34</option>
                    <option value="35">35</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>

                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                    <option value="45">45</option>
                    <option value="46">46</option>
                    <option value="47">47</option>
                    <option value="48">48</option>
                    <option value="49">49</option>
                    <option value="50">50</option>

                    <option value="51">51</option>
                    <option value="52">52</option>
                    <option value="53">53</option>
                    <option value="54">54</option>
                    <option value="55">55</option>
                    <option value="56">56</option>
                    <option value="57">57</option>
                    <option value="58">58</option>
                    <option value="59">59</option>
                    <option value="60">60</option>

                    <option value="61">61</option>
                    <option value="62">62</option>
                    <option value="63">63</option>
                    <option value="64">64</option>
                    <option value="65">65</option>
                    <option value="66">66</option>
                    <option value="67">67</option>
                    <option value="68">68</option>
                    <option value="69">69</option>
                    <option value="70">70</option>

                    <option value="71">71</option>
                    <option value="72">72</option>
                    <option value="73">73</option>
                    <option value="74">74</option>
                    <option value="75">75</option>
                    <option value="76">76</option>
                    <option value="77">77</option>
                    <option value="78">78</option>
                    <option value="79">79</option>
                    <option value="80">80</option>

                    <option value="81">81</option>
                    <option value="82">82</option>
                    <option value="83">83</option>
                    <option value="84">84</option>
                    <option value="85">85</option>
                    <option value="86">86</option>
                    <option value="87">87</option>
                    <option value="88">88</option>
                    <option value="89">89</option>
                    <option value="90">90</option>

                    <option value="91">91</option>
                    <option value="92">92</option>
                    <option value="93">93</option>
                    <option value="94">94</option>
                    <option value="95">95</option>
                    <option value="96">96</option>
                    <option value="97">97</option>
                    <option value="98">98</option>
                    <option value="99">99</option>
                    <option value="100">100</option>
                   </div>
            
                </select>
            </th>
            <th>
                <h3>Column Number:</h3>
                <select name="column_number" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>

                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>

                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                   
                    <option value="31">31</option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                    <option value="34">34</option>
                    <option value="35">35</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>

                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                    <option value="45">45</option>
                    <option value="46">46</option>
                    <option value="47">47</option>
                    <option value="48">48</option>
                    <option value="49">49</option>
                    <option value="50">50</option>

                    <option value="51">51</option>
                    <option value="52">52</option>
                    <option value="53">53</option>
                    <option value="54">54</option>
                    <option value="55">55</option>
                    <option value="56">56</option>
                    <option value="57">57</option>
                    <option value="58">58</option>
                    <option value="59">59</option>
                    <option value="60">60</option>

                    <option value="61">61</option>
                    <option value="62">62</option>
                    <option value="63">63</option>
                    <option value="64">64</option>
                    <option value="65">65</option>
                    <option value="66">66</option>
                    <option value="67">67</option>
                    <option value="68">68</option>
                    <option value="69">69</option>
                    <option value="70">70</option>

                    <option value="71">71</option>
                    <option value="72">72</option>
                    <option value="73">73</option>
                    <option value="74">74</option>
                    <option value="75">75</option>
                    <option value="76">76</option>
                    <option value="77">77</option>
                    <option value="78">78</option>
                    <option value="79">79</option>
                    <option value="80">80</option>

                    <option value="81">81</option>
                    <option value="82">82</option>
                    <option value="83">83</option>
                    <option value="84">84</option>
                    <option value="85">85</option>
                    <option value="86">86</option>
                    <option value="87">87</option>
                    <option value="88">88</option>
                    <option value="89">89</option>
                    <option value="90">90</option>

                    <option value="91">91</option>
                    <option value="92">92</option>
                    <option value="93">93</option>
                    <option value="94">94</option>
                    <option value="95">95</option>
                    <option value="96">96</option>
                    <option value="97">97</option>
                    <option value="98">98</option>
                    <option value="99">99</option>
                    <option value="100">100</option>
                
                </select>
            </th>
            <th>
                <h3>Seat Status:</h3>
                <select name="seat_status" required>
                    <option value="Available">Available</option>
                    <option value="Booked">Booked</option>
                </select>
            </div>
            </th>
            <th>
                <h3>Cost:</h3>
                <?php
                echo $cost;
                ?>
            </th>
            <th>
                <h3>Submit:</h3>
                <input type="submit" value="Create" name="CreateButton">
            </th>
        </tr>
    </table>
</form>
</table>
        <footer>
        <p>&copy; Jamrock Cinema</p>
    </footer>
 </div>
    </div>
    
</body>
</html>
<div>
           