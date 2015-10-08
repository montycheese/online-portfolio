<?php include("includes/header.php");?>

<!-- One -->
<section id="one" class="wrapper special">
    <div class="inner">
        <header class="major">
            <h2>Software Projects</h2>
            <p>And et cetera</p>
        </header>
    </div>
</section>

<!-- Two-->

<section id="three" class="wrapper">
    <div class="inner">
        <div class="row 200%">
            <div class="6u 12u$(medium)">
                <!-- project 1 -->
                <h2>Pocket Pal</h2>
                <dl>
                    <dt>Summary</dt>
                    <dd>
                        <p>Pocket Pal was created in the span of 24 hours during
                            JP Morgan Chase's annual Code for Good challenge in
                            Columbus Ohio. Our team and 19 others were tasked with
                            the challenge of creating an application that would allow
                            volunteers and members of the Lebron James Family Foundation
                            to track the progress of young teenagers that they sponsor.
                            Other tasks included, making it accessible, portable, and
                            emphasizing the teenager's relationship with their mentor
                            <a href="http://www.lebronjames.com/">Lebron James.</a>
                            The technology platform we were assigned was the Samsung Galaxy Tablet.
                        </p>
                    </dd>
                    <dt>Technologies Used</dt>
                    <dd>
                        <p><strong>Front-end</strong>: HTML, CSS. JavaScript, CoffeeScript, and jQuery were used for dynamic page functionality. Bootstrap framework was implemented for page responsiveness</p>
                        <p><strong>Back-end</strong>: PHP, MySQL database, and the application was hosted on an Apache AWS server. </p>
                        <p><strong>Considerations</strong>: Password hashing was used to store passwords in database, and authentication
                            check was implemented on every page via PHP session variables. UX was designed for simplicity of use, images were sized for web on Adobe Photoshop.</p>
                    </dd>
                    <dt>Challenges</dt>
                    <dd>
                        <p>Our team had a restricted deadline (24 hours) to brainstorm, plan, build a prototype, test, and rollout our final product.
                            Needless to say, we didn't sleep that night!
                        </p>
                    </dd>
                </dl>
                <!-- project 2 -->
                <h2>Karma Defender</h2>
                <dl>
                    <dt>Summary</dt>
                    <dd>
                        <p>Karma Defender is a take on the classic <a href="https://en.wikipedia.org/wiki/Space_Invaders">"Space Invaders" game</a> from
                            the retro arcade age. The theme is <a href="https://www.reddit.com">Reddit</a> a
                            personal favorite website of mine. The enemies shoot downvotes, and our hero
                            Grumpy Cat shoots out upvotes. The goal is to survive as many levels as possible!
                            <br/>
                            All use of images are claimed under fair use for purposes of education.
                        </p>
                    </dd>
                    <dt>Technologies Used</dt>
                    <dd>
                        <p>The game was created using the JavaFX GUI framework. Everything was written in Java 7</p>
                        <p><strong>Considerations</strong>: Specific data structures were implemented to optimize game performance. For example,
                            the alien horde were stored in an array of Arraylists. The listeners could be easily updated this way and aliens could be
                            removed easily from the game when destroyed, while preserving the ordering of their neighbors.
                        </p>
                    </dd>
                    <dt>Challenges</dt>
                    <dd>
                        <p>I was making the transition from Java Swing to JavaFX. They both handle MVC differently in some ways, and it was fascinating to evaluate the
                            tradeoffs between the two frameworks.
                        </p>
                    </dd>
                </dl>

                <!-- project 3 -->
                <br/><br/><br/><br/>
                <h2>Tote Dashboard</h2>
                <dl>
                    <dt>Summary</dt>
                    <dd>
                        <p>
                            While at my internship at <a href="https://www.tote-app.com">Tote</a>, an Atlanta Tech Village based start-up, I was tasked to create a responsive
                            content management system (i.e. admin dashboard) to aggregate customer, driver, and trip data into one easy to use
                            system. The creation of this CMS was essential for removing the need of a constantly present developer in order
                            to do tasks that involved querying, editing, and deleting data.
                        </p>
                    </dd>
                    <dt>Technologies Used</dt>
                    <dd>
                        <p><strong>Front-end</strong>: HTML, CSS. JavaScript and jQuery were used for dynamic page functionality. Bootstrap framework was implemented for page responsiveness.
                        </p>
                        <p><strong>Back-end</strong>: PHP, Ajax, MySQL database, and the application was hosted on an Apache AWS server. </p>
                        <p><strong>APIs</strong>: Google APIs - Maps, Charts, Analytics, Stripe (for payment), Mandrill and Pilvo (for email and SMS respectively)</p>
                        <p><strong>Considerations</strong>: Password hashing was used to store passwords in database, and authentication
                            check was implemented on every page via PHP session variables. UX was designed for drivers on the move using mobile, and wide desktop
                            display for customer service representatives. SQL queries were optimized for speed, and no framework was used to eliminate unnecessary overhead.
                        </p>
                    </dd>
                    <dt>Challenges</dt>
                    <dd>
                        <p>
                            Making a scalable system in PHP requires pre-planning. Figuring out the odds and ends of this required research
                            and evaluating the trade offs between using certain features. For example, PDO (PHP data objects) were used to query the Database
                            in an object oriented manner, rather than using a procedural method like the mysqli_connect library. This allows us to switch between different
                            database types with ease, rather than rewriting code.
                        </p>
                    </dd>
                </dl>

                <!-- project 4 -->
                <br/><br/><br/>
                <h2>Mobile Applications</h2>
                <dl>
                    <dt>Summary</dt>
                    <dd>
                        <p>
                            I developed the following applications in my Rich Media Production class at the University of Georgia.
                            I was getting a Certificate from the <a href="http://mynmi.net/">New Media Institute</a> of UGA at the time.
                        </p>
                    </dd>
                    <dt>Technologies Used</dt>
                    <dd>
                        <p><strong>Front-end</strong>: HTML, CSS, and jQuery Mobile for plugins and buttons.
                        </p>
                        <p><strong>Software</strong>: Dashcode, Red Foundry, Adobe Fireworks (for images & page banners)</p>
                        <p><strong>Considerations</strong>: The applications were etched to focus on primarily mobile devices.
                        </p>
                    </dd>
                   <dt>Challenges</dt>
                    <dd>
                        <p>
                            Developing for mobile has its challenges. Because a responsive framework such as
                            Bootstrap was not used, images had to have different versions for sizing on different devices. Including but
                            not limited to: Desktop, tablets (horiz and vert), and mobile (horiz and vert).
                        </p>
                    </dd>
                </dl>

                <header>
                    <h3>Want to see more?</h3>
                    <p>Check out my <a href ="https://www.github.com/montycheese">Github</a></p>
                </header>
                </div>

                <div class="6u$ 12u$(medium)">
                    <!-- project -->
                    <span class="image fit"><img src="images/projects/pocket_pal.png" alt="Pocket Pal!" /></span>
                    <span class="image fit"><img src="images/projects/pocket_pal2.png" alt="Pocket Pal!" /></span>
                    <h4>PHP Code Sample:</h4>
                    <pre style="padding:0px;">
                        <code>
