<html>
<head>
  <title>Praktikum Pembuatan Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container p-3 my-3 bg-success text-white">
  <h2><b>Registration Form</b></h2>
  <form class="form-horizontal" action="https://www.w3schools.com">
    <div class="form-group">
        <label class="control-label col-sm-1" for="userid">User id:</label>
        <div class="col-sm-4">
        <input type="userid" class="form-control" id="userid" placeholder="Enter user id" name="userid" minlength="5" maxlength="10" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-1" for="pwd">Password:</label>
        <div class="col-sm-4">
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" minlength="7" maxlength="12" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-1" for="name">Name:</label>
        <div class="col-sm-10">
        <input type="text" pattern="[A-Za-z]+" class="form-control" id="name" placeholder="Enter name" name="name" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-1" for="address">Address:</label>
        <div class="col-sm-10">
        <input type="address" class="form-control" id="address" placeholder="Enter address" name="address">
        </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-1" for="country">Country:</label>
      <div class="col-sm-6">
      <select class="form-control" required>
          <option value="" selected="country">(Please select a country)</option>
          <option>Brunei Darussalam</option>
          <option>Filipina</option>
          <option>Indonesia</option>
          <option>Kamboja</option>
          <option>Laos</option>
          <option>Malaysia</option>
          <option>Myanmar</option>
          <option>Singapura</option>
          <option>Thailand</option>
          <option>Vietnam</option>
      </select>
      </div>
      </div>
    <div class="form-group">
        <label class="control-label col-sm-1" for="zipcode">ZIP Code:</label>
        <div class="col-sm-5">
        <input type="number" pattern="[0-9]+" class="form-control" id="zipcode" placeholder="Enter zip code" name="zipcode" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-1" for="email">Email:</label>
        <div class="col-sm-5">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
        </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-1" for="sex">Sex:</label>
      <div class="col-sm-7">
        <input type="radio" name="sex" value="male" required><span> Male</span>
        <input type="radio" name="sex" value="female" required><span> Female</span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-1" for="language">Language:</label>
      <div class="col-sm-7">
        <input type="checkbox" name="language" value="english"><span> English</span>
        <input type="checkbox" name="language" value="nonenglish"><span> Non English</span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-1" for="about">About:</label>
      <div class="col-sm-10">
      <textarea id="about" name="about" style="width:100%; height:150px"></textarea>
      </div>
  </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>

