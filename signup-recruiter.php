
    <?php  include 'header.php';?>

    <h1>Signup</h1>
    <h3 class="ui dividing header">Recruiter</h3>

        <form action="" class="ui form">
            <h4 class="ui dividing header">UCF Verification</h4>
            <div class="field">
                <label>PID (numbers only)</label>
                <div class="input">
                    <input type="text" name="pid" placeholder="1234567">
                </div>
            </div>

            <h4 class="ui dividing header">Personal Information</h4>
            <div class="field">
                <label>Name</label>
                <div class="two fields">
                    <div class="field">
                        <input type="text" name="firstname" placeholder="First Name">
                    </div>
                    <div class="field">
                        <input type="text" name="lastname" placeholer="Last Name">
                    </div>
                </div>
                <label>Contact Info</label>
                <div class="fields">
                    <div class="twelve wide field">
                        <input type="email" name="email" placeholder="example@knights.ucf.edu">
                    </div>
                    <div class="four wide field">
                        <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="XXX-XXX-XXXX">
                    </div>
                </div>
                <label>Mailing Address</label>
                <div class="fields">
                    <div class="twelve wide field">
                        <input type="text" name="addressl1" placeholder="Street Address">
                    </div>
                    <div class="four wide field">
                        <input type="text" name="addressl2" placeholder="Apartment/PO Box #">
                    </div>
                </div>
                <div class="two fields">
                    <div class="ui fluid dropdown">
                        <!--paste in-->
                    </div>
                    <div class="field">
                        <input type="text" name="country" placeholder="Countnry">
                    </div>
                </div>
                <label>Login Info</label>
                <div class="fields">
                    <div class="field">
                        <input type="text" name="username" placeholder="User Name">
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="Password">
                    </div>
                </div>
            </div>
            <input type="submit">
        </form>
        <div class="ui inverted vertical footer segment">
                <div class="ui center aligned container">
                    <div class="ui stackable inverted divided grid">
                        <div class="three wide column">
                            <h4 class="ui inverted header">Group 1</h4>
                            <div class="ui inverted link list">
                                <a href="#" class="item">Link One</a>
                                <a href="#" class="item">Link Two</a>
                                <a href="#" class="item">Link Three</a>
                                <a href="#" class="item">Link Four</a>
                            </div>
                        </div>
                        <div class="three wide column">
                            <h4 class="ui inverted header">Group 2</h4>
                            <div class="ui inverted link list">
                                <a href="#" class="item">Link One</a>
                                <a href="#" class="item">Link Two</a>
                                <a href="#" class="item">Link Three</a>
                                <a href="#" class="item">Link Four</a>
                            </div>
                        </div>
                        <div class="three wide column">
                            <h4 class="ui inverted header">Group 3</h4>
                            <div class="ui inverted link list">
                                <a href="#" class="item">Link One</a>
                                <a href="#" class="item">Link Two</a>
                                <a href="#" class="item">Link Three</a>
                                <a href="#" class="item">Link Four</a>
                            </div>
                        </div>
                        <div class="seven wide column">
                            <h4 class="ui inverted header">Footer Header</h4>
                            <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
                        </div>
                    </div>
                    <div class="ui inverted section divider"></div>
                    <img src="assets/images/logo.png" class="ui centered mini image">
                    <div class="ui horizontal inverted small divided link list">
                        <a class="item" href="#">Site Map</a>
                        <a class="item" href="#">Contact Us</a>
                        <a class="item" href="#">Terms and Conditions</a>
                        <a class="item" href="#">Privacy Policy</a>
                    </div>
                </div>
            </div>

       <?php  include 'footer.php';?>
