<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
    <link rel="stylesheet" href="style/bootstrap.css">
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Add New Book(s)</h1>
            <div>
                <a href="" class="btn btn-primary">Book</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="title" placeholder="Book Title:">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="author" placeholder="Author name">
            </div>
            <div class="form-element my-4">
                <select name="typo" class="form-control">
                    <option value="">Select Book Type</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Sci-Fi">Sci-Fi</option>
                    <option value="Horror">Horror</option>
                </select>
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="description" placeholder="Book Description:">
            </div>
            <div class="form-element">
                <input type="submit" class="btn btn-success" name="create" value="Add Book">
            </div>
        </form> 
    </div>    
</body>
</html>