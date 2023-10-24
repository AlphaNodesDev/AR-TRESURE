<!DOCTYPE html>
<html lang="en" >
<?php include("./conponents/head-home.php");
include("./functions/db/database.php");
include("./functions/check/login-check.php");

$sql = "SELECT winner_name FROM winner";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);
$winner_name = $row['winner_name'];
}
?>
<head>
  <meta charset="UTF-8">
  <title> Among Us </title>
   <meta charset="UTF-8">,
  <meta name="viewport" content="width=device-width, initial-scale=1.0">,
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">



<style>
*,
*:before,
*:after{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}

html {
  overflow: hidden;
  max-width: 100vw;
  max-height: 100vh;
}

body {
  margin: 0;
  padding: 0;
  height: 100vh;
  width: 100vw;
  position: relative;
  background-color: #000000;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
}

.victory {
  font-family: 'Press Start 2P', cursive;
  font-size: 4rem;
  font-weight: 400;
  color: #018bfb;
  position: fixed;
  top: 40px;
  left: 50%; /* Align the element horizontally in the center */
  transform: translateX(-50%); /* Correct the horizontal alignment */
}


.victory:after {
  content: "Victory";
}

.imposter {
  margin-top: 100px;
  display: flex;
}

.spacesuit {
  position: relative;
}

.chest-and-head {
  width: 140px;
  height: 200px;
  background: #852631;
  position: relative;
  border: 10px solid #000000;
  border-radius: 60px 80px 0 0;
  border-bottom: none;
}

.chest-and-head:after {
  content: "";
  width: 92%;
  height: 85%;
  background: #eb432f;
  position: absolute;
  left: 4%;
  /* top: -1px; {*/
  z-index: 2;
  border-radius: 58% 70% 28% 42% / 28% 56% 88% 89%;;
}

.legs {
  height: 50px;
  width: 60px;
  position: relative;
  z-index: 2;
  background: #852631;
  border: 10px solid #000000;
  border-top: none;
  border-radius: 0 0 22px 22px;
}

.legs::after {
  content: "";
  height: 45px;
  width: 60px;
  position: absolute;
  left: 70px;
  background: #852631;
  border: 10px solid #000000;
  border-top: none;
  border-radius: 0 0 22px 22px;
}

.legs::before {
  content: "";
  height: 10px;
  width: 55px;
  background: #852631;
  background-color: #000000;
  position: absolute;
  top: -10px;
  left: 40px;
  border-radius: 0 0 10px 0;
}

.arm {
  height: 120px;
  width: 35px;
  background: #eb432f;
  position: absolute;
  top: 75px;
  left: -35px;
  border: 10px solid #000000;
  border-right: none;
  border-radius: 20px 0 0 22px;
}

.arm:after {
  content: "";
  width: 25px; 
  height: 80px;
  background: #852631;
  position: absolute;
  top: 20px;
  border-radius: 12px 0 0 10px;
}

.helmet-glass {
  width: 110px;
  height: 75px;
  background: #225381;
  position: absolute;
  z-index: 3;
  top: 40px;
  left: 50px;
  border: 10px solid #000000;
  border-radius: 25px 50px 30px 30px;
}

.helmet-glass:after {
  content: "";
  width: 85%;
  height: 65%;
  background: #71d4ec;
  left: 13px;
  position: absolute;
  z-index: 4;
  border-radius: 0 28px 3px 30px;
}

.helmet-glass:before {
  content: "";
  width: 45%;
  height: 22%;
  background: #ffffff;
  position: absolute;
  left: 40px;
  top: 5px;
  z-index: 5;
  border-radius: 10px;
  transform: rotate(6deg);
}

.background {
  width: 70vw;
  height: 1vh;
  margin-top: 30px;
  background: #59a4a3;
  position: absolute;
  z-index: -1;
  border-radius: 50%;
  box-sizing: border-box;
  box-shadow: 6px 6px 80px 110px #59a4a3;
}

.name {
  font-family: 'Open Sans', sans-serif;
  font-size: 3.5rem;
  font-weight: 600;
  color: #c90108;
  position: fixed;
  margin-top: 200px;
}


