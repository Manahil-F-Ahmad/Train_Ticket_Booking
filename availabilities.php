<!-- Has HTML, CSS, JAVA, PHP -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Train Availibility</title>
        <link rel="stylesheet" href="homepage.css">
        <link rel="stylesheet" href="topbar.css">
        <link rel="website icon" type="jpeg" href="TC logo.jpeg">
        <script src="navigation.js"></script>
    </head>
    <body>
        <div class="topbar">
            <div class="brand"><a href="homepage.html" style="text-decoration: none; color: black;">Ticketing Corner</a></div>
            <div class="menu">
                <a href="#" class="menuItem" onclick="homepage()">Home</a>
                <a href="#" class="menuItem" onclick="membership()">Membership</a>
                <a href="#" class="login" onclick="login()">Login</a>
                <a href="#" class="myaccount" style="display: none;">Login</a>
            </div>
        </div>
        <section class="banner">
            <!-- <div class="welcome">
                <p>
                        Ticketing Corner <br><br>
                        Explore the world, one city at a time!
                </p>
                <br>
            </div> -->
            <!-- Form for train availibility -->
            <div class="searchtrain">
                <?php
                    echo "<table style='border: solid 1px black;'>";
                    echo "<tr><th>TrainID</th><th>StationID</th><th>Date</th><th>Arrival</th></tr>";
                    class TableRows extends
                    RecursiveArrayIterator{
                        // function __construct($it){
                        //     parent::__construct($it,self::LEAVES_ONLY);
                        // }
                        function beginChildren(){
                            echo "<tr>";
                        }
                        function endChildren(){
                            echo "</tr>" . "\n";
                        }
                    }
                    try{
                        $db = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
                        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                        $stmt = $db->prepare("SELECT trainID, StationID, dates, arrival FROM stations");
                        $stmt->execute();
                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v){
                            echo $v;
                        }
                    }
                    catch(PDOException $e){
                        echo "Error: " . $e->getMessage();
                    }
                    $db = null;
                    echo "</table>";
                ?>
            </div>
        </section>
        <!-- This is the footer -->
        <footer class="footer">
            <div class="logo">
                <br>
                <img src="TC logo.jpeg" alt="The logo">
            </div>
            <div class="pagelinks">
                <h3>Webpages</h3>
                <a href="homepage.html">Book a ticket!</a> <br> <br>
                <a href="membership.html">Get Membership!</a> <br> <br>
                <a href="login.html">Login!</a>
                <!-- <a href=""></a> -->
            </div>
            <div class="aboutus">
                <h3>About Us</h3>
                <p>
                    Ticketing Corner provides cheap and relaiable tickets to their passengers.
                    We aim to make travelling longer distances by train easier and affordable.
                </p>
            </div>
            <div class="contactus">
                <h3>Contact Us</h3>
                <a href="">example_email@gmail.com</a> <br> <br>
                <a href="">example Instagram page</a> 
            </div>
        </footer>
    </body>
</html>

<style>
    .banner{
        height: 100vh;
        width: auto;
    }
    .searchtrain{
        color: white;
    }
</style>