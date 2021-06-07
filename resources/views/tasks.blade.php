<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
    <title>Daily Task App</title>
<style>
 .btn {
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

.btn:hover {
  color: black;
}
</style>
 
</head>
<body>

<form>
    <div class="container">
    <div class="text-center">
     <br><h2>Daily Tasks</h2>
            <div class="row align-items-center">
                <div class="col-md-12"><br>
                <input type="text" class="form-control" name="task" placeholder="Enter your task Here" >
                </div> 
            </div>  <br>  
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                 <button class="btn btn-success"><i class="fa fa-plus-circle"></i> Add</button>  
                 <button class="btn btn-warning"><i class="fa fa-trash"></i> Trash</button>
            </div><br>
           <table class="table table-dark table-striped">
           <th>ID</th>
           <th>Task</th>
           <th>Completed</th>
           </table>
    </div>
    </div>
</form>
</body>
</html>