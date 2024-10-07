<style>
/* Container styling */
.container {
    margin-top: 20px;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Table styling */
.table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.table th, .table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.table th {
    background-color: #007bff;
    color: white;
}

.table td {
    background-color: #f1f1f1;
}

.table img {
    width: 50px;
    height: auto;
    border-radius: 4px;
}

/* Form styling */
.form-container {
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}

.form-container h2 {
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    font-weight: bold;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group input[type="number"],
.form-group input[type="file"] {
    width: 100%;
    padding: 10px;
    border-radius: 4px;
    border: 1px solid #ddd;
    margin-top: 5px;
}

.btn-primary {
    background-color: #007bff;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #0056b3;
}
</style>




<!-- Edit Form -->
<div class="form-container">
    <h2>Edit Student</h2>

    <form action="/edit-student/{{ $student->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Correct hidden method directive -->

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $student->name }}" required>
    </div>

    <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="{{ $student->age }}">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $student->email }}" required>
    </div>

    <div class="form-group">
        <label for="city">City:</label>
        <input type="text" id="city" name="city" value="{{ $student->city }}">
    </div>

    <div class="form-group">
        <label for="country">Country:</label>
        <input type="text" id="country" name="country" value="{{ $student->country }}">
    </div>

    <div class="form-group">
        <label for="path">Image:</label>
        <input type="file" id="path" name="path">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

</div>
