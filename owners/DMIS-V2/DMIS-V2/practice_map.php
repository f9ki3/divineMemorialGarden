<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbcemetery";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$deceased_id = $_GET['deceased_id'];

$getDetails = "SELECT * FROM deceased WHERE deceased_id = $deceased_id";

//display

$result = $conn->query($getDetails);
$deceased = $result->fetch_assoc();

session_start();
require('dbconnect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="mapping_style_a.css"> 
    <link rel="stylesheet" href="mapping_style_b.css">
    <link rel="stylesheet" href="mapping_style_c.css">
    <link rel="stylesheet" href="mapping_style_d.css"> 
    <link rel="stylesheet" href="mapping_style_e.css"> 
    <link rel="stylesheet" href="mapping_style_f.css">     
    <link rel="stylesheet" href="mapping_style_z.css"> 

</head>

<style>
.date{
    font-size: 12px;
    text-align: center;
    margin-top: -20px;
}
.name{
    color: black;
    font-weight: bolder;
    text-align: center;
    font-size: 30px
}
.img{
    height: 20px;
    width: 20px;
    position: absolute;
    margin-top: -44px;
    margin-left: 60px;
}
h5.location{
    margin-left: 15px;
    text-align: center;
}
.paragraph{
    text-align: center;
}
</style>
<body>
    <div id="popup1" class="popup-container">
        <div class="popup-content">
          <a href="#" class="close">&times;</a>
          <h5 class="location">Lot 1 Block 2</h5> 
          <img class="img" src="location.png" alt="location">
          <h2 class="name">Uchiha Itachi</h2>
          <h5 class="date">June 9. 1985 - July 29. 2020</h5>
          
         
          <p class="paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
      </div>

      <div id="popup2" class="popup-container">
        <div class="popup-content">
          <a href="#" class="close">&times;</a>
          <h5 class="location">Lot 1 Block 1</h5> 
          <img class="img" src="location.png" alt="location">
          <h2 class="name">Uchiha Itachi</h2>
          <h5 class="date">June 9. 1985 - July 29. 2020</h5>
          
         
          <p class="paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
      </div>

    
    <div class="z">
       <div class="a"> <!--BLOCK 1, LOT 1-10 -->
        <div class="aa"><a class="style" href="config.php?deceased_id=1">1</a></div>
        <div class="ab"><a class="style" href="config.php?deceased_id=2">2</a></div>
        <div class="ac"><a class="style" href="#popup1">3</a></div>
        <div class="ad"><a class="style" href="#popup1">4</a></div>
        <div class="ae"><a class="style" href="#popup1">5</a></div>
        <div class="af"><a class="style" href="#popup1">6</a></div>
        <div class="ag"><a class="style" href="#popup1">7</a></div>
        <div class="ah"><a class="style" href="#popup1">8</a></div>
        <div class="ai"><a class="style" href="#popup1">9</a></div>
        <div class="aj"><a class="style" href="#popup1">10</a></div>
     </div>
     <div class="b"> <!--BLOCK 2, LOT 11-21 -->
        <div class="ba"><a class="style" href="#popup1">11</a></div>
        <div class="bb"><a class="style" href="#popup1">12</a></div>
        <div class="bc"><a class="style" href="#popup1">13</a></div>
        <div class="bd"><a class="style" href="#popup1">14</a></div>
        <div class="be"><a class="style" href="#popup1">15</a></div>
        <div class="bf"><a class="style" href="#popup1">16</a></div>
        <div class="bg"><a class="style" href="#popup1">17</a></div>
        <div class="bh"><a class="style" href="#popup1">18</a></div>
        <div class="bi"><a class="style" href="#popup1">19</a></div>
        <div class="bj"><a class="style" href="#popup1">20</a></div>
        <div class="bk"><a class="style" href="#popup1">21</a></div>
     </div> 
     <div class="c">
            <div class="ca"><a class="style" href="#popup1">22</a></div>
            <div class="cb"><a class="style" href="#popup1">23</a></div>
            <div class="cc"><a class="style" href="#popup1">24</a></div>
            <div class="cd"><a class="style" href="#popup1">25</a></div>
            <div class="ce"><a class="style" href="#popup1">26</a></div>
            <div class="cf"><a class="style" href="#popup1">27</a></div>
            <div class="cg"><a class="style" href="#popup1">28</a></div>
            <div class="ch"><a class="style" href="#popup1">29</a></div>
            <div class="ci"><a class="style" href="#popup1">30</a></div>
            <div class="cj"><a class="style" href="#popup1">31</a></div>
            <div class="ck"><a class="style" href="#popup1">32</a></div>
            <div class="cl"><a class="style" href="#popup1">33</a></div>
     </div>
     <div class="d">
        <div class="da"><a class="style" href="#popup1">34</a></div>
        <div class="db"><a class="style" href="#popup1">35</a></div>
        <div class="dc"><a class="style" href="#popup1">36</a></div>
        <div class="dd"><a class="style" href="#popup1">37</a></div>
        <div class="de"><a class="style" href="#popup1">38</a></div>
        <div class="df"><a class="style" href="#popup1">39</a></div>
        <div class="dg"><a class="style" href="#popup1">40</a></div>
        <div class="dh"><a class="style" href="#popup1">41</a></div>
        <div class="di"><a class="style" href="#popup1">42</a></div>
        <div class="dj"><a class="style" href="#popup1">43</a></div>
        <div class="dk"><a class="style" href="#popup1">44</a></div>
        <div class="dl"><a class="style" href="#popup1">45</a></div>
        <div class="dm"><a class="style" href="#popup1">46</a></div>
     </div>
     <div class="e">
        <div class="ea"><a class="style" href="#popup1">47</a></div>
        <div class="eb"><a class="style" href="#popup1">48</a></div>
        <div class="ec"><a class="style" href="#popup1">49</a></div>
        <div class="ed"><a class="style" href="#popup1">50</a></div>
        <div class="ee"><a class="style" href="#popup1">51</a></div>
        <div class="ef"><a class="style" href="#popup1">52</a></div>
        <div class="eg"><a class="style" href="#popup1">53</a></div>
        <div class="eh"><a class="style" href="#popup1">54</a></div>
        <div class="ei"><a class="style" href="#popup1">55</a></div>
        <div class="ej"><a class="style" href="#popup1">56</a></div>
        <div class="ek"><a class="style" href="#popup1">57</a></div>
        <div class="el"><a class="style" href="#popup1">58</a></div>
        <div class="em"><a class="style" href="#popup1">59</a></div>
        <div class="en"><a class="style" href="#popup1">60</a></div>
     </div>
     <div class="f">
        <div class="fa"><a class="style" href="#popup1">61</a></div>
        <div class="fb"><a class="style" href="#popup1">62</a></div>
        <div class="fc"><a class="style" href="#popup1">63</a></div>
        <div class="fd"><a class="style" href="#popup1">64</a></div>
        <div class="fe"><a class="style" href="#popup1">65</a></div>
        <div class="ff"><a class="style" href="#popup1">66</a></div>
        <div class="fg"><a class="style" href="#popup1">67</a></div>
        <div class="fh"><a class="style" href="#popup1">68</a></div>
        <div class="fi"><a class="style" href="#popup1">69</a></div>
        <div class="fj"><a class="style" href="#popup1">70</a></div>
        <div class="fk"><a class="style" href="#popup1">71</a></div>
        <div class="fl"><a class="style" href="#popup1">72</a></div>
        <div class="fm"><a class="style" href="#popup1">73</a></div>
        <div class="fn"><a class="style" href="#popup1">74</a></div>
        <div class="fo"><a class="style" href="#popup1">75</a></div>
     </div>
    </div>
</body>
</html>