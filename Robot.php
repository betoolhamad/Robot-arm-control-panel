<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Input Range Slider</title>
  <link rel="stylesheet" href="style.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

    * {
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
    }

    body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: #151515;
    }



    #rangeValue,
    #rangeValue2,
    #rangeValue3,
    #rangeValue4,
    #rangeValue5,
    #rangeValue6 {
      position: relative;
      display: block;
      text-align: center;
      font-size: 20px;
      color: #999;
      font-weight: 400;
      top: 10px;


    }


    .range {
      width: 400px;
      height: 15px;
      -webkit-appearance: none;
      background: #999;
      outline: none;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: inset 0 0 5px rgba(0, 0, 0, 1);

    }

    .range::-webkit-slider-thumb {
      -webkit-appearance: none;
      width: 15px;
      height: 15px;
      border-radius: 50%;
      background: #1f2756;
      cursor: pointer;
      border: 4px solid #333;
      box-shadow: -407px 0 0 400px #1f2756;
    }

    .container {

      text-align: center;
      margin-top: 30px;

    }

    .btn {
      border: 2px solid #1f2756;
      background: none;
      padding: 10px 20px;
      font-size: 15px;
      font-family: "montserrat";
      cursor: pointer;
      margin: 10px;
      transition: 0.2s;
      position: relative;
      overflow: hidden;

    }

    .btn1,
    .btn2 {
      color: #999;
    }

    .btn1:hover,
    .btn2:hover {
      color: #fff;
    }

    .btn::before {
      content: "";
      position: absolute;
      left: 0;
      width: 100%;
      height: 0%;
      background: #1f2756;
      z-index: -1;
      transition: 0.2s;

    }

    .btn1::before,
    .btn2::before {
      top: 0;
      border-radius: 0 0 50% 50%;

    }

    .btn1:hover::before,
    .btn2:hover::before {
      height: 180%;
    }

    div,
    .range {
      color: #999;


    }


    lable {

      position: relative;
      display: block;
      text-align: left;
      color: #999;
      font-family: "montserrat";
      padding-left: 20px;
      padding-bottom: 5px;

    }

    h1 {
      color: #999;
      font-family: "montserrat";
      margin-top: 30px;
    }
  </style>
</head>

<body>

  <h1>Control Panel</h1>

  <form action="Robot.php" method="post">
    <div>
      <span id="rangeValue">0</span>

      <lable>Motor 1</lable> <span>0</span>
      <Input class="range" type="range" name="Motor1" value="0" min="0" max="180" onChange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)"></Input>
      <span>180</span>
    </div>



    <div>
      <span id="rangeValue2">0</span>
      <lable>Motor 2</lable><span>0</span>
      <Input class="range" type="range" name="Motor2" value="0" min="0" max="180" onChange="rangeSlide2(this.value)" onmousemove="rangeSlide2(this.value)"></Input>
      <span>180</span>
    </div>


    <div id="">
      <span id="rangeValue3">0</span>
      <lable>Motor 3</lable> <span>0</span>
      <Input class="range" type="range" name="Motor3" value="0" min="0" max="180" onChange="rangeSlide3(this.value)" onmousemove="rangeSlide3(this.value)"></Input>
      <span>180</span>
    </div>


    <div id="">
      <span id="rangeValue4">0</span>
      <lable>Motor 4</lable><span>0</span>
      <Input class="range" type="range" name="Motor4" value="0" min="0" max="180" onChange="rangeSlide4(this.value)" onmousemove="rangeSlide4(this.value)"></Input>
      <span>180</span>
    </div>


    <div id="">
      <span id="rangeValue5">0</span>
      <lable>Motor 5</lable> <span>0</span>
      <Input class="range" type="range" name="Motor5" value="0" min="0" max="180" onChange="rangeSlide5(this.value)" onmousemove="rangeSlide5(this.value)"></Input>
      <span>180</span>
    </div>


    <div id="">
      <span id="rangeValue6">0</span>
      <lable>Motor 6</lable><span>0</span>
      <Input class="range" type="range" name="Motor6" value="0" min="0" max="180" onChange="rangeSlide6(this.value)" onmousemove="rangeSlide6(this.value)"></Input>
      <span>180</span>
    </div>


    <script type="text/javascript">
      function rangeSlide(value) {
        document.getElementById('rangeValue').innerHTML = value;
      }

      function rangeSlide2(value) {
        document.getElementById('rangeValue2').innerHTML = value;
      }

      function rangeSlide3(value) {
        document.getElementById('rangeValue3').innerHTML = value;
      }

      function rangeSlide4(value) {
        document.getElementById('rangeValue4').innerHTML = value;
      }

      function rangeSlide5(value) {
        document.getElementById('rangeValue5').innerHTML = value;
      }

      function rangeSlide6(value) {
        document.getElementById('rangeValue6').innerHTML = value;
      }
    </script>

    <div class="container">
      <button class="btn btn1" name="save">Save</button>
      <button class="btn btn1" name="ON">Run</button>
    </div>
  </form>

  <?php

  $conn = new mysqli('localhost', 'root', '', 'Motors');
  error_reporting(E_ALL & ~E_NOTICE);
  ini_set('display_errors', 1);

  $Motor1 = $_POST["Motor1"];
  $Motor2 = $_POST["Motor2"];
  $Motor3 = $_POST["Motor3"];
  $Motor4 = $_POST["Motor4"];
  $Motor5 = $_POST["Motor5"];
  $Motor6 = $_POST["Motor6"];



  if (isset($_POST["save"])) {
    $stmt = $conn->prepare("INSERT INTO Engines (Motor1,Motor2,Motor3,Motor4,Motor5,Motor6) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param("iiiiii", $Motor1, $Motor2, $Motor3, $Motor4, $Motor5, $Motor6);
    $stmt->execute();
    echo "Saved successfully";
  }

  if (isset($_POST["ON"])) {
    $stmt = $conn->prepare("INSERT INTO Run (ON_OFF,id) VALUES (1,NULL);");
    $stmt->execute();
    echo "Ran successfully";
  }


  ?>




</body>

</html>