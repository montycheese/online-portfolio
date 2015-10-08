<?php include("includes/header.php");
header("Location: index.php");
exit();
?>

<!-- One -->
<section id="one" class="wrapper special">
    <div class="inner">
        <header class="major">
            <h2>Software Projects</h2>
            <p>Most recent from a variety of applications</p>
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
                        <p><strong>Software</strong>: Dashcode, Red Foundry</p>
                        <p><strong>Considerations</strong>: The applications were etched to focus on primarily mobile devices.
                        </p>
                    </dd>
                   <!-- <dt>Challenges</dt>
                    <dd>
                        <p>
                            Lorem ipsum
                        </p>
                    </dd>-->
                </dl>
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
                    <!--<hr/>-->
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
                <!--    <hr />-->
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

<!-- Three

    <section id="three" class="wrapper">
        <div class="inner">

            <h2 id="content">Sample Content</h2>
            <p>Praesent ac adipiscing ullamcorper semper ut amet ac risus. Lorem sapien ut odio odio nunc. Ac adipiscing nibh porttitor erat risus justo adipiscing adipiscing amet placerat accumsan. Vis. Faucibus odio magna tempus adipiscing a non. In mi primis arcu ut non accumsan vivamus ac blandit adipiscing adipiscing arcu metus praesent turpis eu ac lacinia nunc ac commodo gravida adipiscing eget accumsan ac nunc adipiscing adipiscing.</p>
            <div class="row">
                <div class="6u 12u$(small)">
                    <h3>Sem turpis amet semper</h3>
                    <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat commodo eu sed ante lacinia. Sapien a lorem in integer ornare praesent commodo adipiscing arcu in massa commodo lorem accumsan at odio massa ac ac. Semper adipiscing varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
                </div>
                <div class="6u$ 12u$(small)">
                    <h3>Magna odio tempus commodo</h3>
                    <p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor. Ante commodo blandit adipiscing integer semper orci eget. Faucibus commodo adipiscing mi eu nullam accumsan morbi arcu ornare odio mi adipiscing nascetur lacus ac interdum morbi accumsan vis mi accumsan ac praesent.</p>
                </div>
                <div class="4u 12u$(medium)">
                    <h3>Interdum sapien gravida</h3>
                    <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
                </div>
                <div class="4u 12u$(medium)">
                    <h3>Faucibus consequat lorem</h3>
                    <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
                </div>
                <div class="4u$ 12u$(medium)">
                    <h3>Accumsan montes viverra</h3>
                    <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
                </div>
            </div>

            <hr class="major" />

            <h2 id="elements">Elements</h2>
            <div class="row 200%">
                <div class="6u 12u$(medium)">

                    <h3>Text</h3>
                    <p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
                    This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
                    This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>.
                    Finally, this is a <a href="#">link</a>.</p>
                    <hr />
                    <h2>Heading Level 2</h2>
                    <h3>Heading Level 3</h3>
                    <h4>Heading Level 4</h4>
                    <h5>Heading Level 5</h5>
                    <h6>Heading Level 6</h6>
                    <hr />
                    <header>
                        <h2>Heading with a Subtitle</h2>
                        <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
                    </header>
                    <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
                    <header>
                        <h3>Heading with a Subtitle</h3>
                        <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
                    </header>
                    <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
                    <header>
                        <h4>Heading with a Subtitle</h4>
                        <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
                    </header>
                    <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>

                    <h3>Lists</h3>
                    <div class="row">
                        <div class="6u 12u$(small)">

                            <h4>Unordered</h4>
                            <ul>
                                <li>Dolor pulvinar etiam magna etiam.</li>
                                <li>Sagittis adipiscing lorem eleifend.</li>
                                <li>Felis enim feugiat dolore viverra.</li>
                            </ul>

                            <h4>Alternate</h4>
                            <ul class="alt">
                                <li>Dolor pulvinar etiam magna etiam.</li>
                                <li>Sagittis adipiscing lorem eleifend.</li>
                                <li>Felis enim feugiat dolore viverra.</li>
                            </ul>

                        </div>
                        <div class="6u$ 12u$(small)">

                            <h4>Ordered</h4>
                            <ol>
                                <li>Dolor pulvinar etiam magna etiam.</li>
                                <li>Etiam vel felis at lorem sed viverra.</li>
                                <li>Felis enim feugiat dolore viverra.</li>
                                <li>Dolor pulvinar etiam magna etiam.</li>
                                <li>Etiam vel felis at lorem sed viverra.</li>
                                <li>Felis enim feugiat dolore viverra.</li>
                            </ol>

                            <h4>Icons</h4>
                            <ul class="icons">
                                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                                <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                                <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                                <li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
                            </ul>

                        </div>
                    </div>
                    <h4>Definition</h4>
                    <dl>
                        <dt>Item 1</dt>
                        <dd>
                            <p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
                        </dd>
                        <dt>Item 2</dt>
                        <dd>
                            <p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
                        </dd>
                        <dt>Item 3</dt>
                        <dd>
                            <p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
                        </dd>
                    </dl>

                    <h4>Actions</h4>
                    <ul class="actions">
                        <li><a href="#" class="button special">Default</a></li>
                        <li><a href="#" class="button">Default</a></li>
                        <li><a href="#" class="button alt">Default</a></li>
                    </ul>
                    <ul class="actions small">
                        <li><a href="#" class="button special small">Small</a></li>
                        <li><a href="#" class="button small">Small</a></li>
                        <li><a href="#" class="button alt small">Small</a></li>
                    </ul>
                    <div class="row">
                        <div class="3u 12u$(small)">
                            <ul class="actions vertical">
                                <li><a href="#" class="button special">Default</a></li>
                                <li><a href="#" class="button">Default</a></li>
                                <li><a href="#" class="button alt">Default</a></li>
                            </ul>
                        </div>
                        <div class="3u 12u$(small)">
                            <ul class="actions vertical small">
                                <li><a href="#" class="button special small">Small</a></li>
                                <li><a href="#" class="button small">Small</a></li>
                                <li><a href="#" class="button alt small">Small</a></li>
                            </ul>
                        </div>
                        <div class="3u 12u$(small)">
                            <ul class="actions vertical">
                                <li><a href="#" class="button special fit">Default</a></li>
                                <li><a href="#" class="button fit">Default</a></li>
                                <li><a href="#" class="button alt fit">Default</a></li>
                            </ul>
                        </div>
                        <div class="3u$ 12u$(small)">
                            <ul class="actions vertical small">
                                <li><a href="#" class="button special small fit">Small</a></li>
                                <li><a href="#" class="button small fit">Small</a></li>
                                <li><a href="#" class="button alt small fit">Small</a></li>
                            </ul>
                        </div>
                    </div>

                    <h3>Blockquote</h3>
                    <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis.</blockquote>

                    <h3>Table</h3>
                    <h4>Default</h4>
                    <div class="table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Item 1</td>
                                    <td>Ante turpis integer aliquet porttitor.</td>
                                    <td>29.99</td>
                                </tr>
                                <tr>
                                    <td>Item 2</td>
                                    <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                    <td>19.99</td>
                                </tr>
                                <tr>
                                    <td>Item 3</td>
                                    <td> Morbi faucibus arcu accumsan lorem.</td>
                                    <td>29.99</td>
                                </tr>
                                <tr>
                                    <td>Item 4</td>
                                    <td>Vitae integer tempus condimentum.</td>
                                    <td>19.99</td>
                                </tr>
                                <tr>
                                    <td>Item 5</td>
                                    <td>Ante turpis integer aliquet porttitor.</td>
                                    <td>29.99</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2"></td>
                                    <td>100.00</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <h4>Alternate</h4>
                    <div class="table-wrapper">
                        <table class="alt">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Item 1</td>
                                    <td>Ante turpis integer aliquet porttitor.</td>
                                    <td>29.99</td>
                                </tr>
                                <tr>
                                    <td>Item 2</td>
                                    <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                    <td>19.99</td>
                                </tr>
                                <tr>
                                    <td>Item 3</td>
                                    <td> Morbi faucibus arcu accumsan lorem.</td>
                                    <td>29.99</td>
                                </tr>
                                <tr>
                                    <td>Item 4</td>
                                    <td>Vitae integer tempus condimentum.</td>
                                    <td>19.99</td>
                                </tr>
                                <tr>
                                    <td>Item 5</td>
                                    <td>Ante turpis integer aliquet porttitor.</td>
                                    <td>29.99</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2"></td>
                                    <td>100.00</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
                <div class="6u$ 12u$(medium)">

                    <h3>Buttons</h3>
                    <ul class="actions">
                        <li><a href="#" class="button special">Special</a></li>
                        <li><a href="#" class="button">Default</a></li>
                        <li><a href="#" class="button alt">Alternate</a></li>
                    </ul>
                    <ul class="actions">
                        <li><a href="#" class="button special big">Big</a></li>
                        <li><a href="#" class="button">Default</a></li>
                        <li><a href="#" class="button alt small">Small</a></li>
                    </ul>
                    <ul class="actions fit">
                        <li><a href="#" class="button special fit">Fit</a></li>
                        <li><a href="#" class="button fit">Fit</a></li>
                        <li><a href="#" class="button alt fit">Fit</a></li>
                    </ul>
                    <ul class="actions fit small">
                        <li><a href="#" class="button special fit small">Fit + Small</a></li>
                        <li><a href="#" class="button fit small">Fit + Small</a></li>
                        <li><a href="#" class="button alt fit small">Fit + Small</a></li>
                    </ul>
                    <ul class="actions">
                        <li><a href="#" class="button special icon fa-search">Icon</a></li>
                        <li><a href="#" class="button icon fa-download">Icon</a></li>
                        <li><a href="#" class="button alt icon fa-check">Icon</a></li>
                    </ul>
                    <ul class="actions">
                        <li><span class="button special disabled">Special</span></li>
                        <li><span class="button disabled">Default</span></li>
                        <li><span class="button alt disabled">Alternate</span></li>
                    </ul>

                    <h3>Form</h3>
                    <form method="post" action="#">
                        <div class="row uniform">
                            <div class="6u 12u$(xsmall)">
                                <input type="text" name="name" id="name" value="" placeholder="Name" />
                            </div>
                            <div class="6u$ 12u$(xsmall)">
                                <input type="email" name="email" id="email" value="" placeholder="Email" />
                            </div>
                            <div class="12u$">
                                <div class="select-wrapper">
                                    <select name="category" id="category">
                                        <option value="">- Category -</option>
                                        <option value="1">Manufacturing</option>
                                        <option value="1">Shipping</option>
                                        <option value="1">Administration</option>
                                        <option value="1">Human Resources</option>
                                    </select>
                                </div>
                            </div>
                            <div class="4u 12u$(small)">
                                <input type="radio" id="priority-low" name="priority" checked>
                                <label for="priority-low">Low Priority</label>
                            </div>
                            <div class="4u 12u$(small)">
                                <input type="radio" id="priority-normal" name="priority">
                                <label for="priority-normal">Normal Priority</label>
                            </div>
                            <div class="4u$ 12u$(small)">
                                <input type="radio" id="priority-high" name="priority">
                                <label for="priority-high">High Priority</label>
                            </div>
                            <div class="6u 12u$(small)">
                                <input type="checkbox" id="copy" name="copy">
                                <label for="copy">Email me a copy of this message</label>
                            </div>
                            <div class="6u$ 12u$(small)">
                                <input type="checkbox" id="human" name="human" checked>
                                <label for="human">I am a human and not a robot</label>
                            </div>
                            <div class="12u$">
                                <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
                            </div>
                            <div class="12u$">
                                <ul class="actions">
                                    <li><input type="submit" value="Send Message" /></li>
                                    <li><input type="reset" value="Reset" class="alt" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>

                    <hr />

                    <form method="post" action="#">
                        <div class="row uniform">
                            <div class="9u 12u$(small)">
                                <input type="text" name="query" id="query" value="" placeholder="Query" />
                            </div>
                            <div class="3u$ 12u$(small)">
                                <input type="submit" value="Search" class="fit" />
                            </div>
                        </div>
                    </form>

                    <h3>Image</h3>
                    <h4>Fit</h4>
                    <span class="image fit"><img src="images/pic01.jpg" alt="" /></span>
                    <div class="box alt">
                        <div class="row 50% uniform">
                            <div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                            <div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                            <div class="4u$"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                            <div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                            <div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                            <div class="4u$"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                            <div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                            <div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                            <div class="4u$"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                        </div>
                    </div>

                    <h4>Left &amp; Right</h4>
                    <p><span class="image left"><img src="images/pic02.jpg" alt="" /></span>Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Vestibulum ante ipsum primis in faucibus magna blandit adipiscing eu felis iaculis volutpat lorem ipsum dolor sit amet dolor consequat.</p>
                    <p><span class="image right"><img src="images/pic02.jpg" alt="" /></span>Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Vestibulum ante ipsum primis in faucibus magna blandit adipiscing eu felis iaculis volutpat lorem ipsum dolor sit amet dolor consequat.</p>

                    <h3>Box</h3>
                    <div class="box">
                        <p>Felis sagittis eget tempus primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Magna sed etiam ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus lorem ipsum dolor sit amet nullam.</p>
                    </div>

                    <h3>Preformatted</h3>
                    <pre><code>i = 0;

while (!deck.isInOrder()) {
print 'Iteration ' + i;
deck.shuffle();
i++;
}

print 'It took ' + i + ' iterations to sort the deck.';
</code></pre>

                </div>
            </div>

        </div>
    </section>

 Footer -->
<?php include("includes/footer.php");?>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>