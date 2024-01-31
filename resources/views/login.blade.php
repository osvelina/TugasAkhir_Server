<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daeng Barbershop |Login</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    {{-- <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet"> --}}
    <style>
        /* Boostrap */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');



* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: #001524;
}

.wrapper {
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 50px 30px 30px 30px;
    background-color: #0f131b;
    border-radius: 15px;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}

.logo {
    width: 150px;
    margin: auto;
}

.logo img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 1px #5f5f5f,
        0px 0px 0px 1px #ecf0f3,
        2px 2px 3px #a7aaa7,
        -2px -2px 3px #fff;
}
/* title*/
.wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1px;
    padding-left: 10px;
    color:#ffffff;
}

.wrapper .form-field {
    width: 100%;
    border:none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #ffffff;
    padding: 10px 15px 10px 10px;
}

.wrapper .form-field input  {
    padding-left: 20px;
    margin-bottom: 20px;
    border-radius: 20px;
    background: white;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}



.wrapper .btn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: #03A9F4;
    color: #fff;
    border-radius: 25px;
    /* box-shadow: 3px 3px 3px #b1b1b1,
        -3px -3px 3px #fff; */
    letter-spacing: 1.3px;
}



@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
}
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="logo">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3LFooSa4Rzks4trgBAPPLW3h9MjpnT6L_Pg&usqp=CAU" alt="">
        </div>
        <div class="text-center mt-4 name">
            <h3>Daeng Barbershop</h3>
        </div>
        <div>
            <form class="p-3 mt-3">
                <div class="form-field d-flex align-items-center">
                    
            <form id="loginForm">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br><br>
                        </div>
            <button class="btn mt-3">Login</button>
    </div>
            {{-- <input type="submit" value="Login"> --}}
          </form>
        </div>
    </div>
    </div>
        {{-- </div>
        <form class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button class="btn mt-3">Login</button>
    </div> --}}



    
    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
          event.preventDefault(); // Prevent the form from submitting normally
    
          // Get the username and password from the form
          const username = document.getElementById("username").value;
          const password = document.getElementById("password").value;
    
          // Make a POST request to your backend endpoint for authentication
          fetch("https://your-backend-url.com/login", {
            method: "POST",
            headers: {
              "Content-Type": "application/json"
            },
            body: JSON.stringify({ username: username, password: password })
          })
          .then(response => {
            if (response.ok) {
              // Jika response dari backend adalah OK (200), lakukan sesuatu seperti redirect ke halaman lain
              // Misalnya:
              window.location.href = "dashboard.html";
            } else {
              throw new Error('Login gagal'); // Anda bisa menangani kesalahan sesuai kebutuhan Anda
            }
          })
          .catch(error => {
            console.error('Error:', error);
            // Anda bisa menampilkan pesan kesalahan kepada pengguna
          });
        });
      </script>
</body>
</html>