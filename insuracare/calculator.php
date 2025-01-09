<?php
include('functions/userfunctions.php');


?>
<?php
include('includes/calculator_header.php'); 
?>
    <div class="main-container">
    <div class="container">
        <h1>Premium Calculator</h1>
        <form id="premiumForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label>Age: (8-50)</label>
            <input type="number" id="age" name="age" min="8" max="50" required>

            <label>Choose Calculation Mode:</label>
            <div class="radio-group">
                <label><input type="radio" name="calcMode" value="sumAssured" checked> Sum Assured</label>
                <label><input type="radio" name="calcMode" value="premium"> Premium</label>
            </div>

            <div id="sumAssuredInput">
                <label for="sumAssured">Sum Assured (Min: ₹2,00,000):</label>
                <input type="number" id="sumAssured" name="sumAssured" min="200000">
            </div>

            <div id="premiumInput" style="display: none;">
                <label for="premium">Enter Premium:</label>
                <input type="number" id="premium" name="premium">
            </div>

            <label for="term">Policy Term (Years):</label>
            <input type="number" id="term" name="term" min="5" max="40" required>

            <label for="bonus">Bonus:</label>
            <input type="number" id="bonus" name="bonus" value="0">

            <label>Additional Options:</label>
            <div class="checkbox-group">
                <label><input type="checkbox" id="adDb"> AD and DB</label>
                <label><input type="checkbox" id="ageExtra"> Age Extra</label>
                <label><input type="checkbox" id="termRider"> Term Rider</label>
            </div>

            <label for="maturity">Maturity Settlement:</label>
            <select id="maturity" name="maturity">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>

            <label for="paymentMode">Payment Mode:</label>
            <select id="paymentMode">
                <option value="yearly">Yearly</option>
                <option value="halfYearly">Half-Yearly</option>
                <option value="quarterly">Quarterly</option>
                <option value="monthly">Monthly</option>
            </select>

            <button type="button" onclick="calculatePremium()">Calculate</button>
            <style>
                button {
    background-color: #0d1126 ;
    color: #fff;
    border: none;
    cursor: pointer;
    padding: 10px;
    font-size: 16px;
}
button:hover {
    background-color: #1a2457 ;
}
            </style>
        </form>
        <div id="result"></div>
    </div>
    </div>
    <?php include('includes/calculator_footer.php'); ?>


