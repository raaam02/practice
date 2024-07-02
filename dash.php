<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <header>
      <!-- place navbar here -->
      <nav
        class="navbar navbar-expand-sm navbar-light bg-light navbar-collapse-md"
      >
        <div class="container">
          <a class="navbar-brand" href="#">Logo</a>
          <button
            class="navbar-toggler d-lg-none shadow-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul
              class="navbar-nav me-auto mt-2 mt-lg-0 d-flex justify-content-end flex-grow-1"
            >
              <li class="nav-item">
                <a class="nav-link" href="index.html" aria-current="page"
                  >Home <span class="visually-hidden">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contact.html">ContactUs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">AboutUS</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <!-- Data -->
       <?php 

include("conn.php");

$sql = "SELECT * FROM `user`";

$result = mysqli_query($conn, $sql);

echo "<div
    class='container-fluid p-1'
>
    <div
        class='table-responsive rounded'
    >
        <table
            class='table table-primary rounded'
        >
            <thead>
                <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>NAME</th>
                    <th scope='col'>EMAIL</th>
                    <th scope='col'>PASSWORD</th>
                    <th scope='col'>ACTION</th>
                </tr>
            </thead>
            <tbody>";

if (mysqli_num_rows($result)>0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr class=''>
                    <td scope='row'>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['pass']}</td>
                    <td>
                        <a class='btn btn-success' href='update.php?id={$row['id']}'>EDIT</a>
                        <a class='btn btn-danger' href='delete.php?id={$row['id']}'>DELETE</a>
                    </td>
                </tr>";
    }
    echo "</tbody>
        </table>
    </div>
    
</div>";
}
else {
    mysqli_error($conn);
}

mysqli_close($conn);

       ?>
      <div
        class="container"
      >
        
      </div>
      
    </main>
    <footer>
      <!-- place footer here -->
      <div class="p-5 border">
        <div class="row justify-content-center align-items-center g-2">
          <div class="col-12 col-lg-4 col-md-4 col-sm-12">
            <ul class="nav d-flex flex-column justify-content-center">
              <li class="nav-item">
                <a class="nav-link text-dark" href="#" aria-current="page"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#">ContactUs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#">Aboutus</a>
              </li>
            </ul>
          </div>
          <div class="col-12 col-lg-4 col-md-4 col-sm-12">
            <ul class="nav d-flex flex-column justify-content-center">
              <li class="nav-item">
                <a class="nav-link text-dark" href="#" aria-current="page"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#">ContactUs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#">Aboutus</a>
              </li>
            </ul>
          </div>
          <div class="col-12 col-lg-4 col-md-4 col-sm-12">
            <iframe
              class="img-fluid"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60274.56240750313!2d72.80458990804725!3d19.231850905354623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b128b333e163%3A0x985640540577af7e!2sBorivali%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1719897435694!5m2!1sen!2sin"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

