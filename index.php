<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP PHP </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-2">
                    <div class="card-header text-center" >
                        <h4>ETUDIANT</h4>
                    </div>
                    <div class="card-body">

                        <form action="traitement.php" method="POST">
                        <div class="form-group mb-3">
                                
                            <div class="form-group mb-3">
                                <label for="nom">Matricule </label> 
		                        <input type="text" id="matricule" name="matricule" class="form-control" >
                            <div class="form-group mb-3">
                                <label for="nom">Nom </label>
		                        <input type="text" id="nom" name="nom" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="nom">prenom </label>
		                        <input type="text" id="prenom" name="prenom class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="nom">age </label>
		                        <input type="text" id="age" name="age" class="form-control" >
                            </div>
                            <div class="form-group mb-2">
                                <label for="nom">DateNaiss </label>
		                        <input type="text" id="datenaiss" name="datenaiss" class="form-control" >
                            </div>
                            </div> <br>
                            
                      

            

                            
                                <legend>Operation</legend>
                                <input type="submit" value="Save" name="btn">
                                <input type="submit" value="Update" name="btn">
                                <input type="submit" value="Delete" name="btn">

                                <input type="submit" value="Cancel" name="btn">
                       

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

