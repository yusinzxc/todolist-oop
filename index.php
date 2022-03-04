<?php 
  require_once './classes/init.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css">
    <title>Home</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-4 bg-white border shadow rounded mt-5">
          <div class="container mt-3">
            <?php 
              addTask();
              deleteTask();
              completeTask();
              undoTask();
            ?>
          </div>
          <div>
            <center>
              <h1>Todo</h1>
              <hr>
            </center>
          </div>
          <form action="" class="m-3 d-flex" style="gap: 10px;" method="POST">
            <input type="text" name="task" id="task" class="form-control w-100" autofocus>
            <button type="submit" class="btn btn-primary form-control" style="width: 20%;" name="add-task" value="<?php echo $status ?>">
              <i class="fa-solid fa-plus"></i>
            </button>
          </form>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col" style="width: 70%;">Task</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <?php readTask(false) ?> 
            </tbody>
          </table>
          <table class="table table-striped" >
            <thead>
              <tr>
                <th scope="col" style="width: 70%;">Complete</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody style="opacity: 70%;">
              <?php readTask(true) ?> 
            </tbody>
          </table>
        </div>
      </div> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
