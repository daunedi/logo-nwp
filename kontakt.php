<?php
if(isset($_POST['submit'])){
  $to = "logo@example.com";
  $from = $_POST['email'];
  $first_name = $_POST['firstname'];
  $last_name = $_POST['lastname'];
  $subject = "Form submission";
  $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['subject'];

  $headers = "From:" . $from;
  $headers2 = "From:" . $to;
  mail($to,$subject,$message,$headers);
  echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
  }

    print'
      <main>
        <div class="kontakt" id="kontakt">
        <h1>Kontakt</h1>
        <iframe src="https://maps.google.com/maps?q=vvg%20velika%20gorica&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div>
                <form action="" id="forma" name="contact_form" method="POST">
                    <label for="fname">Ime *</label>
                    <input type="text" id="fname" name="firstname" placeholder="Vaše ime..." required>

                    <label for="lname">Prezime *</label>
                    <input type="text" id="lname" name="lastname" placeholder="Vaše prezime..." required>
                    
                    <label for="email">E-mail *</label>
                    <input type="email" id="email" name="email" placeholder="Vaš e-mail..." required>

                    <label for="country">Država</label>
                    <select id="country" name="country">
                      <option value="">Please select</option>
                      <option value="FR">France</option>
                      <option value="EN">England</option>
                      <option value="HR" selected>Croatia</option>
                      <option value="US">USA</option>
                      <option value="SP">Spain</option>
                      <option value="IR">Ireland</option>
                    </select>

                    <label for="subject">Upit</label>
                    <textarea id="subject" name="subject" placeholder="Pišite ovdje..." style="height:200px"></textarea>

                    <input type="submit" value="Submit">
                </form>
            </div> 
        </div>
      </main>
      <footer>
      </footer>
    </body>
    </html>
    ';
?>