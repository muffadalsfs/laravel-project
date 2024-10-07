<style>
/* General container styling */
.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Form header styling */
.container h2 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
    font-weight: bold;
}

/* Form group styling */
.form-group {
    margin-bottom: 15px;
}

/* Label styling */
.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #555;
}

/* Input styling */
.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    background-color: #fff;
    color: #333;
    transition: border-color 0.3s;
}

/* Focus effect for input fields */
.form-control:focus {
    border-color: #007bff;
    outline: none;
}

/* Button styling */
.btn {
    display: inline-block;
    width: 100%;
    padding: 12px 20px;
    font-size: 18px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

/* Hover effect for button */
.btn:hover {
    background-color: #0056b3;
}

/* Responsive styling */
@media (max-width: 768px) {
    .container {
        padding: 15px;
    }

    .form-control {
        font-size: 14px;
        padding: 8px;
    }

    .btn {
        font-size: 16px;
        padding: 10px;
    }
}
</style>

<div class="container">
    <h2>Create User</h2>

    <form action="route" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" class="form-control" id="age" name="age">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>

        <div class="form-group">
            <label for="country">Country:</label>
            <input type="text" class="form-control" id="country" name="country">
        </div>

        <div class="form-group">
            <label for="path">Image:</label>
            <input type="file" class="form-control" id="path" name="path">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