body:before{
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  width: 200%;
  height: 100%;
  background: linear-gradient(to right, transparent, #000, #000);
  z-index: 30;
  animation: animate 2s linear forwards;
}
@keyframes animate{
  0%{
    right: 0;
  }
  100%{
    right: -200%;
  }
}

@media only screen and (max-width: 900px) {
  .imposter, .victory, .name {
    zoom: 60%;
  }
  .background {
    zoom: .7;
    margin-top: 10px;
  }
}





body {
  margin: 0;
  overflow: hidden;
}

sky {
  display: block;
  background: black;
  width: 100vw;
  height: 100vh;
}

star {
  border-radius: 50%;
  background: white;
  position: absolute;
  -webkit-animation: star linear infinite;
          animation: star linear infinite;
}
star:nth-child(1) {
  width: 5px;
  height: 5px;
  -webkit-animation-duration: 34s;
          animation-duration: 34s;
  -webkit-animation-delay: -38s;
          animation-delay: -38s;
  top: 13vh;
}
star:nth-child(2) {
  width: 4px;
  height: 4px;
  -webkit-animation-duration: 32s;
          animation-duration: 32s;
  -webkit-animation-delay: -18s;
          animation-delay: -18s;
  top: 89vh;
}
star:nth-child(3) {
  width: 5px;
  height: 5px;
  -webkit-animation-duration: 36s;
          animation-duration: 36s;
  -webkit-animation-delay: -14s;
          animation-delay: -14s;
  top: 32vh;
}
star:nth-child(4) {
  width: 7px;
  height: 7px;
  -webkit-animation-duration: 33s;
          animation-duration: 33s;
  -webkit-animation-delay: -31s;
          animation-delay: -31s;
  top: 8vh;
}
star:nth-child(5) {
  width: 9px;
  height: 9px;
  -webkit-animation-duration: 18s;
          animation-duration: 18s;
  -webkit-animation-delay: -20s;
          animation-delay: -20s;
  top: 54vh;
}
star:nth-child(6) {
  width: 4px;
  height: 4px;
  -webkit-animation-duration: 21s;
          animation-duration: 21s;
  -webkit-animation-delay: -12s;
          animation-delay: -12s;
  top: 67vh;
}
star:nth-child(7) {
  width: 8px;
  height: 8px;
  -webkit-animation-duration: 43s;
          animation-duration: 43s;
  -webkit-animation-delay: -27s;
          animation-delay: -27s;
  top: 43vh;
}
star:nth-child(8) {
  width: 7px;
  height: 7px;
  -webkit-animation-duration: 32s;
          animation-duration: 32s;
  -webkit-animation-delay: -8s;
          animation-delay: -8s;
  top: 23vh;
}
star:nth-child(9) {
  width: 5px;
  height: 5px;
  -webkit-animation-duration: 35s;
          animation-duration: 35s;
  -webkit-animation-delay: -16s;
          animation-delay: -16s;
  top: 3vh;
}
star:nth-child(10) {
  width: 7px;
  height: 7px;
  -webkit-animation-duration: 22s;
          animation-duration: 22s;
  -webkit-animation-delay: 0s;
          animation-delay: 0s;
  top: 24vh;
}
star:nth-child(11) {
  width: 5px;
  height: 5px;
  -webkit-animation-duration: 17s;
          animation-duration: 17s;
  -webkit-animation-delay: -37s;
          animation-delay: -37s;
  top: 74vh;
}
star:nth-child(12) {
  width: 8px;
  height: 8px;
  -webkit-animation-duration: 21s;
          animation-duration: 21s;
  -webkit-animation-delay: -3s;
          animation-delay: -3s;
  top: 64vh;
}
star:nth-child(13) {
  width: 9px;
  height: 9px;
  -webkit-animation-duration: 17s;
          animation-duration: 17s;
  -webkit-animation-delay: 0s;
          animation-delay: 0s;
  top: 34vh;
}
star:nth-child(14) {
  width: 10px;
  height: 10px;
  -webkit-animation-duration: 25s;
          animation-duration: 25s;
  -webkit-animation-delay: -37s;
          animation-delay: -37s;
  top: 98vh;
}
star:nth-child(15) {
  width: 10px;
  height: 10px;
  -webkit-animation-duration: 26s;
          animation-duration: 26s;
  -webkit-animation-delay: -23s;
          animation-delay: -23s;
  top: 72vh;
}
star:nth-child(16) {
  width: 6px;
  height: 6px;
  -webkit-animation-duration: 28s;
          animation-duration: 28s;
  -webkit-animation-delay: -26s;
          animation-delay: -26s;
  top: 83vh;
}
star:nth-child(17) {
  width: 5px;
  height: 5px;
  -webkit-animation-duration: 44s;
          animation-duration: 44s;
  -webkit-animation-delay: -37s;
          animation-delay: -37s;
  top: 66vh;
}
star:nth-child(18) {
  width: 10px;
  height: 10px;
  -webkit-animation-duration: 22s;
          animation-duration: 22s;
  -webkit-animation-delay: -22s;
          animation-delay: -22s;
  top: 87vh;
}
star:nth-child(19) {
  width: 4px;
  height: 4px;
  -webkit-animation-duration: 41s;
          animation-duration: 41s;
  -webkit-animation-delay: -27s;
          animation-delay: -27s;
  top: 84vh;
}
star:nth-child(20) {
  width: 10px;
  height: 10px;
  -webkit-animation-duration: 16s;
          animation-duration: 16s;
  -webkit-animation-delay: -7s;
          animation-delay: -7s;
  top: 83vh;
}
star:nth-child(21) {
  width: 9px;
  height: 9px;
  -webkit-animation-duration: 38s;
          animation-duration: 38s;
  -webkit-animation-delay: -32s;
          animation-delay: -32s;
  top: 56vh;
}
star:nth-child(22) {
  width: 10px;
  height: 10px;
  -webkit-animation-duration: 45s;
          animation-duration: 45s;
  -webkit-animation-delay: -1s;
          animation-delay: -1s;
  top: 30vh;
}
star:nth-child(23) {
  width: 10px;
  height: 10px;
  -webkit-animation-duration: 35s;
          animation-duration: 35s;
  -webkit-animation-delay: -10s;
          animation-delay: -10s;
  top: 17vh;
}
star:nth-child(24) {
  width: 5px;
  height: 5px;
  -webkit-animation-duration: 25s;
          animation-duration: 25s;
  -webkit-animation-delay: -19s;
          animation-delay: -19s;
  top: 29vh;
}
star:nth-child(25) {
  width: 7px;
  height: 7px;
  -webkit-animation-duration: 22s;
          animation-duration: 22s;
  -webkit-animation-delay: -27s;
          animation-delay: -27s;
  top: 47vh;
}
star:nth-child(26) {
  width: 8px;
  height: 8px;
  -webkit-animation-duration: 16s;
          animation-duration: 16s;
  -webkit-animation-delay: -39s;
          animation-delay: -39s;
  top: 62vh;
}
star:nth-child(27) {
  width: 4px;
  height: 4px;
  -webkit-animation-duration: 23s;
          animation-duration: 23s;
  -webkit-animation-delay: -4s;
          animation-delay: -4s;
  top: 67vh;
}
star:nth-child(28) {
  width: 8px;
  height: 8px;
  -webkit-animation-duration: 37s;
          animation-duration: 37s;
  -webkit-animation-delay: -4s;
          animation-delay: -4s;
  top: 45vh;
}
star:nth-child(29) {
  width: 5px;
  height: 5px;
  -webkit-animation-duration: 36s;
          animation-duration: 36s;
  -webkit-animation-delay: -24s;
          animation-delay: -24s;
  top: 98vh;
}
star:nth-child(30) {
  width: 7px;
  height: 7px;
  -webkit-animation-duration: 24s;
          animation-duration: 24s;
  -webkit-animation-delay: -33s;
          animation-delay: -33s;
  top: 41vh;
}
star:nth-child(31) {
  width: 10px;
  height: 10px;
  -webkit-animation-duration: 23s;
          animation-duration: 23s;
  -webkit-animation-delay: -20s;
          animation-delay: -20s;
  top: 8vh;
}
star:nth-child(32) {
  width: 8px;
  height: 8px;
  -webkit-animation-duration: 43s;
          animation-duration: 43s;
  -webkit-animation-delay: -21s;
          animation-delay: -21s;
  top: 37vh;
}
star:nth-child(33) {
  width: 6px;
  height: 6px;
  -webkit-animation-duration: 24s;
          animation-duration: 24s;
  -webkit-animation-delay: -24s;
          animation-delay: -24s;
  top: 34vh;
}
star:nth-child(34) {
  width: 9px;
  height: 9px;
  -webkit-animation-duration: 37s;
          animation-duration: 37s;
  -webkit-animation-delay: -19s;
          animation-delay: -19s;
  top: 0vh;
}
star:nth-child(35) {
  width: 9px;
  height: 9px;
  -webkit-animation-duration: 30s;
          animation-duration: 30s;
  -webkit-animation-delay: -37s;
          animation-delay: -37s;
  top: 74vh;
}
star:nth-child(36) {
  width: 6px;
  height: 6px;
  -webkit-animation-duration: 37s;
          animation-duration: 37s;
  -webkit-animation-delay: -15s;
          animation-delay: -15s;
  top: 95vh;
}
star:nth-child(37) {
  width: 4px;
  height: 4px;
  -webkit-animation-duration: 29s;
          animation-duration: 29s;
  -webkit-animation-delay: -12s;
          animation-delay: -12s;
  top: 87vh;
}
star:nth-child(38) {
  width: 7px;
  height: 7px;
  -webkit-animation-duration: 28s;
          animation-duration: 28s;
  -webkit-animation-delay: -6s;
          animation-delay: -6s;
  top: 65vh;
}
star:nth-child(39) {
  width: 5px;
  height: 5px;
  -webkit-animation-duration: 43s;
          animation-duration: 43s;
  -webkit-animation-delay: -39s;
          animation-delay: -39s;
  top: 45vh;
}
star:nth-child(40) {
  width: 8px;
  height: 8px;
  -webkit-animation-duration: 44s;
          animation-duration: 44s;
  -webkit-animation-delay: -31s;
          animation-delay: -31s;
  top: 25vh;
}
star:nth-child(41) {
  width: 5px;
  height: 5px;
  -webkit-animation-duration: 17s;
          animation-duration: 17s;
  -webkit-animation-delay: -33s;
          animation-delay: -33s;
  top: 37vh;
}
star:nth-child(42) {
  width: 4px;
  height: 4px;
  -webkit-animation-duration: 33s;
          animation-duration: 33s;
  -webkit-animation-delay: -27s;
          animation-delay: -27s;
  top: 76vh;
}
star:nth-child(43) {
  width: 6px;
  height: 6px;
  -webkit-animation-duration: 21s;
          animation-duration: 21s;
  -webkit-animation-delay: -22s;
          animation-delay: -22s;
  top: 2vh;
}
star:nth-child(44) {
  width: 6px;
  height: 6px;
  -webkit-animation-duration: 17s;
          animation-duration: 17s;
  -webkit-animation-delay: -38s;
          animation-delay: -38s;
  top: 11vh;
}
star:nth-child(45) {
  width: 4px;
  height: 4px;
  -webkit-animation-duration: 45s;
          animation-duration: 45s;
  -webkit-animation-delay: -15s;
          animation-delay: -15s;
  top: 74vh;
}
star:nth-child(46) {
  width: 7px;
  height: 7px;
  -webkit-animation-duration: 31s;
          animation-duration: 31s;
  -webkit-animation-delay: -35s;
          animation-delay: -35s;
  top: 12vh;
}
star:nth-child(47) {
  width: 9px;
  height: 9px;
  -webkit-animation-duration: 33s;
          animation-duration: 33s;
  -webkit-animation-delay: -14s;
          animation-delay: -14s;
  top: 86vh;
}
star:nth-child(48) {
  width: 8px;
  height: 8px;
  -webkit-animation-duration: 20s;
          animation-duration: 20s;
  -webkit-animation-delay: -32s;
          animation-delay: -32s;
  top: 84vh;
}
star:nth-child(49) {
  width: 9px;
  height: 9px;
  -webkit-animation-duration: 20s;
          animation-duration: 20s;
  -webkit-animation-delay: -30s;
          animation-delay: -30s;
  top: 7vh;
}
star:nth-child(50) {
  width: 10px;
  height: 10px;
  -webkit-animation-duration: 37s;
          animation-duration: 37s;
  -webkit-animation-delay: -14s;
          animation-delay: -14s;
  top: 69vh;
}
star:nth-child(51) {
  width: 6px;
  height: 6px;
  -webkit-animation-duration: 30s;
          animation-duration: 30s;
  -webkit-animation-delay: -17s;
          animation-delay: -17s;
  top: 76vh;
}
star:nth-child(52) {
  width: 4px;
  height: 4px;
  -webkit-animation-duration: 39s;
          animation-duration: 39s;
  -webkit-animation-delay: -13s;
          animation-delay: -13s;
  top: 44vh;
}
star:nth-child(53) {
  width: 4px;
  height: 4px;
  -webkit-animation-duration: 38s;
          animation-duration: 38s;
  -webkit-animation-delay: -10s;
          animation-delay: -10s;
  top: 51vh;
}
star:nth-child(54) {
  width: 10px;
  height: 10px;
  -webkit-animation-duration: 39s;
          animation-duration: 39s;
  -webkit-animation-delay: -28s;
          animation-delay: -28s;
  top: 37vh;
}
star:nth-child(55) {
  width: 8px;
  height: 8px;
  -webkit-animation-duration: 37s;
          animation-duration: 37s;
  -webkit-animation-delay: -33s;
          animation-delay: -33s;
  top: 21vh;
}
star:nth-child(56) {
  width: 10px;
  height: 10px;
  -webkit-animation-duration: 24s;
          animation-duration: 24s;
  -webkit-animation-delay: 0s;
          animation-delay: 0s;
  top: 73vh;
}
star:nth-child(57) {
  width: 9px;
  height: 9px;
  -webkit-animation-duration: 44s;
          animation-duration: 44s;
  -webkit-animation-delay: -19s;
          animation-delay: -19s;
  top: 66vh;
}
star:nth-child(58) {
  width: 9px;
  height: 9px;
  -webkit-animation-duration: 33s;
          animation-duration: 33s;
  -webkit-animation-delay: -26s;
          animation-delay: -26s;
  top: 21vh;
}
star:nth-child(59) {
  width: 5px;
  height: 5px;
  -webkit-animation-duration: 18s;
          animation-duration: 18s;
  -webkit-animation-delay: -15s;
          animation-delay: -15s;
  top: 29vh;
}
star:nth-child(60) {
  width: 10px;
  height: 10px;
  -webkit-animation-duration: 17s;
          animation-duration: 17s;
  -webkit-animation-delay: -17s;
          animation-delay: -17s;
  top: 99vh;
}
star:nth-child(61) {
  width: 4px;
  height: 4px;
  -webkit-animation-duration: 16s;
          animation-duration: 16s;
  -webkit-animation-delay: -17s;
          animation-delay: -17s;
  top: 97vh;
}
star:nth-child(62) {
  width: 6px;
  height: 6px;
  -webkit-animation-duration: 34s;
          animation-duration: 34s;
  -webkit-animation-delay: -39s;
          animation-delay: -39s;
  top: 77vh;
}
star:nth-child(63) {
  width: 8px;
  height: 8px;
  -webkit-animation-duration: 30s;
          animation-duration: 30s;
  -webkit-animation-delay: -32s;
          animation-delay: -32s;
  top: 37vh;
}
star:nth-child(64) {
  width: 7px;
  height: 7px;
  -webkit-animation-duration: 45s;
          animation-duration: 45s;
  -webkit-animation-delay: -36s;
          animation-delay: -36s;
  top: 17vh;
}
star:nth-child(65) {
  width: 10px;
  height: 10px;
  -webkit-animation-duration: 24s;
          animation-duration: 24s;
  -webkit-animation-delay: -5s;
          animation-delay: -5s;
  top: 46vh;
}
star:nth-child(66) {
  width: 8px;
  height: 8px;
  -webkit-animation-duration: 18s;
          animation-duration: 18s;
  -webkit-animation-delay: -4s;
          animation-delay: -4s;
  top: 74vh;
}
star:nth-child(67) {
  width: 4px;
  height: 4px;
  -webkit-animation-duration: 29s;
          animation-duration: 29s;
  -webkit-animation-delay: -28s;
          animation-delay: -28s;
  top: 25vh;
}
star:nth-child(68) {
  width: 10px;
  height: 10px;
  -webkit-animation-duration: 40s;
          animation-duration: 40s;
  -webkit-animation-delay: -33s;
          animation-delay: -33s;
  top: 40vh;
}
star:nth-child(69) {
  width: 9px;
  height: 9px;
  -webkit-animation-duration: 29s;
          animation-duration: 29s;
  -webkit-animation-delay: -19s;
          animation-delay: -19s;
  top: 82vh;
}
star:nth-child(70) {
  width: 5px;
  height: 5px;
  -webkit-animation-duration: 21s;
          animation-duration: 21s;
  -webkit-animation-delay: -12s;
          animation-delay: -12s;
  top: 1vh;
}

@-webkit-keyframes star {
  from {
    transform: translate3d(-100%, 0, 1px);
  }
  to {
    transform: translate3d(100vw, 0, 1px);
  }
}

@keyframes star {
  from {
    transform: translate3d(-100%, 0, 1px);
  }
  to {
    transform: translate3d(100vw, 0, 1px);
  }
}
boi {
  position: absolute;
  left: 0%;
  top: 50%;
  -webkit-animation: eject 5s infinite linear;
          animation: eject 5s infinite linear;
  transform-origin: 13vmin 25vmin;
  transform: translate3d(-50vmin, -20vmin, 0px) rotate(0turn);
}

@-webkit-keyframes eject {
  0% {
    transform: translate3d(-50vmin, -20vmin, 0px) rotate(0turn);
  }
  50%, 100% {
    transform: translate3d(100vw, -20vmin, 0px) rotate(-2turn);
  }
}

@keyframes eject {
  0% {
    transform: translate3d(-50vmin, -20vmin, 0px) rotate(0turn);
  }
  50%, 100% {
    transform: translate3d(100vw, -20vmin, 0px) rotate(-2turn);
  }
}
eye {
  position: absolute;
  left: 13vmin;
  top: 9vmin;
  border: 6px solid black;
  width: 10vmin;
  height: 11vmin;
  border-radius: 26vmin;
  transform: rotate(18deg) scale(1, 0.5);
  border-top-width: 12px;
  border-bottom-width: 12px;
  background: radial-gradient(ellipse at 31% 20%, #f9fff7 15%, #fff0 20%), radial-gradient(ellipse at 50% 40%, #82c9e4 65%, #fff0 70%), radial-gradient(ellipse at 60% 30%, #40646f 100%, #fff0 100%);
  background-size: 140% 100%, 96% 80%, 100% 100%;
  background-repeat: no-repeat;
}

belly {
  position: absolute;
  width: 15vmin;
  height: 25vmin;
  background: #0c9fc4 radial-gradient(ellipse at 42% 33%, #14ebe1 50%, #fff0 52%);
  border-radius: 10vmin;
  top: 7vmin;
  left: 6vmin;
  transform: rotate(10deg);
  background-size: 140% 114%;
  border: 7px solid black;
}

backpack {
  position: absolute;
  left: 1.2vmin;
  top: 14vmin;
  background: #14ebe1;
  width: 7vmin;
  height: 11vmin;
  border-radius: 3vmin;
  transform: rotate(7deg);
  border: 7px solid black;
}

leftleg {
  position: absolute;
  left: 1vmin;
  top: 25vmin;
  width: 11vmin;
  height: 11vmin;
  background: radial-gradient(ellipse at 20% 70%, #0c9fc4 15%, #fff0 15%), radial-gradient(ellipse at 0% 29%, #fff0 40%, #0c9fc4 40%);
  background-repeat: no-repeat;
  border-radius: 20vmin;
  background-size: 150% 96%, 100% 100%;
}
leftleg:not(:nth-child(2)) {
  -webkit-clip-path: polygon(-10% 110%, 100% 110%, 110% 60%, 70% 20%, -5% 30%);
          clip-path: polygon(-10% 110%, 100% 110%, 110% 60%, 70% 20%, -5% 30%);
}
leftleg:nth-child(2) {
  filter: url(#inset);
}

rightleg {
  position: absolute;
  left: 4vmin;
  top: 28vmin;
  width: 11vmin;
  height: 11vmin;
  background: radial-gradient(ellipse at 20% 70%, #0c9fc4 15%, #fff0 15%), radial-gradient(ellipse at 0% 29%, #fff0 40%, #0c9fc4 40%);
  background-repeat: no-repeat;
  border-radius: 20vmin;
  background-size: 150% 96%, 100% 100%;
  filter: url(#inset);
}

h1 {
  position: absolute;
  color: white;
  font-family: arial, sans-serif;
  left: 0;
  top: 50%;
  width: 100%;
  font-weight: 400;
  font-size: 20px;
  text-align: center;
  transform: translateY(-50%);
}
@media (min-width: 600px) {
  h1 {
    font-size: 30px;
  }
}

span {
  display: inline-block;
}
span.w {
  display: inline;
}
span:nth-child(1) {
  -webkit-animation: type1 5s infinite linear both;
          animation: type1 5s infinite linear both;
}
@-webkit-keyframes type1 {
  0%, 21.5% {
    width: 0px;
    opacity: 0;
  }
  22%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
@keyframes type1 {
  0%, 21.5% {
    width: 0px;
    opacity: 0;
  }
  22%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
span:nth-child(2) {
  -webkit-animation: type2 5s infinite linear both;
          animation: type2 5s infinite linear both;
}
@-webkit-keyframes type2 {
  0%, 23% {
    width: 0px;
    opacity: 0;
  }
  23.5%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
@keyframes type2 {
  0%, 23% {
    width: 0px;
    opacity: 0;
  }
  23.5%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
span:nth-child(3) {
  -webkit-animation: type3 5s infinite linear both;
          animation: type3 5s infinite linear both;
}
@-webkit-keyframes type3 {
  0%, 24.5% {
    width: 0px;
    opacity: 0;
  }
  25%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
@keyframes type3 {
  0%, 24.5% {
    width: 0px;
    opacity: 0;
  }
  25%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
span:nth-child(4) {
  -webkit-animation: type4 5s infinite linear both;
          animation: type4 5s infinite linear both;
}
@-webkit-keyframes type4 {
  0%, 26% {
    width: 0px;
    opacity: 0;
  }
  26.5%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
@keyframes type4 {
  0%, 26% {
    width: 0px;
    opacity: 0;
  }
  26.5%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
span:nth-child(5) {
  -webkit-animation: type5 5s infinite linear both;
          animation: type5 5s infinite linear both;
}
@-webkit-keyframes type5 {
  0%, 27.5% {
    width: 0px;
    opacity: 0;
  }
  28%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
@keyframes type5 {
  0%, 27.5% {
    width: 0px;
    opacity: 0;
  }
  28%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
span:nth-child(6) {
  -webkit-animation: type6 5s infinite linear both;
          animation: type6 5s infinite linear both;
}
@-webkit-keyframes type6 {
  0%, 29% {
    width: 0px;
    opacity: 0;
  }
  29.5%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
@keyframes type6 {
  0%, 29% {
    width: 0px;
    opacity: 0;
  }
  29.5%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
span:nth-child(7) {
  -webkit-animation: type7 5s infinite linear both;
          animation: type7 5s infinite linear both;
}
@-webkit-keyframes type7 {
  0%, 30.5% {
    width: 0px;
    opacity: 0;
  }
  31%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
@keyframes type7 {
  0%, 30.5% {
    width: 0px;
    opacity: 0;
  }
  31%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
span:nth-child(8) {
  -webkit-animation: type8 5s infinite linear both;
          animation: type8 5s infinite linear both;
}
@-webkit-keyframes type8 {
  0%, 32% {
    width: 0px;
    opacity: 0;
  }
  32.5%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
@keyframes type8 {
  0%, 32% {
    width: 0px;
    opacity: 0;
  }
  32.5%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
span:nth-child(9) {
  -webkit-animation: type9 5s infinite linear both;
          animation: type9 5s infinite linear both;
}
@-webkit-keyframes type9 {
  0%, 33.5% {
    width: 0px;
    opacity: 0;
  }
  34%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
@keyframes type9 {
  0%, 33.5% {
    width: 0px;
    opacity: 0;
  }
  34%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
span:nth-child(10) {
  -webkit-animation: type10 5s infinite linear both;
          animation: type10 5s infinite linear both;
}
@-webkit-keyframes type10 {
  0%, 35% {
    width: 0px;
    opacity: 0;
  }
  35.5%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
@keyframes type10 {
  0%, 35% {
    width: 0px;
    opacity: 0;
  }
  35.5%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
span:nth-child(11) {
  -webkit-animation: type11 5s infinite linear both;
          animation: type11 5s infinite linear both;
}
@-webkit-keyframes type11 {
  0%, 36.5% {
    width: 0px;
    opacity: 0;
  }
  37%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
@keyframes type11 {
  0%, 36.5% {
    width: 0px;
    opacity: 0;
  }
  37%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
span:nth-child(12) {
  -webkit-animation: type12 5s infinite linear both;
          animation: type12 5s infinite linear both;
}
@-webkit-keyframes type12 {
  0%, 38% {
    width: 0px;
    opacity: 0;
  }
  38.5%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
@keyframes type12 {
  0%, 38% {
    width: 0px;
    opacity: 0;
  }
  38.5%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
span:nth-child(13) {
  -webkit-animation: type13 5s infinite linear both;
          animation: type13 5s infinite linear both;
}
@-webkit-keyframes type13 {
  0%, 39.5% {
    width: 0px;
    opacity: 0;
  }
  40%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
@keyframes type13 {
  0%, 39.5% {
    width: 0px;
    opacity: 0;
  }
  40%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
span:nth-child(14) {
  -webkit-animation: type14 5s infinite linear both;
          animation: type14 5s infinite linear both;
}
@-webkit-keyframes type14 {
  0%, 41% {
    width: 0px;
    opacity: 0;
  }
  41.5%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
@keyframes type14 {
  0%, 41% {
    width: 0px;
    opacity: 0;
  }
  41.5%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
span:nth-child(15) {
  -webkit-animation: type15 5s infinite linear both;
          animation: type15 5s infinite linear both;
}
@-webkit-keyframes type15 {
  0%, 42.5% {
    width: 0px;
    opacity: 0;
  }
  43%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
@keyframes type15 {
  0%, 42.5% {
    width: 0px;
    opacity: 0;
  }
  43%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
span:nth-child(16) {
  -webkit-animation: type16 5s infinite linear both;
          animation: type16 5s infinite linear both;
}
@-webkit-keyframes type16 {
  0%, 44% {
    width: 0px;
    opacity: 0;
  }
  44.5%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
@keyframes type16 {
  0%, 44% {
    width: 0px;
    opacity: 0;
  }
  44.5%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
span:nth-child(17) {
  -webkit-animation: type17 5s infinite linear both;
          animation: type17 5s infinite linear both;
}
@-webkit-keyframes type17 {
  0%, 45.5% {
    width: 0px;
    opacity: 0;
  }
  46%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
@keyframes type17 {
  0%, 45.5% {
    width: 0px;
    opacity: 0;
  }
  46%, 90% {
    width: auto;
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}
    </style>
</head>
<body>

<body>
    <div id="winner_result_out">
  <div class="victory"></div>
  <div class="imposter">
    <div class="spacesuit">
      <div class="chest-and-head"></div>
      <div class="legs"></div>
      <div class="arm"></div>
      <div class="helmet-glass"></div>
    </div>
  </div>
  <div class="background"></div>
  <div class="name"><?php echo $winner_name ?></div>
</div>


<div id="winner_result_waiting" >
  <sky>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
  <star></star>
</sky>

<h1>Result Will be Published Soon</h1>

<boi>
  <rightleg></rightleg>
  <leftleg></leftleg>
  <backpack></backpack>
  <belly></belly>
  <eye></eye>
  <leftleg></leftleg>
</boi>

<svg xmlns="http://www.w3.org/2000/svg">
  <filter id="inset" x="-50%" y="-50%" width="200%" height="200%">
    <feFlood flood-color="black" result="outside-color"/>
    <feMorphology in="SourceAlpha" operator="dilate" radius="3.5"/>
    <feComposite in="outside-color" operator="in" result="outside-stroke"/>
    <feFlood flood-color="#0c9fc4" result="inside-color"/>
    <feComposite in2="SourceAlpha" operator="in" result="inside-stroke"/>
    <feMerge>
      <feMergeNode in="outside-stroke"/>
      <feMergeNode in="inside-stroke"/>
    </feMerge>
  </filter>
</svg>
</div>
<?php

if (mysqli_num_rows($result) > 0) {
 
    echo '<script>
    document.getElementById("winner_result_out").style.display = "block";
    document.getElementById("winner_result_waiting").style.display = "none";
    </script>';
} else {
    echo '<script>
    document.getElementById("winner_result_out").style.display = "none";
    document.getElementById("winner_result_waiting").style.display = "block";
    </script>';
}
?>


</body>
</html>
