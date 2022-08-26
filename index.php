<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <title>DataTable Configurator</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="flex-container">
                DataTable Configurator
                <input type="text" name="search" id="search">
            </div>
        </div>
    </header>

    <div class="container">

        <button class="toggle active">Server and Database</button>

        <div class="panel">
            
            <section id="db">
                <p>What database do you want to connect to?</p>

                <div class="grid-container">
                    <label for="host">Host</label>
                    <input type="text" name="host" id="host" value="localhost">

                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">

                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="root">

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">

                    <div></div>
    				<div class="flex-container">
						<button type="submit" name="connect_db" id="connectDatabase">Connect</button>
						<button type="reset">Reset</button>
					</div>
                </div>
            </section>


            <section id="tables">
                <div class="grid-container">
                    <label for="table">Table</label>
                    <select name="table" id="table">
                        <option value="1">puzzle</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>
            </section>

            <section id="columns">
                <div class="grid-container">
                    <div>Columns</div>

                    <div class="grid-container-2-col">

                        <div class="checkbox-container">
                            <input type="checkbox" id="cb1">
                            <label for="cb1">book_id</label>
                        </div>

                        <div class="checkbox-container">
                            <input type="checkbox" id="cb2">
                            <label for="cb2">user_id</label>
                        </div>

                        <div class="checkbox-container">
                            <input type="checkbox" id="cb3">
                            <label for="cb3">title</label>
                        </div>

                        <div class="checkbox-container">
                            <input type="checkbox" id="cb4">
                            <label for="cb4">author</label>
                        </div>

                        <div class="checkbox-container">
                            <input type="checkbox" id="cb5">
                            <label for="cb5">is_published</label>
                        </div>
                    </div>

                    <div></div>
                    <div class="flex-container">
                        <button type="submit" name="create_table">Generate Table</button>
                        <button type="button" id="checkAll">Check All</button>
                    </div>

                </div>
            </section>  
        </div> <!-- end server and db pannel -->

        <div id="dataTable">

            <button class="toggle active">DataTable</button>

            <div class="panel">
                <p>DataTable goes HERE.</p>
            </div>


            <button class="toggle active">Configurations</button>

            <div class="panel">
                <p>DataTable configurations go HERE.</p>
            </div>

        </div> <!-- end dataTable -->
        
    </div> <!-- end page container -->

</body>
</html>