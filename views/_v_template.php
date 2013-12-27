<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <link rel="stylesheet" href="/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="/css/main.css" type="text/css">
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>	
    <script src = "/js/read.js"></script>

    
	
</head>

<body>	

	<div id='menu'>


        <a href='/'><span id = "logo"><?php echo strtoupper(APP_NAME);?></span></a>
        <br>

        <!-- Menu for users who are logged in -->
        <?php if($user): ?>
            <ul>
                <li>
                    <a href='/users/profile'>Profile</a>
                </li> 

                <li>
                    <a href='/readings/add'>Add reading</a>
                </li> 
                
                <li>
                    <a href='/users/logout'>Logout</a>
                </li>
            </ul>

        <!-- Menu options for users who are not logged in -->
        <?php else: ?>

            <ul>
                <li>
                    <a href='/users/signup'>Sign up</a>
                </li>

                <li>    
                    <a href='/users/login'>Log in</a>
                </li>
            </ul>    

        <?php endif; ?>

    </div>

    <br>
    
	<?php if(isset($content)) echo $content; ?>

    <?php if(isset($client_files_body)) echo $client_files_body; ?>
        
    
</body>
</html>