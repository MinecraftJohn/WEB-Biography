<?php
    $myFullName = array(
        "FirstName"=>"John",
        "MiddleName"=>"Matin-ao",
        "MiddleInitial"=>"M",
        "LastName"=>"Napoles",
        "Alias"=>"MinecraftJohn"
    );
    $myDateOfBirth = array(
        "Month"=>"June",
        "MonthNumber"=>"06",
        "Day"=>"14",
        "Year"=>"2001"
    );
    $myGender = "Male";
    $myCitizenship = "Filipino";
    $myAddress = array(
        "Street"=>"Plaridel St. Star Apple",
        "Barangay"=>"Umapad",
        "City"=>"Mandaue",
        "Province"=>"Cebu",
        "ZIP Code"=>"6014"
    );
    $myEmail = "minecraft.john727@gmail.com";
    $myMobileNumber = "09308611273";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>John M. Napoles (Biography)</title>
        <link rel="shortcut icon" href="assets/images/logo-john.png" type="image/x-icon">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/js/script.js" defer></script>
        <meta name="theme-color" content="#1c202e"/>
    </head>
    <body>
        <div id="splashScreen">
            <div id="splashScreenGrid">
                <img src="assets/images/loading-animation.gif" alt="Downloading resources, please wait." id="splashScreenLoadingAnimation">
                <p id="splashScreenLoadingText">Loading resources</p>
            </div>
        </div>
        <div class="bodySection">
            <div class="pageSection">
                <div class="headerContainer">
                    <div class="headerProfileContainer">
                        <svg width="322" height="70" viewBox="0 0 460 100" class="headerLogo" onmouseenter="profileIn()">
                            <g>
                                <path fill-rule="evenodd" clip-rule="evenodd" 
                                    d="M100 0H20V20H80V80H20V60H0V80H20V100H80V80H100V20V0ZM200 0H140V20H120V80H140V100H200V80H220V20H200V0ZM200 20V80H140V20H200ZM260 0H240V100H260V60H320V100H340V0H320V40H260V0ZM360 0H380V20H400V40H380V100H360V0ZM420 60H400V40H420V60ZM420 60H440V0H460V100H440V80H420V60Z" 
                                    fill="url(#logoGradient)" filter="url(#logoShadow)"/>
                            </g>
                            <defs>
                                <linearGradient id="logoGradient" x1="100" y1="0" x2="0" y2="100" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#0075c3"/>
                                    <stop offset="1" stop-color="#00abe9"/>
                                </linearGradient>
                                <filter id="logoShadow" x="0" y="0" width="200" height="200" > 
                                    <feOffset result="offOut" in="SourceAlpha" dx="4" dy="4" /> 
                                    <feColorMatrix result="matrixOut" in="offOut" type="matrix" values=" 1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 0.5 0" /> 
                                    <feGaussianBlur result="blurOut" in="matrixOut" stdDeviation="5" /> 
                                    <feBlend in="SourceGraphic" in2="blurOut" mode="normal" /> 
                                </filter>
                            </defs>
                        </svg>
                        <div class="headerProfilePictureSection" onmouseleave="profileOut()">
                            <div class="headerProfilePictureContainer">
                                <img class="headerProfilePicture" src="assets/images/cover-john.png" alt="<?php echo $myFullName['FirstName']; ?>'s Face">
                            </div>
                        </div>
                    </div>
                    <div class="headerNameContainer">
                        <p class="headerNameFullName"><?php echo $myFullName['FirstName']." ".$myFullName['MiddleName']." ".$myFullName['LastName']; ?></p>
                        <p class="headerNameSubtitle"><?php echo $myFullName['FirstName']; ?>'s Website Biography</p>
                    </div>
                </div>
            </div>
            <div class="headerMobileProfileContainer">
                <div class="headerMobileProfilePictureSection">
                    <div class="headerMobileProfilePictureContainer">
                        <img class="headerMobileProfilePicture" src="assets/images/cover-john.png" alt="<?php echo $myFullName['FirstName']; ?>'s Face">
                    </div>
                </div>
                <p class="headerMobileNameFullName"><?php echo $myFullName['FirstName']." ".$myFullName['MiddleName']." ".$myFullName['LastName']; ?></p>
                <p class="headerMobileNameSubtitle">If you're not a good shot today, don't worry there are other ways to be useful.<br>-Sova</p>
            </div>
            <div class="pageSection">
                <div class="infoContainer">
                    <div class="infoDividerContainer infoDividerContainerLeft">
                        <p class="infoAboutMeTitle">Biography</p>
                        <p class="infoAboutMeText">
                            <?php echo $myFullName['FirstName']." is one of the student in CITE. He was born in ".$myDateOfBirth['Year']
                            ." in ".$myAddress['Province'].". He is one of a contributor on a Minecraft Java community's plugin 
                            development by reporting issues and suggesting new features."; ?> 
                            <br><br>
                            <?php echo "With his creation of Pinoy LifeCraft a Minecraft server, ".$myFullName['FirstName'].
                            " made the player's childhood fun and memorable. At the age of 13, ".$myFullName['FirstName'].
                            " started playing Minecraft and that's where he started to learned the scripting a Minecraft server. 
                            Until then, ".$myFullName['FirstName']." inpired by coding and he started creating his first 
                            website at the age of 16. He dreamed of having his very own Minecraft plugins for his server."; ?>
                            <br><br>
                            His natural curiosity led him to the programming world. 
                            He is currently now on Computer Engineering course to acheive his dream project sooner.
                        </p>
                    </div>
                    <div class="infoDividerContainer infoDividerContainerRight">
                        <div class="infoBoxContainer infoBoxContainerTop">
                            <img src="assets/images/icon-datebirth.png" class="infoBoxIcon" alt="Date of Birth Icon">
                            <div class="infoBoxTextContainer">
                                <p class="infoBoxTextTitle">Date of birth</p>
                                <p class="infoBoxTextInfo"><?php echo $myDateOfBirth['Month']." ".$myDateOfBirth['Day'].", ".$myDateOfBirth['Year']; ?></p>
                            </div>
                        </div>
                        <div class="infoBoxContainer">
                            <img src="assets/images/icon-gender.png" class="infoBoxIcon" alt="Gender Icon">
                            <div class="infoBoxTextContainer">
                                <p class="infoBoxTextTitle">Gender</p>
                                <p class="infoBoxTextInfo"><?php echo $myGender; ?></php>
                            </div>
                        </div>
                        <div class="infoBoxContainer">
                            <img src="assets/images/icon-citizenship.png" class="infoBoxIcon" alt="Citizenship Icon">
                            <div class="infoBoxTextContainer">
                                <p class="infoBoxTextTitle">Citizenship</p>
                                <p class="infoBoxTextInfo"><?php echo $myCitizenship; ?></p>
                            </div>
                        </div>
                        <div class="infoBoxContainer">
                            <img src="assets/images/icon-address.png" class="infoBoxIcon" alt="Address Icon">
                            <div class="infoBoxTextContainer">
                                <p class="infoBoxTextTitle">Address</p>
                                <p class="infoBoxTextInfo">
                                    <?php echo 
                                                $myAddress['Street'].
                                                " ".
                                                $myAddress['Barangay'].
                                                " ".
                                                $myAddress['City'].
                                                " City, ".
                                                $myAddress['Province'].
                                                " ".
                                                $myAddress['ZIP Code']
                                    ; ?>
                                </p>
                            </div>
                        </div>
                        <div class="infoBoxContainer">
                            <img src="assets/images/icon-email.png" class="infoBoxIcon" alt="Email Icon">
                            <div class="infoBoxTextContainer">
                                <p class="infoBoxTextTitle">Email</p>
                                <p class="infoBoxTextInfo"><?php echo $myEmail; ?></p>
                            </div>
                        </div>
                        <div class="infoBoxContainer">
                            <img src="assets/images/icon-phonenumber.png" class="infoBoxIcon" alt="Phone Icon">
                            <div class="infoBoxTextContainer">
                                <p class="infoBoxTextTitle">Mobile Number</p>
                                <p class="infoBoxTextInfo"><?php echo $myMobileNumber; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pageSection">
                <div class="footerContainer">
                    <div class="footerCopyrightContainer">
                        <p class="footerCopyrightTitle">© 2022, <?php echo $myFullName['FirstName']." ".$myFullName['MiddleInitial'].". ".$myFullName['LastName']; ?></p>
                        <p class="footerCopyrightSubtitle">Made with ❤️ by <?php echo $myFullName['Alias']; ?></p>
                    </div>
                    <div class="footerMediaContainer">
                        <a href="https://github.com/MinecraftJohn" target="_blank" 
                        class="footerLinks" rel="noopener noreferrer" title="Github">
                            <svg fill="#fff" viewBox="0 0 24 24" width="24px" height="24px" title="Github">
                                <path d="M 12 2 C 6.476563 2 2 6.476563 2 12 C 2 17.523438 6.476563 22 12 22 C 17.523438 22 22 17.523438 22 12 C 22 6.476563 17.523438 2 12 2 Z M 12 4 C 16.410156 4 20 7.589844 20 12 C 20 12.46875 19.953125 12.929688 19.875 13.375 C 19.628906 13.320313 19.265625 13.253906 18.84375 13.25 C 18.53125 13.246094 18.140625 13.296875 17.8125 13.34375 C 17.925781 12.996094 18 12.613281 18 12.21875 C 18 11.257813 17.53125 10.363281 16.78125 9.625 C 16.988281 8.855469 17.191406 7.535156 16.65625 7 C 15.074219 7 14.199219 8.128906 14.15625 8.1875 C 13.667969 8.070313 13.164063 8 12.625 8 C 11.933594 8 11.273438 8.125 10.65625 8.3125 L 10.84375 8.15625 C 10.84375 8.15625 9.964844 6.9375 8.34375 6.9375 C 7.777344 7.507813 8.035156 8.953125 8.25 9.6875 C 7.484375 10.417969 7 11.28125 7 12.21875 C 7 12.546875 7.078125 12.859375 7.15625 13.15625 C 6.878906 13.125 5.878906 13.03125 5.46875 13.03125 C 5.105469 13.03125 4.542969 13.117188 4.09375 13.21875 C 4.03125 12.820313 4 12.414063 4 12 C 4 7.589844 7.589844 4 12 4 Z M 5.46875 13.28125 C 5.863281 13.28125 7.0625 13.421875 7.21875 13.4375 C 7.238281 13.492188 7.257813 13.542969 7.28125 13.59375 C 6.851563 13.554688 6.019531 13.496094 5.46875 13.5625 C 5.101563 13.605469 4.632813 13.738281 4.21875 13.84375 C 4.1875 13.71875 4.148438 13.597656 4.125 13.46875 C 4.5625 13.375 5.136719 13.28125 5.46875 13.28125 Z M 18.84375 13.5 C 19.242188 13.503906 19.605469 13.570313 19.84375 13.625 C 19.832031 13.691406 19.796875 13.746094 19.78125 13.8125 C 19.527344 13.753906 19.109375 13.667969 18.625 13.65625 C 18.390625 13.652344 18.015625 13.664063 17.6875 13.6875 C 17.703125 13.65625 17.707031 13.625 17.71875 13.59375 C 18.058594 13.546875 18.492188 13.496094 18.84375 13.5 Z M 6.09375 13.78125 C 6.65625 13.785156 7.183594 13.824219 7.40625 13.84375 C 7.929688 14.820313 8.988281 15.542969 10.625 15.84375 C 10.222656 16.066406 9.863281 16.378906 9.59375 16.75 C 9.359375 16.769531 9.113281 16.78125 8.875 16.78125 C 8.179688 16.78125 7.746094 16.160156 7.375 15.625 C 7 15.089844 6.539063 15.03125 6.28125 15 C 6.019531 14.96875 5.929688 15.117188 6.0625 15.21875 C 6.824219 15.804688 7.097656 16.5 7.40625 17.125 C 7.683594 17.6875 8.265625 18 8.90625 18 L 9.03125 18 C 9.011719 18.109375 9 18.210938 9 18.3125 L 9 19.40625 C 6.691406 18.472656 4.933594 16.5 4.28125 14.0625 C 4.691406 13.960938 5.152344 13.855469 5.5 13.8125 C 5.660156 13.792969 5.863281 13.777344 6.09375 13.78125 Z M 18.625 13.90625 C 19.074219 13.917969 19.472656 14.003906 19.71875 14.0625 C 19.167969 16.132813 17.808594 17.855469 16 18.90625 L 16 18.3125 C 16 17.460938 15.328125 16.367188 14.375 15.84375 C 15.957031 15.554688 16.988281 14.863281 17.53125 13.9375 C 17.910156 13.910156 18.355469 13.898438 18.625 13.90625 Z M 12.5 18 C 12.773438 18 13 18.226563 13 18.5 L 13 19.9375 C 12.671875 19.980469 12.339844 20 12 20 L 12 18.5 C 12 18.226563 12.226563 18 12.5 18 Z M 10.5 19 C 10.773438 19 11 19.226563 11 19.5 L 11 19.9375 C 10.664063 19.894531 10.324219 19.832031 10 19.75 L 10 19.5 C 10 19.226563 10.226563 19 10.5 19 Z M 14.5 19 C 14.742188 19 14.953125 19.175781 15 19.40625 C 14.675781 19.539063 14.34375 19.660156 14 19.75 L 14 19.5 C 14 19.226563 14.226563 19 14.5 19 Z"/>
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/minecraft.john72" target="_blank" 
                        class="footerLinks footerLinkMargin" rel="noopener noreferrer" title="Facebook">
                            <svg fill="#fff" viewBox="0 0 24 24" width="24px" height="24px" title="Facebook">
                                <path d="M 12 2 C 6.4889971 2 2 6.4889971 2 12 C 2 17.511003 6.4889971 22 12 22 C 17.511003 22 22 17.511003 22 12 C 22 6.4889971 17.511003 2 12 2 z M 12 4 C 16.430123 4 20 7.5698774 20 12 C 20 16.014467 17.065322 19.313017 13.21875 19.898438 L 13.21875 14.384766 L 15.546875 14.384766 L 15.912109 12.019531 L 13.21875 12.019531 L 13.21875 10.726562 C 13.21875 9.7435625 13.538984 8.8710938 14.458984 8.8710938 L 15.935547 8.8710938 L 15.935547 6.8066406 C 15.675547 6.7716406 15.126844 6.6953125 14.089844 6.6953125 C 11.923844 6.6953125 10.654297 7.8393125 10.654297 10.445312 L 10.654297 12.019531 L 8.4277344 12.019531 L 8.4277344 14.384766 L 10.654297 14.384766 L 10.654297 19.878906 C 6.8702905 19.240845 4 15.970237 4 12 C 4 7.5698774 7.5698774 4 12 4 z"/>
                            </svg>
                        </a>
                        <a href="https://www.tiktok.com/@minecraft.john727" target="_blank" 
                        class="footerLinks footerLinkMargin" rel="noopener noreferrer" title="TikTok">
                            <svg fill="#fff" viewBox="0 0 24 24" width="24px" height="24px" title="TikTok">
                                <path d="M 6 3 C 4.3550302 3 3 4.3550302 3 6 L 3 18 C 3 19.64497 4.3550302 21 6 21 L 18 21 C 19.64497 21 21 19.64497 21 18 L 21 6 C 21 4.3550302 19.64497 3 18 3 L 6 3 z M 6 5 L 18 5 C 18.56503 5 19 5.4349698 19 6 L 19 18 C 19 18.56503 18.56503 19 18 19 L 6 19 C 5.4349698 19 5 18.56503 5 18 L 5 6 C 5 5.4349698 5.4349698 5 6 5 z M 12 7 L 12 14 C 12 14.56503 11.56503 15 11 15 C 10.43497 15 10 14.56503 10 14 C 10 13.43497 10.43497 13 11 13 L 11 11 C 9.3550302 11 8 12.35503 8 14 C 8 15.64497 9.3550302 17 11 17 C 12.64497 17 14 15.64497 14 14 L 14 10.232422 C 14.616148 10.671342 15.259118 11 16 11 L 16 9 C 15.952667 9 15.262674 8.7809373 14.78125 8.3613281 C 14.299826 7.941719 14 7.4149911 14 7 L 12 7 z"/>
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/channel/UCOOzbByEHjZyVmsYD_vARQQ" target="_blank" 
                        class="footerLinks footerLinkMargin" rel="noopener noreferrer" title="YouTube">
                            <svg fill="#fff" viewBox="0 0 24 24" width="24px" height="24px" title="YouTube">
                                <path d="M 12 4 C 12 4 5.7455469 3.9999687 4.1855469 4.4179688 C 3.3245469 4.6479688 2.6479687 5.3255469 2.4179688 6.1855469 C 1.9999687 7.7455469 2 12 2 12 C 2 12 1.9999687 16.254453 2.4179688 17.814453 C 2.6479687 18.675453 3.3255469 19.352031 4.1855469 19.582031 C 5.7455469 20.000031 12 20 12 20 C 12 20 18.254453 20.000031 19.814453 19.582031 C 20.674453 19.352031 21.352031 18.674453 21.582031 17.814453 C 22.000031 16.254453 22 12 22 12 C 22 12 22.000031 7.7455469 21.582031 6.1855469 C 21.352031 5.3255469 20.674453 4.6479688 19.814453 4.4179688 C 18.254453 3.9999687 12 4 12 4 z M 12 6 C 14.882 6 18.490875 6.1336094 19.296875 6.3496094 C 19.465875 6.3946094 19.604391 6.533125 19.650391 6.703125 C 19.891391 7.601125 20 10.342 20 12 C 20 13.658 19.891391 16.397875 19.650391 17.296875 C 19.605391 17.465875 19.466875 17.604391 19.296875 17.650391 C 18.491875 17.866391 14.882 18 12 18 C 9.119 18 5.510125 17.866391 4.703125 17.650391 C 4.534125 17.605391 4.3956094 17.466875 4.3496094 17.296875 C 4.1086094 16.398875 4 13.658 4 12 C 4 10.342 4.1086094 7.6011719 4.3496094 6.7011719 C 4.3946094 6.5331719 4.533125 6.3946094 4.703125 6.3496094 C 5.508125 6.1336094 9.118 6 12 6 z M 10 8.5351562 L 10 15.464844 L 16 12 L 10 8.5351562 z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>