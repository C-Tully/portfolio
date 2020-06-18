<section>
  <h3> Contact </h3>

  <p> Have a question or want to work together?</p>

  <form action="" type="">
    @php csrf_token() @endphp
    <input type='text' name="name" placeholder="Name..." required/>
    <input type='email' name="email" placeholder="johndoe@example.com" required/>
    <textarea name-"message"></textarea>
    <button type="submit" id="submit" value="submit">Submit</button>
  </form>
</section>