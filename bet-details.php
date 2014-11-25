<?php

$conn = new mysqli("mysql.lrk.si", "artac_blaz", "zatlok");
$betid = $_GET['betid'];

$sql = "SELECT * from artac_blaz_b1.bets WHERE id_bets='$betid'";
$result = $conn->query($sql);
$bet = $result->fetch_assoc();

 ?>

<?php include 'header.html' ?>

<title>Create new bet</title>
</head>

<body>
    <?php include 'navigation-known.html'; ?>
    <div id="createBet" class="content">
        <h1><?php echo $bet['name'] ?></h1>
            <div class="column floatLeft">
                <div class="row">
                    <div class="col1"><label>Name: </label><br></div>
                    <div class="col2"><p><?php echo $bet['name'] ?></p></div>
                </div>
                <div class="row desc">
                    <div class="col1"><label>Description: </label><br></div>
                    <div class="col2"><p><?php echo $bet['description'] ?></p></div>
                </div>
                <div class="row">
                    <div class="col1"><label>Start time: </label><br></div>
                    <div class="col2"><p><?php echo $bet['start_time'] ?></p></div>
                </div>
                <div class="row">
                    <div class="col1"><label>End time: </label><br></div>
                    <div class="col2"><p><?php echo $bet['end_time'] ?></p></div>
                </div>
                <div class="row">
                    <div class="col1"><label>Reward: </label><br></div>
                    <div class="col2"><p><?php echo $bet['reward'] ?></p></div>
                </div>  
            </div> 

            <div class="column floatRight">
                <div class="row">
                    <div class="col1">
                        <label>Opponent(s):</label>
                    </div>
                    <div class="col2">
                        <div id="opponents">
                            <?php   
                                $opponents = explode(";", $bet["opponents"]);
                                for ($i=0; $i < sizeof($opponents); $i++) { 
                                    echo "<p class='opponent'>".$opponents[$i]."</p>";
                                }
                                //echo "<p class='opponent'>".$opponents."</p>";
                           ?>
                            <!--<p class="opponent" id="opp1">Janez NOvak<span class="deleteOpp" onclick="deleteOpp('1');">X</span></p>-->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label>Rules:</label>
                         <div id="rules">
                            <!--<p class="rule" id="rule1">PRvo pravilo<span class="deleteRule" onclick="deleteRule('1');">X</span></p>
                           <p class="rule" id="rule2">drugovo pravilo<span class="deleteRule" onclick="deleteRule('2');">X</span></p>
                           <p class="rule" id="rule3">tretje pravilo<span class="deleteRule" onclick="deleteRule('3');">X</span></p>    -->  
                           <?php   
                                $sql = "SELECT * FROM artac_blaz_b1.rules WHERE bet_id=$betid";
                                $rules = $conn->query($sql);

                                while ($rule = $rules->fetch_assoc()) {
                                    echo "<p class='rule'>".$rule["description"]."</p>";
                                }
                           ?>
                       </div>                                      
                </div>

            </div>
    </div>
</body>
</html>        
    </div>
</body>
</html>