<div>
 <h1> add detaial for send email<h1>
 <form action="list" method="POST">
    @csrf

    <div>
        <label for="email">Email:</label>
        <input type="email" name="to" id="email" required>
    </div>
    <div>
        <label for="email">Email subject:</label>
        <input type="text" name="subject" >
    </div>
    <div>
        <label for="message">Message:</label>
        <textarea name="message" id="message" required></textarea>
    </div>
    <div>
        <button type="submit">Send Email</button>
    </div>
</form>
</div>
