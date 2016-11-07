<?php require_once 'header.php'; ?>
<div class="container">

    <div class="row" id="">

        <div class="container col-md-5">
            <h2>Do you love your job?</h2>
            <p>I'm marketing copy, please kill me. Adipiscing vulputate adipiscing convallis vestibulum et vestibulum a vehicula sodales nunc viverra mus sit quam sagittis. Feugiat vestibulum pulvinar arcu sed vehicula a dolor maecenas suspendisse scelerisque dapibus iaculis justo aptent lacus at interdum.</p>
            <p><strong>Scelerisque a amet id sit aliquet a vestibulum</strong>.<br> A ut interdum hendrerit condimentum facilisis mus in id luctus consectetur a ut parturient. Scelerisque a a ipsum porttitor duis nisl per mus condimentum consectetur hendrerit nibh nullam praesent. Facilisi at molestie tellus imperdiet orci etiam praesent maecenas ac senectus id mattis sit proin mollis ad enim id sapien dictumst nunc vestibulum tempus himenaeos sodales himenaeos.</p>
            <ul>
                <li>This</li>
                <li>That</li>
                <li>Other Thing</li>
            </ul>

            <p>Iaculis sem maecenas ridiculus consequat ridiculus lacus facilisis dui adipiscing curae a nunc pulvinar hendrerit adipiscing dui eget vel lacinia ornare adipiscing id adipiscing ante. Laoreet maecenas parturient vestibulum sociosqu ac a sed ligula parturient.</p>

            <p>Sincerely,</p>
            <p>Your future overlords.</p>

        </div>

        <div class="col-md-6 offset-md-1 container" id="dev-registration-form">

            <h3>Register for Beta Access</h3>
            <hr>
            <form>
                <div class="form-group">
                    <label for="firstName">First name</label>
                    <input type="text" class="form-control" id="firstName" aria-describedby="firstName" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="lastName">Last name</label>
                    <input type="text" class="form-control" id="lastName" aria-describedby="lastNameHelp" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" aria-describedby="cityHelp" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country" aria-describedby="countryHelp" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="enlishLevel">English level (1–10):</label>
                    <select class="form-control" id="enlishLevel" required>
                        <option>—</option>
                        <?php for($i=1;$i<11;$i++) echo "<option value='$i'>$i</option>" ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleSelect2">Type of job I'm best at:</label>
                    <select class="form-control" id="exampleSelect2" required>
                        <option>—</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Design">Design</option>
                        <option value="Writing">Writing</option>
                        <option value="Development">Development</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Other languages spoken</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                </div>
                <br>
                <h5>Work History<small> (if applicable)</small></h5>
                <hr>
                <div class="form-group">
                    <label for="linkedIn">LinkedIn profile URL</label>
                    <input type="text" class="form-control" id="linkedIn" aria-describedby="linkedInHelp" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Upwork profile URL</label>
                    <input type="text" class="form-control" id="" aria-describedby="Help" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Onlinejobs.ph Profile URL</label>
                    <input type="text" class="form-control" id="" aria-describedby="Help" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Other URL?</label>
                    <input type="text" class="form-control" id="" aria-describedby="Help" placeholder="">
                </div>
                <br>
                <h5>Work Availability<small></small></h5>
                <hr>
                <div class="form-group">
                    <label for="daysOfWeek">Days of the week available:</label>
                    <select multiple class="form-control" id="daysOfWeek" required>
                        <option value="Marketing">Monday–Friday</option>
                        <option value="Marketing">All Week</option>
                        <option disabled>────────────────────</option>
                        <option value="Marketing">Monday</option>
                        <option value="Design">Tuesday</option>
                        <option value="Writing">Wednesday</option>
                        <option value="Development">Thursday</option>
                        <option value="Development">Friday</option>
                        <option value="Development">Saturday</option>
                        <option value="Development">Sunday</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="timeOfDay">Times of the day available:</label>
                    <select multiple class="form-control" id="timeOfDay" required>
                        <option>Work Hours (8a–5p)</option>
                        <option>All Day</option>
                        <option>All Night</option>
                        <option disabled>────────────────────</option>
                        <option>Mornings</option>
                        <option>Mid-day</option>
                        <option>Evenings</option>
                        <option>Late night</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="numHoursAvail">Number of Hours Available</label>
                    <input type="text" class="form-control" id="numHoursAvail" aria-describedby="HelpnumHoursAvail" placeholder=""  required>
                </div>
                <h5>Resume</h5>
                <hr>
                <div class="form-group">
                    <label for="exampleInputFile">Upload your resume/CV (if applicable)</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" required>
                    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                </div>

                <button type="submit" class="btn btn-primary">Submit Application</button>
            </form>

            <br><br><br><br>

        </div>

    </div>

</div>
<?php require_once 'footer.php'; ?>