function getStudentInfo($student_id){
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
    try {
        $pdo = new PDO($dsn,DB_USERNAME,DB_PASSWORD);
    }
    catch (PDOException $pe){
        return $pe->getTraceAsString();
    }
    $query = "SELECT * FROM student WHERE student_id = ?;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(1, $student_id, PDO::PARAM_STR);
    if($stmt->execute()){
    //select success
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
    }
    else return NULL;
}</code>
                    </pre>
                    <hr/>
                    <!-- Project 2 -->
                    <span class="image fit"><img src="images/projects/Karma_Invaders.gif" alt="Karma Invaders" /></span>
                    <h4>Java Code Sample:</h4>
                  <pre style="padding:0px;">
<code style="font-size: 0.8em;">//Updating position of enemy alien sprites
public void update(Game game, GameTime gameTime){
    if(this.milliseconds == 0 ) this.milliseconds = gameTime.getTotalGameTime().getTotalMilliseconds();
    if(gameTime.getTotalGameTime().getTotalMilliseconds() - this.milliseconds > 500){
        int dx = velocity * xDir;
        if(this.distanceTraveled >= Math.round(game.getSceneBounds().getWidth()/4)){
            float dy = velocity * 1.5f;
            changeXDirection();
            setTranslateY(translateYProperty().add(velocity).get());
            this.distanceTraveled = 0;
         }
        else{
            setTranslateX(translateXProperty().add(dx).get());
            this.distanceTraveled += Math.abs(dx);
        }
    this.milliseconds = gameTime.getTotalGameTime().getTotalMilliseconds();
    }
}
</code>
                    </pre>
                    <hr />
                    <span class="image fit"><img src="images/projects/tote_dash_1.png" alt="Tote Dashboard" /></span>
                    <span class="image fit"><img src="images/projects/tote_dash_2.png" alt="Tote Dashboard" /></span>
                    <h4>JavaScript Code Sample:</h4>
                  <pre style="padding:0px;">
<code style="font-size: 0.8em;">/**
* Creates an ajax request to the DB to get updated
* values of the driver's current location during the trip.
* These values are used to update the map in real time.
*
* @return {void}
*/
function refreshLocation(){
    if (trip_status == 'BEGIN' && markers.length > 2) {
    //remove old driver marker from the map
    var marker_driver_location = markers.pop();
    marker_driver_location.setMap(null);
    //do ajax request
    $.ajax
    ({
        url: '../../php/doGetDriverLatLong.php',
        data: {"request_id": '?php echo $request_id;?>'},
        type: 'post',
        success: function (data) {
        if (data) {
            var result = $.parseJSON(data);
            var new_marker_driver_location = createMarker(parseFloat(result['driver_lat']),
            parseFloat(result['driver_long']),
            'Driver Location',
            driver_location_icon,
            map);
            markers.push(new_marker_driver_location);
            attachMarkerInfo(new_marker_driver_location, "Driver's current location");
            }
        }
    });
    }
}//refreshLocation
</code>
                      <hr/>
                      </pre>
                      <h3>Dawg Radio</h3>
                       <iframe name = "iframe" width="320" height="480" frameborder="3"
                               scrolling="yes" marginheight="0" marginwidth="0"
                               src="extras/mobile_projects/project1/index.html"
                               /*style="-webkit-transform:scale(0.7);-moz-transform-scale(0.7);*/">
                       </iframe>

                    <h3>Athfest</h3>
                    <iframe name = "iframe" width="320" height="480" frameborder="2"
                            scrolling="yes" marginheight="0" marginwidth="0"
                            src="extras/mobile_projects/project3/index.html"
                    /*style="-webkit-transform:scale(0.7);-moz-transform-scale(0.7);"*/>
                    </iframe>
                </div>
            </div>
        </div>
</section>

<?php include("includes/footer.php");?>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>