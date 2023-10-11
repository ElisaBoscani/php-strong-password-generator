<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
  <h1 class="text-center mt-5">Strong Password Generator</h1>
  <h2 class="text-center pt-3 pb-5">Genera una password sicura</h2>
  <div class="container">
    <form action="" method="get">
     <div class="row g-3 align-items-center justify-content-evenly ">
     <div class="col-auto">
        <label for="inputPassword6" class="col-form-label">Lunghezza Password:</label>
      </div>
     <div class="col-auto">
       <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
     </div>
     <div class="d-flex g-3 align-items-center justify-content-evenly  ">
        <p>
        Consenti ripetizioni di uno o più caratteri
        </p>
       <div class="d-flex flex-column">
          <div class="form-check">
           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
           <label class="form-check-label" for="flexRadioDefault1">
            Si
           </label>
          </div>
          <div class="form-check">
           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
           <label class="form-check-label" for="flexRadioDefault2">
            No
           </label>
          </div>
       </div>
     </div>
     <div class="pe-5">
       <div class="form-check form-check-reverse">
         <input class="form-check-input" type="checkbox" value="" id="reverseCheck_lettere">
         <label class="form-check-label" for="reverseCheck1">
         Lettere
         </label>
       </div>
       <div class="form-check form-check-reverse">
         <input class="form-check-input" type="checkbox" value="" id="reverseCheck_numeri">
         <label class="form-check-label" for="reverseCheck1">
         Numeri
         </label>
       </div>
       <div class="form-check form-check-reverse">
         <input class="form-check-input" type="checkbox" value="" id="reverseCheck_simboli">
         <label class="form-check-label" for="reverseCheck1">
         Simboli
         </label>
       </div>
     </div>
     <div class="d-flex g-3">
       <button type="submit" class="btn btn-primary">Invia</button>
       <button type="reset" class="btn  btn-secondary">Anulla</button>
     </div>
    </form>
  </div>
</body>
</html>