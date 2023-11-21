<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Bootstrap Form</title>
</head>
<body>

<div class="container mt-5">
    <h2 class="font-weight-bold">placeholder</h2>
    <form>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="mb-3">
            <label for="Text" class="form-label">Textbox</label>
            <div>
                <textarea class="form-control" id="Text" rows="5" placeholder="Text"></textarea>
            </div>
        </div>
        <div class="mb-3">
            <label for="multipleSelect">multiple select</label>
            <select multiple class="form-control" id="multipleSelect">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-vB+zf4xw3LW0L0iBE3FbVzx4vP0m3UjF6xl2B0lUua7b0IdToll6wz9p5Bj5pd0z" crossorigin="anonymous"></script>
</body>
</html>
