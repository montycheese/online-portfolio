<?php include("includes/header.php");?>

<!-- One-->

<section id="three" class="wrapper">
    <div class="inner">
        <header class="major" style="display:block;text-align: center;">
            <h2>Software Projects</h2>
        </header>
        <div class="row 200%">
            <div class="6u 12u$(medium)">
                <!-- project 0 -->
                <h2>Digits</h2>
                <dl>
                    <dt>Summary</dt>
                    <dd>
                        <p>
                           Digits was created and developed over a weekend during The University of Georgia's Hackathon <a href="http://ugahacks.herokuapp.com/">UGA Hacks</a>.
                            Our vision for the product was to essentially recognize, analyze, and interpret American Sign Language (ASL) into words from photos and videos.
                           The software implements <a href="http://www.clarifai.com">Clarifai's</a> API, which allows developers to use images to train different classification models using
                            a neural network. I created the idea and worked with a team of five to develop a prototype to showcase at the end of the weekend.
                            My contributions to the team were developing the python scripts to train our classification models, writing the back-end for the web application,
                            setting up and configuring the Azure server, and leading our presentation at the end. Our team ended up being a top 8 finalist in the competition!
                        </p>
                    </dd>
                    <dt>Technologies Used</dt>
                    <dd>
                        <strong>Machine Learning</strong><br/>
                        <p>Python was used to write the classification scripts. A ten fold cross validation was
                        used with Clarifai's neural network to train models that would recognize different words and characters from the
                        ASL.<br/>
                        Hash tables (dictionaries in Python) were used to store model: image pairs as this allowed us to easily organize our data.
                        </p>

                        <strong>Web Application</strong>
                        <p><i>Front-end</i>: HTML/CSS to create the general UI.
                            JavaScript, and jQuery were used for dynamic page functionality.</p>
                        <p><i>Back-end</i>: LAMP stack hosted on a Microsoft Azure web server </p>
                        <p><strong>Considerations</strong>: In order to translate ASL from videos, an uploaded video had to be sliced up into individual photo frames.
                            Additionally these photos were parsed into Base64 then uploaded onto the server to be classified as one of our models. This was
                            achieved by using Ajax calls to the API. This process was used to enable users to get data without any page redirection. </p>
                    </dd>
                    <dt>Challenges</dt>
                    <dd>
                        <p>
                           Classification of certain letters in the ASL alphabet proved to be quite challenging as they were very similar to one another.
                            (M,N,S,T,A,E) Getting our model to correctly predict these required large amounts of data collecting and testing different image types.
                        <br/>
                        </p>
                    </dd>
                </dl>
                <!-- end project 0 -->
                <!-- project 1 -->
                <h2>Pocket Pal</h2>
                <dl>
                    <dt>Summary</dt>
                    <dd>
                        <p>
                            Pocket Pal was created in the span of 24 hours during
                            JP Morgan Chase's annual Code for Good challenge in
                            Columbus Ohio. Our team along 19 others were tasked with
                            the challenge of creating an application that would allow
                            volunteers and members of the Lebron James Family Foundation
                            to track the progress of underprivileged young teenagers that they sponsor.
                            Requirements included: making it accessible, portable, simple, attractive, and
                            emphasizing the teenager's relationship with their mentor
                            <a href="http://www.lebronjames.com/">Lebron James.</a>
                            The technology platform we were assigned was the Samsung Galaxy Tablet.
                        </p>
                    </dd>
                    <dt>Technologies Used</dt>
                    <dd>
                        <p><strong>Front-end</strong>: HTML/CSS to create the general UI.
                            JavaScript, CoffeeScript, and jQuery were used for dynamic page functionality. The
                            <a href="http://getbootstrap.com/">Bootstrap</a> framework was implemented for page responsiveness</p>
                        <p><strong>Back-end</strong>: PHP, MySQL database, and the application was hosted on an AWS server. </p>
                        <p><strong>Considerations</strong>: PHP include statements were used to lay a foundation for application scalability.
                            Password hashing was used to store passwords in database.
                            Schema included 5~6 tables, specific to different relationships our team found necessary.
                            The UX was designed for simplicity of use, and all images were sized for web on Adobe Photoshop.</p>
                    </dd>
                    <dt>Challenges</dt>
                    <dd>
                        <p>
                            Our team had a restricted deadline (24 hours) to brainstorm, plan, build a prototype, test, and roll-out our final product.
                            Needless to say, we didn't sleep that night! In order to work efficiently, we had 3/4 of our group developing different
                            parts of the application in parallel, while the 4th member tested and debugged different parts of the application that
                            they did not develop specifically. After roughly an hour interval, we would all fix the known bugs and a new person would assume the
                            role of tester and the cycle continued.
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
                        <p>The game was created using the JavaFX GUI framework. All game logic was written in Java 7.</p>
                        <p><strong>Considerations</strong>: Specific data structures were implemented to optimize game performance. For example,
                            the alien horde were stored in an array of ArrayLists. The listeners could be easily updated this way and aliens could be
                            removed easily from the frame when destroyed, while preserving the ordering of their adjacent friends.
                        </p>
                    </dd>
                    <dt>Challenges</dt>
                    <dd>
                        <p>I was making the transition from Java Swing to JavaFX while writing this game.
                            They both handle MVC differently in some ways, and it was fascinating to evaluate the
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
                        <p><strong>Back-end</strong>: PHP, Ajax, MySQL database, and the application was hosted on an AWS server. </p>
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
                    <!-- project 0 -->
                    <span class="image fit"><img src="images/projects/digits_1.png" alt="Digits" /></span>
                    <span class="image fit"><img src="images/projects/digits_3.png" alt="Digits!" /></span>
                    <span class="image fit"><img src="images/projects/digits_2.png" alt="Digits!" /></span>
                    <h4>Python Code Sample:</h4>
                    <pre style="padding:0px;">
                        <code style="font-size: 0.8em;">#train.py
from clarifai_basic import ClarifaiCustomModel
from json import dumps
from classifications import language

concept = ClarifaiCustomModel()

count = 0
#train all models on all words in our language

for model in language.keys():
    print "current model to train: %s, %d/%d complete" % (model, count, len(language))
    for url in language[model]:
        print "training url:%s on model %s" % (url, model)
        concept.positive(url, model)

    #associate images of other words/letters as NOT our current model
    for key, value in language.iteritems():
        if key != model:
            for neg_url in value:
                print neg_url
                concept.negative(neg_url, model)
    concept.train(model)
    count += 1
                        </code>
                    </pre>
		    <br/>
                    <hr/>
                    <!-- project 0 end -->
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
    else {
        return NULL;
    }
}
                        </code>
                    </pre>
		    <br/><br/><br/><br/><br/>
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
		    <br/></br>
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
</code>  </pre>
                      <hr/>
                      <h3>Dawg Radio</h3>
                       <iframe name = "iframe" width="320" height="480" frameborder="3"
                               scrolling="yes" marginheight="0" marginwidth="0"
                               src="extras/mobile_projects/project1/index.html"
                               /*style="-webkit-transform:scale(0.7);-moz-transform-scale(0.7);*/">
                       </iframe>

                    <h3>Athfest Mobile Guide</h3>
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