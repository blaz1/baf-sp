<?php include 'header.html' ?>

<title>Create new bet</title>
</head>

<body>
    <?php include 'navigation-known.html'; ?>
    <div id="createBet" class="content">
        <h1>Create new bet</h1>
        <form id="createBetForm">
            <div class="column floatLeft">
                <div class="row">
                    <div class="col1"><label>Name: </label><br></div>
                    <div class="col2"><input size="39" placeholder="Name" id="newFormName"></div>
                </div>
                <div class="row desc">
                    <div class="col1"><label>Description: </label><br></div>
                    <div class="col2"><textarea rows="5" cols="30" placeholder="Enter description" id="newFormDesc"></textarea></div>
                </div>
                <div class="row">
                    <div class="col1"><label>Start time: </label><br></div>
                    <div class="col2"><input type="date" size="39" placeholder="dd-mm-yyyy" id="newFormStart"></div>
                </div>
                <div class="row">
                    <div class="col1"><label>End time: </label><br></div>
                    <div class="col2"><input type="date"size="39"placeholder="dd-mm-yyyy" id="newFormEnd"></div>
                </div>
                <div class="row">
                    <div class="col1"><label>Reward: </label><br></div>
                    <div class="col2"><input size="39"placeholder="Reward" id="newFormReward"></div>
                </div>  
            </div> 

            <div class="column floatRight">
                <div class="row">
                    <div class="col1">
                        <label>Opponent(s):</label>
                    </div>
                    <div class="col2">
                        <input class="opponentInput" id="newFormOpp" placeholder="Add opponent" onkeydown="if (event.keyCode == 13) addOpponent()" onblur='checkRuleAndOpp("#opponents", "#newFormOpp");'>
                        <button class="addButton" type="button" value="Add" onclick="addOpponent();">Add</button>
                        <div id="opponents">
                            <!--<p class="opponent" id="opp1">Janez NOvak<span class="deleteOpp" onclick="deleteOpp('1');">X</span></p>-->
                        </div>
                    </div>
                </div>
                <div class="row">
                        <input id="addRule" placeholder="Add rule" onkeydown="if (event.keyCode == 13) addNewRule()" onblur='checkRuleAndOpp("#rules", "#addRule");'>
                        <button class="addRuleButton" id="newFormRuleButton" type="button" onclick="addNewRule();">Add</button>
                        <div id="rules">
                            <!--<p class="rule" id="rule1">PRvo pravilo<span class="deleteRule" onclick="deleteRule('1');">X</span></p>
                           <p class="rule" id="rule2">drugovo pravilo<span class="deleteRule" onclick="deleteRule('2');">X</span></p>
                           <p class="rule" id="rule3">tretje pravilo<span class="deleteRule" onclick="deleteRule('3');">X</span></p>    -->  
                       </div>                                      
                </div>

            </div>     
            <input type="button" id="createBetButton" value="Create" onclick="validateNewBet();">              
        </form>
    </div>
</body>
</html>