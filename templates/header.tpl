<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Fillum Mollusca</title>
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="home">
        <img src="./img/logo.jpg" alt="Logo" width="110" height="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Catalog
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Class">Classes</a></li>
                <li><a class="dropdown-item" href="Subclass">Subclasses</a></li>
                <li><a class="dropdown-item" href="Specie">Species</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
          
            {* <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> *}
            {if isset($smarty.session.IS_LOGGED)&&($smarty.session.IS_LOGGED)}
              <form class="d-flex" role="search">
                <button class="btn btn-outline-success" type="submit"><a class="nav-link active" aria-current="page" href="logout">Logout</a></button>
              </form>
              
            {else}
              <form class="d-flex" role="search">
                <button class="btn btn-outline-success" type="submit"><a class="nav-link active" aria-current="page" href="login">Login</a></button>
              </form>
            {/if}

        </div>
      </div>
    </nav>
    </header>

    <main class="container">
