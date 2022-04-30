<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini project</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,900&display=swap" rel="styleshee">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <br>
        <a class="btn btn-primary pull-right" href="../admin/login.php">Login</a>
        <br>
        <br>
        <h1 class="text-center">Welcome to student management system</h1>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 col-sm-offset-4">
                <form action="" method="post">
                    <table class="table table-bordered shadow p-3 mb-5 bg-white rounded">
                        <tr>
                            <th style="font-size: 20px;" class="text-center" colspan="2"><label for="">Student Information</label></th>
                        </tr>
                        <tr>
                            <th><label for="choose">Choose Class</label></th>
                            <td><select class="form-control" name="choose" id="choose">
                                <option value="">Select</option>
                                <option value="1">1st</option>
                                <option value="2">2nd</option>
                                <option value="3">3rd</option>
                            </select></td>
                        </tr>
                        <tr>
                            <th><label for="roll">Roll</label></th>
                            <td >
                                <input class="form-control" type="text" name="roll" id="">
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" colspan="2"><input class="btn btn-primary" type="submit" name="" id="" value="Show Info"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>
</html>