<?php
class readings_controller extends base_controller {

    

    public function __construct() {
        parent::__construct();

        # Make sure user is logged in if they want to use anything in this controller
        if(!$this->user) {
            Router::redirect("/users/login");
        }
    }

    public function add() {

        # Setup view
        $this->template->content = View::instance('v_readings_add');
        $this->template->title   = "New Reading";

        # Render template
        echo $this->template;

    }

    public function r_add() {

        # Associate this post with this user
        $_POST['user_id']  = $this->user->user_id;

        # Unix timestamp of when this post was created / modified
        $_POST['created']  = Time::now();
        $_POST['modified'] = Time::now();

        # Insert
        # Note we didn't have to sanitize any of the $_POST data because we're using the insert method which does it for us
        DB::instance(DB_NAME)->insert('posts', $_POST);

        #Redirect to user's profile/list of posts
        Router::redirect("/users/profile");

    }

    public function r_delete($post_id){

        #Delete post
        $to_delete = 'WHERE post_id = ' .$post_id;
        DB::instance(DB_NAME)->delete('posts', $to_delete);

        #Send user back to his/her profile
        Router::redirect("/users/profile");

    }

    public function r_read(){

        $to_read = .$content;
        echo $to_read;


    }
}
