<section class="contact-section">
  <form action="process.php" method="post">
    <div class="elem-group">
      <label for="name">Your Name</label>
      <input type="text" id="name" name="name" placeholder="John Doe" pattern="[A-Z\sa-z]{3,20}" required>
    </div>
    <div class="elem-group">
      <label for="email">Your E-mail</label>
      <input type="email" id="m66" name="m66" placeholder="Your Valid Email*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" minlength="8" maxlength="255"/>
      <input type="email" id="m77" name="m77" placeholder="john.doe@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" minlength="8" maxlength="255" required>
    </div>
    <div class="elem-group">
      <label for="contact-reason">Reason for contacting me:</label>
      <select id="contact-reason" name="contact-reason" required>
          <option value="">Please select an option</option>
          <option value="business">I would like a website built for my business/organisation</option>
          <option value="agency">My design agency requires a freelance developer for contract work</option>
          <option value="employer">I would like to recruit you for employment</option>
          <option value="general">General enquiry</option>
      </select>
    </div>
    
    <div class="elem-group">
      <label for="message">Your message</label>
      <textarea id="message" name="visitor_message" placeholder="I own a small business and ..." pattern="[a-zA-Z0-9\?\.,! \(\)\&\/\-\_]+" rows="10" minlength="10" maxlength="500" required></textarea>
    </div>
    <input id="submit" type="submit" value="submit" />
  </form>
</section>