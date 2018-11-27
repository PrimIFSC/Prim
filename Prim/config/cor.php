<?php
include '../cabe/cabecalho.php';

?>
<body>
    <form action="<?=$url?>mudarCor.php" method="post">    
        <select name="cor">
        <option <button value="#4CAF50" class="button " onclick="green()"></option>
        <option <button value="#008CBA" class="button button2" onclick="blue()"></option>
        <option <button value="#f44336" class="button button3" onclick="red()"></option>
        <option <button value="#e7e7e7" class="button button4" onclick="gray()"></option>
        <option <button value="#555555" class="button button5" onclick="black()"></option>
        <option <button value="#DDA0DD" class="button button6" onclick="plum()"></option>
        <option <button value="#ffa500" class="button button7" onclick="orange()"></option>  
        </select>
    <button type="submit">Salvar</button>
    </form>   


<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
.button6 {background-color: #DDA0DD;} /* Plum */
.button7 {background-color: #ffa500;} /* Orange */
</style>

<script>
function green() {
    document.body.style.backgroundColor = "#4CAF50";
}

function blue() {
    document.body.style.backgroundColor = "#008CBA";
}

function red() {
    document.body.style.backgroundColor = "#f44336";
}

function gray() {
    document.body.style.backgroundColor = "#e7e7e7";
}

function black() {
    document.body.style.backgroundColor = "#555555";
}

function plum() {
    document.body.style.backgroundColor = "#DDA0DD";
}

function orange() {
    document.body.style.backgroundColor = "#ffa500";
}

</script>

</body>