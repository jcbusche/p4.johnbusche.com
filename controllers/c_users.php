<?php
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    } 

    public function index() {

    }

    public function signup() {
        # Setup view
        $this->template->content = View::instance('v_users_signup');
        $this->template->title   = "Sign Up";

        # Render template
        echo $this->template;
    }

    public function p_signup() {

        $fname = $_POST["first_name"];
        $lname = $_POST["last_name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        #Sanitize
        $_POST = DB::instance(DB_NAME)->sanitize($_POST);

        #SQL query for user email
        $q = "SELECT * FROM users WHERE email = '".$_POST['email']."'";

        #Execute query
        $user_exists = DB::instance(DB_NAME)->select_rows($q);


        #Check for duplicate email
        if(!empty($user_exists)){
            #Redirect dup email to login page and pass error
            Router::redirect("/users/login/user-exists");
        }

        else if(empty($fname) || empty($lname) || empty($email) || empty($password)){
            echo 'Your form data is invalid, please try again.';
            sleep(1);
            Router::redirect("/users/signup");
        }

        else{

            # More data we want stored with the user
            $_POST['created']  = Time::now();
            $_POST['modified'] = Time::now(); 

            # Encrypt the password  
            $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

            # Create an encrypted token via their email address and a random string
            $_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string()); 

            # Insert this user into the database
            $user_id = DB::instance(DB_NAME)->insert('users', $_POST);

            $to = $_POST['email'];
            $subject = "Welcome to Reader";
            $message = "Congratulations, you've signed up for Reader. You should have been sent to the login page after your registration, but in case you missed it, you can login at p4.johnbusche.com/users/login";
            $from = 'john@johnbusche.com';
            $headers = "From:" . $from;        
            
            if(!$this->user){
                mail($to, $subject, $message, $headers);
            }

                #Successful creation
            Router::redirect("/users/login/");
        }

    }


    public function login($error = NULL) {
        //echo "This is the login page";
        # Setup view
        $this->template->content = View::instance('v_users_login');
        $this->template->title   = "Login";

        #error
        $this->template->content->error = $error;

        # Render template
        echo $this->template;
    }

    public function p_login($error = NULL) {

        # Sanitize the user entered data to prevent any funny-business (re: SQL Injection Attacks)
        $_POST = DB::instance(DB_NAME)->sanitize($_POST);

        # Hash submitted password so we can compare it against one in the db
        $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

        # Search the db for this email and password
        # Retrieve the token if it's available
        $q = "SELECT token 
            FROM users 
            WHERE email = '".$_POST['email']."' 
            AND password = '".$_POST['password']."'";

        $token = DB::instance(DB_NAME)->select_field($q);

        # If we didn't find a matching token in the database, it means login failed
        if(!$token) {

            # Send them back to the login page
            Router::redirect("/users/login/invalid-login");

        # But if we did, login succeeded! 
        } 
        else {

            /* 
            Store this token in a cookie using setcookie()
            Important Note: *Nothing* else can echo to the page before setcookie is called
            Not even one single white space.
            param 1 = name of the cookie
            param 2 = the value of the cookie
            param 3 = when to expire
            param 4 = the path of the cooke (a single forward slash sets it for the entire domain)
            */
            setcookie("token", $token, strtotime('+1 week'), '/');

            # Send them to the main page - or whever you want them to go
            Router::redirect("/");

        }

    }

    public function logout() {
        //echo "This is the logout page";
        # Generate and save a new token for next login
        $new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());

        # Create the data array we'll use with the update method
        # In this case, we're only updating one field, so our array only has one entry
        $data = Array("token" => $new_token);

        # Do the update
        DB::instance(DB_NAME)->update("users", $data, "WHERE token = '".$this->user->token."'");

        # Delete their token cookie by setting it to a date in the past - effectively logging them out
        setcookie("token", "", strtotime('-1 year'), '/');

        # Send them back to the main index.
        Router::redirect("/");

    }

    public function profile() {

        if(!$this->user) {
        Router::redirect('/users/login');
        }
        
        else{
            $this->template->content = View::instance('v_users_profile');

            # $title is another variable used in _v_template to set the <title> of the page
            $this->template->title = "Profile of".$this->user->first_name;

            #Display all of this user's posts
            # Build the query
            $q = 'SELECT
                    posts .* , 
                    users.first_name, 
                    users.last_name
                FROM posts
                INNER JOIN users
                    ON posts.user_id = users.user_id
                WHERE posts.user_id = '.$this->user->user_id;

            # Run the query, store the results in the variable $posts
            $posts = DB::instance(DB_NAME)->select_rows($q);

            # Pass data to the View
            $this->template->content->posts = $posts;

            # Pass information to the view fragment
            //$this->template->content->user_name = $user_name;

            # Render View
            echo $this->template;
        }

    }

} # end of the classi